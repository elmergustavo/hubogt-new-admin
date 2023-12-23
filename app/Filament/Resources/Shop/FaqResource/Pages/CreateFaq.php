<?php

namespace App\Filament\Resources\Shop\FaqResource\Pages;

use App\Filament\Resources\Shop\FaqResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFaq extends CreateRecord
{
    protected static string $resource = FaqResource::class;

    // protected function mutateFormDataBeforeCreate(array $data): array
    // {
    //     $data['question_type'] = 'Seller';

    //     return $data;
    // }
}
