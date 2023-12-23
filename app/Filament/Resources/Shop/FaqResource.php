<?php

namespace App\Filament\Resources\Shop;

use App\Filament\Resources\Shop\FaqResource\Pages;
use App\Filament\Resources\Shop\FaqResource\RelationManagers;
use App\Models\Faq;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Toggle;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;

class FaqResource extends Resource
{
    protected static ?string $model = Faq::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    protected static ?string $navigationParentItem = 'Preguntas frecuentes';

    protected static ?string $navigationGroup = 'Preguntas frecuentes';

    public static function getNavigationLabel(): string
    {
        return 'vendedores';
    }

    public static function getPluralModelLabel(): string
    {
        return __('Preguntas frecuentes Vendedores');
    }

    public static function getModelLabel(): string
    {
        return __('pregunta');
    }


    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('question_type', 'Seller');
    }

    // protected function mutateFormDataBeforeCreate(array $data): array
    // {
    //     $data['question_type'] = 'Seller';

    //     return $data;
    // }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('question')
                    ->required()
                    ->label('Nombre de pregunta'),
                Toggle::make('active')
                    ->label('Activo'),



                Select::make('question_type')
                    ->options([
                        'Buyer' => 'Compradores',
                        'Seller' => 'Vendedores',
                        'Service' => 'Servicios',
                    ])
                    // ->visible(false)
                    ->disabled()
                    ->default('Seller')
                    ->selectablePlaceholder(false)
                    ->label('Tipo de pregunta'),


                Forms\Components\RichEditor::make('answer')
                    ->columnSpan('full')
                    ->label('Contenido')
                    ->disableToolbarButtons([
                        // 'attachFiles',
                        // 'blockquote',
                        // 'bold',
                        // 'bulletList',
                        'codeBlock',
                        // 'h2',
                        // 'h3',
                        // 'italic',
                        // 'link',
                        // 'orderedList',
                        'redo',
                        // 'strike',
                        // 'underline',
                        'undo',
                    ])
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('question')
                    ->label('Pregunta'),
                TextColumn::make('answer')
                    ->label('Respuesta')
                    ->html(),
                IconColumn::make('active')
                    ->label('Activo')
                    ->boolean()

                // TextColumn::make('question')
                //     ->html()
                //     ->description(fn (Faq $record): string => $record->answer)
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFaqs::route('/'),
            // 'create' => Pages\CreateFaq::route('/create'),
            'edit' => Pages\EditFaq::route('/{record}/edit'),
        ];
    }
}
