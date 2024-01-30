<?php

namespace App\Filament\Widgets;

use App\Models\Shop\Shop;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Vendedores', User::query()->where('role', 'vendor')->count())
                ->description('Cantidad de vendedores en BuhoGT')
                ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Clientes', User::query()->where('role', 'user')->count())
                ->descriptionIcon('heroicon-s-user-group')
                ->description('Cantidad de clientes en BuhoGT'),
            Stat::make('Tiendas', Shop::query()->count())
                ->descriptionIcon('entypo-shop')
                ->description('Cantidad de Tiendas en BuhoGT'),
        ];
    }
}
