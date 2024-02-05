<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            null => ListRecords\Tab::make('All')->label('Todas'),
            'Administradores' => ListRecords\Tab::make()->query(fn ($query) => $query->where('role', 'admin')),
            'Vendedores' => ListRecords\Tab::make()->query(fn ($query) => $query->where('role', 'vendor')),
            'Clientes' => ListRecords\Tab::make()->query(fn ($query) => $query->where('role', 'user')),
            // 'delivered' => ListRecords\Tab::make()->query(fn ($query) => $query->where('status', 'delivered')),
            'Servicio' => ListRecords\Tab::make()->query(fn ($query) => $query->where('role', 'service')),
        ];
    }
}
