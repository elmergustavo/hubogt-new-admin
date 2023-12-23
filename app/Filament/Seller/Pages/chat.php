<?php

namespace App\Filament\Seller\Pages;

use Filament\Pages\Page;

class chat extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    protected static string $view = 'filament.seller.pages.chat';

    protected static ?string $navigationGroup = 'Mensajería';
}
