<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Infolists\Components\IconEntry;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\ImageEntry;

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
        return $form->schema([
            Card::make()->schema([
                TextInput::make('name')->required(),
                TextInput::make('username'),
                FileUpload::make('profile_photo_path'),
                TextInput::make('phone'),
                Select::make('role')
                    ->options([
                        'admin' => 'Administrador',
                        'vendor' => 'Vendedor',
                        'service' => 'Servicio',
                        'user' => 'Usuario',
                    ])
                    ->default('user'),
                Toggle::make('status'),
                TextInput::make('email')->email()->unique()->required(),
                TextInput::make('password')->password(),
                // Agrega aquí más campos si es necesario
            ])->columns(2),
            // Puedes agregar más Card o campos fuera de Card aquí
        ]);
    }



    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->columns(2)
            ->schema([
                TextEntry::make('name')->label('Nombre'),
                TextEntry::make('email')->label('Correo Electrónico'),
                TextEntry::make('username')->label('Nombre de Usuario'),
                TextEntry::make('phone')->label('Teléfono'),
                TextEntry::make('role')->label('Rol'),
                IconEntry::make('status')->label('Estado')->boolean(),
                // Asumiendo que deseas mostrar el estado como booleano. Ajusta según sea necesario.
                // TextEntry::make('current_connected_account_id')->label('ID de Cuenta Conectada Actual'),
                // TextEntry::make('current_team_id')->label('ID de Equipo Actual'),
                ImageEntry::make('profile_photo_path')
                // Puedes agregar más campos según necesites
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
                // TextColumn::make('role')
                // ->badge(),
                BadgeColumn::make('RoleUser')
                    ->label(__('Role'))
                    ->sortable(['status'])
                    ->toggleable()
                    ->color(static function ($state): string
                    {
                        if ($state === __('Cliente'))
                        {
                            return 'warning';
                        }
                        elseif ($state === __('Administrador'))
                        {
                            return 'success';
                        }
                        return 'info';
                    }),
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
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            // 'edit' => Pages\EditUser::route('/{record}/edit'),
            // 'view' => Pages\ViewUser::route('/{record}/view'),
        ];
    }
}
