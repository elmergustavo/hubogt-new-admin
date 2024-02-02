<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\ToggleColumn;

use Filament\Tables\Columns\IconColumn;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Usuarios';

    public static function getNavigationLabel(): string
    {
        return 'Usuarios';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('profile_photo_path')
                    ->label('Avatar')
                    ->getStateUsing(
                        function ($record)
                        {
                            if (empty($record->profile_photo_path))
                            {
                                return 'https://ui-avatars.com/api/?name=' . urlencode($record->name) . '&color=FFFFFF&background=252A61';
                            }

                            return $record->profile_photo_path;
                        }

                    )
                    ->circular(),

                TextColumn::make('name')
                    ->label('Nombre')
                    ->weight('bold')
                    ->toggleable()
                    ->searchable()
                    ->limit(20)
                    ->sortable(),
                TextColumn::make('email')
                    ->iconColor('primary')
                    ->copyable()
                    ->label('Correo Electrónico')
                    ->toggleable()
                    ->searchable()
                    ->copyMessage('Dirección de correo electrónico copiada')
                    ->copyMessageDuration(1500)
                    ->icon('heroicon-m-envelope'),
                ToggleColumn::make('status'),
                TextColumn::make('created_at')
                    ->toggleable()
                    ->searchable()
                    ->label('Cuenta creada')
                    ->dateTime()
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            // 'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
