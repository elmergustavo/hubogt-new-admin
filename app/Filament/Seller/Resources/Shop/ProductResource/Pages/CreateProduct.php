<?php

namespace App\Filament\Seller\Resources\Shop\ProductResource\Pages;

use App\Filament\Seller\Resources\Shop\ProductResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $shopId = auth()->user()->shop->id; // Asumiendo que el usuario tiene una tienda;
        $data['shop_id'] = $shopId;


        return $data;
    }
}
