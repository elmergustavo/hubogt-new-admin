<?php

namespace App\Filament\Seller\Resources\Shop\ProductResource\Pages;

use App\Filament\Seller\Resources\Shop\ProductResource;
use Filament\Actions;
use Filament\Actions\Modal\Actions\Action;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Components\TextInput;
class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\Action::make('updateAuthor')
            ->form([
                TextInput::make('name')


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
