<?php

namespace App\Filament\Seller\Resources\Shop\OrderResource\Pages;

use App\Filament\Seller\Resources\Shop\OrderResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewOrder extends ViewRecord
{
    protected static string $resource = OrderResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
