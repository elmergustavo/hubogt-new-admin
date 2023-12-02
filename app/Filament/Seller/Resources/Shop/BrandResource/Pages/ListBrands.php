<?php

namespace App\Filament\Seller\Resources\Shop\BrandResource\Pages;

use App\Filament\Seller\Resources\Shop\BrandResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBrands extends ListRecords
{
    protected static string $resource = BrandResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
