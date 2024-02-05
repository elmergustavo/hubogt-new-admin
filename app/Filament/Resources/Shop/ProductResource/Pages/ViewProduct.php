<?php

namespace App\Filament\Resources\Shop\ProductResource\Pages;

use App\Filament\Resources\Shop\ProductResource;
use Filament\Actions;
use Parallax\FilamentComments\Actions\CommentsAction;
use Filament\Resources\Pages\ViewRecord;
use Filament\Support\Enums\MaxWidth;
class ViewProduct extends ViewRecord
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\EditAction::make(),
            CommentsAction::make()
            ->modalWidth(MaxWidth::ThreeExtraLarge),
        ];
    }
}
