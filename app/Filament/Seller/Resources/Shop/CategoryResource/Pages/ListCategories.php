<?php

namespace App\Filament\Seller\Resources\Shop\CategoryResource\Pages;

use App\Filament\Imports\Shop\CategoryImporter;
use App\Filament\Seller\Resources\Shop\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategories extends ListRecords
{
    protected static string $resource = CategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ImportAction::make()
                ->importer(CategoryImporter::class),
            Actions\CreateAction::make(),
        ];
    }
}
