<?php

namespace App\Filament\Seller\Resources\Shop\PaymentResource\Pages;

use App\Filament\Seller\Resources\Shop\PaymentResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPayment extends ViewRecord
{
    protected static string $resource = PaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
