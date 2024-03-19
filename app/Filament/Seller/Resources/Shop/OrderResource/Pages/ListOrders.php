<?php

namespace App\Filament\Seller\Resources\Shop\OrderResource\Pages;

use App\Filament\Seller\Resources\Shop\OrderResource;
use Filament\Actions;
use Filament\Pages\Concerns\ExposesTableToWidgets;
use Filament\Resources\Pages\ListRecords;

class ListOrders extends ListRecords
{
    use ExposesTableToWidgets;

    protected static string $resource = OrderResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return OrderResource::getWidgets();
    }

    public function getTabs(): array
    {
        return [
            null => ListRecords\Tab::make('All')->label('Todas'),
            'Nuevas' => ListRecords\Tab::make()->query(fn ($query) => $query->where('status', 'new')),
            'Procesando' => ListRecords\Tab::make()->query(fn ($query) => $query->where('status', 'processing')),
            'Entregados' => ListRecords\Tab::make()->query(fn ($query) => $query->where('status', 'shipped')),
            // 'delivered' => ListRecords\Tab::make()->query(fn ($query) => $query->where('status', 'delivered')),
            'Cancelados' => ListRecords\Tab::make()->query(fn ($query) => $query->where('status', 'cancelled')),
        ];
    }
}
