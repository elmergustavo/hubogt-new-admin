<?php

namespace App\Filament\Seller\Resources\Shop\ProductResource\Pages;

use App\Filament\Seller\Resources\Shop\ProductResource;
use Filament\Actions;
use Filament\Actions\Modal\Actions\Action;
use Filament\Resources\Pages\EditRecord;
use Parallax\FilamentComments\Actions\CommentsAction;
use Filament\Forms\Components\TextInput;
use Filament\Support\Enums\MaxWidth;
class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CommentsAction::make()->modalWidth(MaxWidth::ThreeExtraLarge),
        ];
    }

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\Action::make('Comentarios')
            ->form([
                TextInput::make('Descripción')


            ])
            ->action(function (array $data): void
            {
                // ...
            })
            ->slideOver()
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
}
