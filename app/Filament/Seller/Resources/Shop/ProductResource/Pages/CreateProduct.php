<?php

namespace App\Filament\Seller\Resources\Shop\ProductResource\Pages;

use App\Filament\Seller\Resources\Shop\ProductResource;
use App\Models\User;
use Filament\Notifications\Actions\Action;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;


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

    protected function afterCreate(): void
    {
        // Obtener todos los usuarios con el rol de administrador
        $administrators = User::where('role', 'admin')->get();

        $recipient = auth()->user();

        // Enviar la notificación a cada administrador
        foreach ($administrators as $admin)
        {
            Notification::make()
                ->title('Producto Creado')
                ->success()
                ->actions([
                    Action::make('view')
                    ->button(),
                    // ->url(route('products.show', $post), shouldOpenInNewTab: true),
                ])
                ->body('Un nuevo producto ha sido creado.')
                ->sendToDatabase($admin);
        }



    }
}
