<?php

namespace App\Filament\Seller\Resources\Shop\ProductResource\Pages;

use App\Filament\Seller\Resources\Shop\ProductResource;
use Filament\Actions;
use Parallax\FilamentComments\Actions\CommentsAction;
use Filament\Resources\Pages\ViewRecord;
use Filament\Support\Enums\MaxWidth;

class ViewProduct extends ViewRecord
{
    protected static string $resource = ProductResource::class;

    protected function getActions(): array
    {
        return [
            CommentsAction::make()
                ->modalWidth(MaxWidth::ThreeExtraLarge),
            Actions\EditAction::make(),
        ];
    }
}
