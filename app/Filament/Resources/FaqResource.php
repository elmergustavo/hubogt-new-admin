<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FaqResource\Pages;
use App\Filament\Resources\FaqResource\RelationManagers;
use App\Models\Faq;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables\Columns\IconColumn;

use Filament\Resources\Resource;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FaqResource extends Resource
{
    protected static ?string $model = Faq::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationLabel(): string
    {
        return 'Preguntas frecuentes';
    }

    public static function getPluralModelLabel(): string
    {
        return __('Preguntas frecuentes');
    }

    public static function getModelLabel(): string
    {
        return __('pregunta frecuente');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('question')
                    ->required()
                    ->label('Nombre de pregunta'),
                Toggle::make('active'),


                // Forms\Components\TextInput::make('answer')
                //     ->label('Descripción')
                //     ->columnSpan('full'),
                Forms\Components\RichEditor::make('answer')
                    ->columnSpan('full')
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
                TextColumn::make('question'),
                TextColumn::make('answer')
                    ->html(),
                IconColumn::make('active')
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
            // 'edit' => Pages\EditFaq::route('/{record}/edit'),
        ];
    }
}
