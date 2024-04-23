<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum AdvertStatus: string implements HasColor, HasIcon, HasLabel
{
    case Active = 'active';
    case Draft = 'draft';
    case Expired = 'expired';

    public function getLabel(): string
    {
        return match ($this) {
            self::Active => 'Active',
            self::Draft => 'Draft',
            self::Expired => 'Expired',
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Active => 'success',
            self::Draft => 'warning',
            self::Expired => 'danger',
        };
    }

    public function getIcon(): string
    {
        return match ($this) {
            self::Expired => 'heroicon-o-x-circle',
            self::Draft => 'heroicon-o-document-text',
            self::Active => 'heroicon-o-check-circle',
        };

    }
}
