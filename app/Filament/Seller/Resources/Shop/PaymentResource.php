<?php

namespace App\Filament\Seller\Resources\Shop;

use App\Filament\Seller\Resources\Shop\PaymentResource\Pages;
use App\Filament\Seller\Resources\Shop\PaymentResource\RelationManagers;
use App\Models\Shop\Payment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaymentResource extends Resource
{
    protected static ?string $model = Payment::class;

    protected static ?string $navigationIcon = 'fluentui-payment-24-o';

    protected static ?string $navigationGroup = 'Shop';

    protected static ?int $navigationSort = 3;

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
                Tables\Columns\TextColumn::make('reference')
                    ->label('Número de referencia')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('order.customer.name')
                    ->label('Número de referencia')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Fecha')
                    ->date()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('amount')
                    ->label('Monto')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('method')
                    ->label('Método de pago')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListPayments::route('/'),
            'create' => Pages\CreatePayment::route('/create'),
            // 'view' => Pages\ViewPayment::route('/{record}'),
            // 'edit' => Pages\EditPayment::route('/{record}/edit'),
        ];
    }
}
