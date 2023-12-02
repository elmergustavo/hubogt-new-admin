<?php

namespace App\Filament\Seller\Pages;

use Filament\Pages\Page;

class Advertaisment extends Page
{
    protected static ?string $navigationIcon = 'untitledui-announcement-02';

    protected static string $view = 'filament.seller.pages.advertaisment';

    protected static ?string $navigationGroup = 'Marketing';

    public static function getNavigationLabel(): string
    {
        return 'Publicidad';
    }
}
