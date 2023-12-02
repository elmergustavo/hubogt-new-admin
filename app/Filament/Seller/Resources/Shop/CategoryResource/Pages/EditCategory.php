<?php

namespace App\Filament\Seller\Resources\Shop\CategoryResource\Pages;

use App\Filament\Seller\Resources\Shop\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategory extends EditRecord
{
    protected static string $resource = CategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
