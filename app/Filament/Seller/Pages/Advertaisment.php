<?php

namespace App\Filament\Seller\Pages;

use Filament\Pages\Page;
use Filament\Support\Facades\FilamentView;
use Illuminate\Support\Facades\Blade;

class Advertaisment extends Page
{
    protected static ?string $navigationIcon = 'untitledui-announcement-02';

    protected static string $view = 'filament.seller.pages.advertaisment';

    protected static ?string $navigationGroup = 'Marketing';

    public static function getNavigationLabel(): string
    {
        return 'Publicidad';
    }

    // public function register(): void
    // {
    //     parent::register();
    //     // FilamentView::registerRenderHook('panels::body.end', fn(): string => Blade::render("@vite('resources/js/app.js')"));
    //     FilamentView::registerRenderHook('panels::body.end', fn(): string => Blade::render("@vite('resources/css/app.css')"));
    // }
}
