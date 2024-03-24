<?php

namespace App\Filament\SellerRequests\Resources\RequestResource\Pages;

use App\Filament\SellerRequests\Resources\RequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewRequest extends ViewRecord
{
    protected static string $resource = RequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
