<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum ProductStatus: string implements HasColor, HasIcon, HasLabel
{
    case Approved = 'approved';

    case Rejected = 'rejected';

    case Needs_review = 'needs_review';

    // case Service = 'servicio';

    // case Cancelled = 'cancelled';

    public function getLabel(): string
    {
        return match ($this)
        {
            self::Approved => 'Aprovados',
            self::Rejected => 'Rechazados',
            self::Needs_review => 'Necesita revisión',
            // self::Service => 'servicio',
            // self::Cancelled => 'Cancelado',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this)
        {
            self::Approved => 'success',
            self::Rejected => 'danger',
            self::Needs_review => 'warning',
            // self::Service => 'success',
            // self::Cancelled => 'danger',
        };
    }


    public function getIcon(): ?string
    {
        return match ($this)
        {
            self::Approved => 'heroicon-m-check-badge',
            self::Rejected => 'heroicon-m-x-circle',
            self::Needs_review => 'heroicon-m-arrow-path',
            // self::Service => 'heroicon-m-check-badge',
            // self::Cancelled => 'heroicon-m-x-circle',
        };
    }
}
