<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum FaqStatus: string implements HasColor, HasIcon, HasLabel
{
    case NotActive = 'not-active';
    case Draft = 'draft';
    case Published = 'published';

    public function getLabel(): string
    {
        return match ($this) {
            self::NotActive => 'Not Active',
            self::Draft => 'Draft',
            self::Published => 'Published',
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::NotActive => 'danger',
            self::Draft => 'warning',
            self::Published => 'success',
        };
    }

    public function getIcon(): string
    {
        return match ($this) {
            self::NotActive => 'heroicon-o-x-circle',
            self::Draft => 'heroicon-o-document-text',
            self::Published => 'heroicon-o-check-circle',
        };
    }
}
