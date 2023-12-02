<?php

namespace App\Filament\Seller\Resources\Shop\ProductResource\Widgets;

use App\Filament\Seller\Resources\Shop\ProductResource\Pages\ListProducts;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ProductStats extends BaseWidget
{
    use InteractsWithPageTable;

    protected static ?string $pollingInterval = null;

    protected function getTablePage(): string
    {
        return ListProducts::class;
    }

    protected function getStats(): array
    {
        return [
            Stat::make('Total de Productos', $this->getPageTableQuery()->count()),
            Stat::make('Inventario de productos', $this->getPageTableQuery()->sum('qty')),
            Stat::make('Precio promedio', number_format($this->getPageTableQuery()->avg('price'), 2)),
        ];
    }
}
