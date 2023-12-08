<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\Shop\OrderResource;
use App\Models\Shop\Order;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Squire\Models\Currency;

class LatestOrders extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort = 2;

    public static function getPluralModelLabel(): string
    {
        return __('Ultimos pedidos');
    }

    public static function getModelLabel(): string
    {
        return __('Ultimos pedidos');
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(OrderResource::getEloquentQuery())
            ->defaultPaginationPageOption(5)
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Fecha de orden')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('number')
                    ->label('Número de orden')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('customer.name')
                    ->label('Nombre del cliente')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->label('Estado')
                    ->badge(),
                // Tables\Columns\TextColumn::make('currency')
                //     ->getStateUsing(fn ($record): ?string => Currency::find($record->currency)?->name ?? null)
                //     ->searchable()
                //     ->sortable(),
                Tables\Columns\TextColumn::make('total_price')
                    ->label('Precio total')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('shipping_price')
                    ->label('Costo original')
                    ->searchable()
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\Action::make('Ver detalle')
                    ->url(fn (Order $record): string => OrderResource::getUrl('edit', ['record' => $record])),
            ]);
    }
}
