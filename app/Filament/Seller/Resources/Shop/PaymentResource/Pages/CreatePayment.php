<?php

namespace App\Filament\Seller\Resources\Shop\PaymentResource\Pages;

use App\Filament\Seller\Resources\Shop\PaymentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePayment extends CreateRecord
{
    protected static string $resource = PaymentResource::class;
}
