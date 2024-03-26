<?php

namespace App\Filament\SellerRequests\Resources;

use App\Models\Shop\Vendor;
use App\Filament\SellerRequests\Resources\RequestResource\Pages;
use App\Filament\SellerRequests\Resources\RequestResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Infolists\Infolist;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\ViewAction;
use Filament\Infolists\Components\TextEntry;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;



class RequestResource extends Resource
{
    protected static ?string $model = Vendor::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationLabel(): string
    {
        return 'Solicitudes';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Solicitudes de vendedores';
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('full_name')
                    ->label(''),
                TextEntry::make('phone')
                    ->label(''),
                TextEntry::make('email')
                    ->label(''),
            ]);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('full_name')
                    ->label('Nombre'),
                TextColumn::make('phone')
                    ->label('Telefono'),
                TextColumn::make('email')
                    ->label('Correo electronico'),
            ])
            ->filters([
            ])
            ->actions([
                ViewAction::make()
                    ->label('ver')
                    ->modalWidth('5xl'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('is_verified', false);
    }

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRequests::route('/'),
        ];
    }
}
