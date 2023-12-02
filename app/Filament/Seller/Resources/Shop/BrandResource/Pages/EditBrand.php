<?php

namespace App\Filament\Seller\Resources\Shop\BrandResource\Pages;

use App\Filament\Seller\Resources\Shop\BrandResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBrand extends EditRecord
{
    protected static string $resource = BrandResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
