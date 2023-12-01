<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum OrderStatus: string implements HasColor, HasLabel
{
    case New = 'new';

    case Processing = 'processing';

    case Shipped = 'shipped';

    case Delivered = 'delivered';

    case Cancelled = 'cancelled';

    public function getLabel(): string
    {
        return match ($this) {
            self::New => 'Nuevo',
            self::Processing => 'Procesando',
            self::Shipped => 'Confirmado',
            self::Delivered => 'Delivered',
            self::Cancelled => 'Cancelado',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::New => 'gray',
            self::Processing => 'warning',
            self::Shipped => 'success',
            self::Delivered => 'success',
            self::Cancelled => 'danger',
        };
    }
}
