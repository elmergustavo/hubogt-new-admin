<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum UserRole: string implements HasColor, HasIcon, HasLabel
{
    case User = 'Cliente';

    case Vendor = 'Vendedor';

    case Admin = 'Administradores';

    case Service = 'servicio';

    // case Cancelled = 'cancelled';

    public function getLabel(): string
    {
        return match ($this)
        {
            self::User => 'Cliente',
            self::Vendor => 'Vendedor',
            self::Admin => 'Administradores',
            self::Service => 'servicio',
            // self::Cancelled => 'Cancelado',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this)
        {
            self::User => 'info',
            self::Vendor => 'warning',
            self::Admin => 'success',
            self::Service => 'success',
            // self::Cancelled => 'danger',
        };
    }


    public function getIcon(): ?string
    {
        return match ($this)
        {
            self::User => 'heroicon-m-sparkles',
            self::Vendor => 'heroicon-m-arrow-path',
            self::Admin => 'heroicon-m-check-badge',
            self::Service => 'heroicon-m-check-badge',
            // self::Cancelled => 'heroicon-m-x-circle',
        };
    }
}
