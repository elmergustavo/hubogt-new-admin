<?php

namespace App\Filament\Resources\Shop\ProductResource\Pages;

use App\Filament\Resources\Shop\ProductResource;
use Filament\Actions;
use Filament\Pages\Concerns\ExposesTableToWidgets;
use Filament\Resources\Pages\ListRecords;

class ListProducts extends ListRecords
{
    use ExposesTableToWidgets;

    protected static string $resource = ProductResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return ProductResource::getWidgets();
    }


    public function getTabs(): array
    {
        return [
            null => ListRecords\Tab::make('All')->label('Todas'),
            'Necesita revisión' => ListRecords\Tab::make()->query(fn ($query) => $query->where('status', 'needs_review')),
            'Aprovados' => ListRecords\Tab::make()->query(fn ($query) => $query->where('status', 'approved')),
            'Rechazados' => ListRecords\Tab::make()->query(fn ($query) => $query->where('status', 'rejected')),
            // 'delivered' => ListRecords\Tab::make()->query(fn ($query) => $query->where('status', 'delivered')),
            // 'Servicio' => ListRecords\Tab::make()->query(fn ($query) => $query->where('role', 'service')),
        ];
    }
}
