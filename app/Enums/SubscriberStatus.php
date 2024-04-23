<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum SubscriberStatus: string implements HasColor, HasIcon, HasLabel
{
    case Active = 'subscribed';
    case Unsubscribed = 'unsubscribed';

    public function getLabel(): string
    {
        return match ($this) {
            self::Active => 'Sunscribed',
            self::Unsubscribed => 'Unsubscribed',
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Active => 'success',
            self::Unsubscribed => 'warning',
        };
    }

    public function getIcon(): string
    {
        return match ($this) {
            self::Active => 'heroicon-o-check-circle',
            self::Unsubscribed => 'heroicon-o-x-circle',
        };
    }
}
