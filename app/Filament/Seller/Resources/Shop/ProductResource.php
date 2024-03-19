<?php

namespace App\Filament\Seller\Resources\Shop;

use App\Filament\Seller\Resources\Shop\BrandResource\RelationManagers\ProductsRelationManager;
use App\Filament\Seller\Resources\Shop\ProductResource\Pages;
use App\Filament\Seller\Resources\Shop\ProductResource\RelationManagers;
use App\Filament\Seller\Resources\Shop\ProductResource\Widgets\ProductStats;
use App\Models\Shop\Product;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\Page;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\QueryBuilder;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Columns\TextInputColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\QueryBuilder\Constraints\BooleanConstraint;
use Filament\Tables\Filters\QueryBuilder\Constraints\DateConstraint;
use Filament\Tables\Filters\QueryBuilder\Constraints\NumberConstraint;
use Filament\Tables\Filters\QueryBuilder\Constraints\TextConstraint;
use Filament\Tables\Table;
use Filament\Support\Enums\MaxWidth;
use Parallax\FilamentComments\Tables\Actions\CommentsAction;

// use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $slug = 'shop/products';

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationGroup = 'Shop';

    protected static ?string $navigationIcon = 'bx-store';

    // protected static ?string $navigationLabel = 'Productos';

    protected static ?int $navigationSort = 0;

    public static function getNavigationLabel(): string
    {
        return 'Productos';
    }

    public static function getPluralModelLabel(): string
    {
        return __('Productos');
    }

    public static function getModelLabel(): string
    {
        return __('Producto');
    }

    public static function getEloquentQuery(): Builder
    {

        $shopId = optional(auth()->user()->shop)->id; // Devuelve null si `shop` es null



        if ($shopId)
        {
            return parent::getEloquentQuery()->where('shop_id', $shopId);
        }
        else
        {
            // Manejar el caso cuando shopId es null
            // Por ejemplo, puedes devolver una consulta que no retorne nada
            return parent::getEloquentQuery()->whereRaw('1 = 0');
        }
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->label('Nombre')
                                    ->maxLength(60)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function (string $operation, $state, Forms\Set $set)
                                    {
                                        if ($operation !== 'create')
                                        {
                                            return;
                                        }

                                        $set('slug', Str::slug($state));
                                    }),

                                Forms\Components\TextInput::make('slug')
                                    ->disabled()
                                    ->dehydrated()
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(Product::class, 'slug', ignoreRecord: true),

                                Forms\Components\MarkdownEditor::make('description')
                                    ->label('Descripción')
                                    ->columnSpan('full'),
                            ])
                            ->columns(2),

                        Forms\Components\Section::make('Imagenes del producto')
                            ->description('Sube tus imágenes en el orden correspondiente con el cual quieres que aparezcan en la página web.')
                            ->schema([
                                SpatieMediaLibraryFileUpload::make('media')
                                    ->collection('product-images')
                                    ->multiple()
                                    ->preserveFilenames()
                                    ->minFiles(4)
                                    ->maxFiles(8)
                                    ->image()
                                    ->imageEditor()
                                    // ->imageEditorViewportWidth('1920')
                                    // ->imageEditorViewportHeight('1080')
                                    ->openable()
                                    ->moveFiles()
                                    ->downloadable()
                                    ->hiddenLabel()
                                    ->validationMessages([
                                        'min' => 'Faltan imágenes. Añade al menos 4.',
                                        'max' => 'Has superado el límite de 8 imágenes.',
                                    ]),
                            ])
                            ->collapsible(),

                        Forms\Components\Section::make('Precios')
                            ->schema([
                                Forms\Components\TextInput::make('price')
                                    ->label('Precio original')
                                    ->numeric()
                                    ->rules(['regex:/^\d{1,6}(\.\d{0,2})?$/'])
                                    ->prefix('Q.')
                                    ->required(),

                                Forms\Components\TextInput::make('old_price')
                                    ->label('Precio descuento')
                                    ->numeric()
                                    ->prefix('Q.')
                                    ->rules(['regex:/^\d{1,6}(\.\d{0,2})?$/'])
                                    ->required(),

                                // Forms\Components\TextInput::make('cost')
                                //     ->label('Cost per item')
                                //     ->helperText('Customers won\'t see this price.')
                                //     ->numeric()
                                //     ->prefix('Q.')
                                //     ->rules(['regex:/^\d{1,6}(\.\d{0,2})?$/'])
                                //     ->required(),
                            ])
                            ->columns(2),
                        Forms\Components\Section::make('Inventario')
                            ->schema([
                                Forms\Components\TextInput::make('sku')
                                    ->label('SKU (Stock Keeping Unit)')
                                    ->unique(Product::class, 'sku', ignoreRecord: true)
                                    ->maxLength(255)
                                    ->required(),

                                Forms\Components\TextInput::make('barcode')
                                    ->label('Barcode (ISBN, UPC, GTIN, etc.)')
                                    ->unique(Product::class, 'barcode', ignoreRecord: true)
                                    ->maxLength(255)
                                    ->required(),

                                Forms\Components\TextInput::make('qty')
                                    ->label('Quantity')
                                    ->numeric()
                                    ->rules(['integer', 'min:0'])
                                    ->required(),

                                Forms\Components\TextInput::make('security_stock')
                                    ->helperText('The safety stock is the limit stock for your products which alerts you if the product stock will soon be out of stock.')
                                    ->numeric()
                                    ->rules(['integer', 'min:0'])
                                    ->required(),
                            ])
                            ->columns(2),

                        Forms\Components\Section::make('Shipping')
                            ->schema([
                                Forms\Components\Checkbox::make('backorder')
                                    ->label('This product can be returned'),

                                Forms\Components\Checkbox::make('requires_shipping')
                                    ->label('This product will be shipped'),
                            ])
                            ->columns(2),
                    ])
                    ->columnSpan(['lg' => 2]),

                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Status')
                            ->schema([
                                Forms\Components\Toggle::make('is_visible')
                                    ->label('Visible')
                                    ->helperText('This product will be hidden from all sales channels.')
                                    ->default(true),

                                Forms\Components\DatePicker::make('published_at')
                                    ->label('Availability')
                                    ->default(now())
                                    ->required(),
                            ]),

                        Forms\Components\Section::make('Associations')
                            ->schema([
                                Forms\Components\Select::make('shop_brand_id')
                                    ->relationship('brand', 'name')
                                    ->searchable()
                                    ->hiddenOn(ProductsRelationManager::class),

                                Forms\Components\Select::make('categories')
                                    ->relationship('categories', 'name')
                                    ->multiple()
                                    ->required(),
                            ]),
                    ])
                    ->columnSpan(['lg' => 1]),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\SpatieMediaLibraryImageColumn::make('product-image')
                    ->label('Imagen')
                    ->stacked()
                    ->size(70)
                    ->square()


                    // ->circular()
                    ->limit(3)
                    ->limitedRemainingText(isSeparate: true)
                    ->collection('product-images'),

                Tables\Columns\TextColumn::make('name')
                    ->label('Nombre del producto')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('brand.name')
                    ->label('Marca')
                    ->searchable()
                    ->sortable()
                    ->toggleable()
                    ->toggledHiddenByDefault(),

                // Tables\Columns\IconColumn::make('is_visible')
                //     ->label('Visibility')
                //     ->sortable()
                //     ->toggleable(),

                Tables\Columns\TextColumn::make('price')
                    ->prefix('Q.')
                    ->label('Precio')
                    ->searchable()
                    ->sortable(),

                TextInputColumn::make('discount')
                    // ->numeric()
                    // ->inputMode('decimal')
                    ->rules(['min:0', 'numeric'])
                    ->type('number')
                    ->toggleable()
                    ->label('Precio con descuento')
                    ->afterStateUpdated(function ($record, $state)
                    {
                        // Runs before the state is saved to the database.
                        // \Log::info("message");
                        if ($state > $record->price)
                        {


                            Notification::make()
                                ->title('El valor de descuento no puede ser menor al precio')
                                ->danger()
                                ->send();


                            $record->discount = null;
                            $record->save();
                        }
                        else
                        {
                            Notification::make()
                                ->title('Se actualizón el precio de descuento correctamente')
                                ->success()
                                ->send();
                        }
                    }),

                Tables\Columns\TextColumn::make('amount_including_vat')
                    ->label('Porcentaje(%)')
                    ->state(function (Model $record): string
                    {

                        if ($record->discount == null)
                        {
                            return '0 %';
                        }
                        else
                        {

                            return number_format((($record->price - $record->discount) / $record->price) * 100, 2) . ' %';
                        }
                    }),

                Tables\Columns\TextColumn::make('sku')
                    ->label('SKU')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('qty')
                    ->label('Cantidad')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('security_stock')
                    ->label('Seguridad de Stock')
                    ->searchable()
                    ->sortable()
                    ->toggleable()
                    ->toggledHiddenByDefault(),

                ToggleColumn::make('is_visible')
                    ->label('Estado'),

                Tables\Columns\TextColumn::make('published_at')
                    ->label('Fecha de publicación')
                    ->date()
                    ->sortable()
                    ->toggleable()
                    ->toggledHiddenByDefault(),
            ])
            ->filters([
                // Tables\Filters\TrashedFilter::make(),
                Filter::make('is_visible')
                    ->query(fn (Builder $query): Builder => $query->where('is_visible', true))
            ])
            // ->filters([
            //     QueryBuilder::make()
            //         ->constraints([
            //             TextConstraint::make('name'),
            //             TextConstraint::make('slug'),
            //             TextConstraint::make('sku')
            //                 ->label('SKU (Stock Keeping Unit)'),
            //             TextConstraint::make('barcode')
            //                 ->label('Barcode (ISBN, UPC, GTIN, etc.)'),
            //             TextConstraint::make('description'),
            //             NumberConstraint::make('old_price')
            //                 ->label('Compare at price')
            //                 ->icon('heroicon-m-currency-dollar'),
            //             NumberConstraint::make('price')
            //                 ->icon('heroicon-m-currency-dollar'),
            //             NumberConstraint::make('cost')
            //                 ->label('Cost per item')
            //                 ->icon('heroicon-m-currency-dollar'),
            //             NumberConstraint::make('qty')
            //                 ->label('Quantity'),
            //             NumberConstraint::make('security_stock'),
            //             BooleanConstraint::make('is_visible')
            //                 ->label('Visibility'),
            //             BooleanConstraint::make('featured'),
            //             BooleanConstraint::make('backorder'),
            //             BooleanConstraint::make('requires_shipping')
            //                 ->icon('heroicon-m-truck'),
            //             DateConstraint::make('published_at'),
            //         ])
            //         ->constraintPickerColumns(2),
            // ], layout: Tables\Enums\FiltersLayout::AboveContentCollapsible)
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                CommentsAction::make()
                    ->modalWidth(MaxWidth::ThreeExtraLarge),
            ])
            ->groupedBulkActions([
                Tables\Actions\DeleteBulkAction::make()
                // ->action(function () {
                //     Notification::make()
                //         ->title('Now, now, don\'t be cheeky, leave some records for others to play with!')
                //         ->warning()
                //         ->send();
                // }),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\CommentsRelationManager::class,
        ];
    }

    public static function getWidgets(): array
    {
        return [
            ProductStats::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'view' => Pages\ViewProduct::route('/{record}'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'sku', 'brand.name'];
    }

    public static function getGlobalSearchResultDetails(Model $record): array
    {
        /** @var Product $record */

        return [
            'Brand' => optional($record->brand)->name,
        ];
    }

    public static function getGlobalSearchEloquentQuery(): Builder
    {
        return parent::getGlobalSearchEloquentQuery()->with(['brand']);
    }

    // public static function getNavigationBadge(): ?string
    // {
    //     return static::$model::whereColumn('qty', '<', 'security_stock')->count();
    // }
}
