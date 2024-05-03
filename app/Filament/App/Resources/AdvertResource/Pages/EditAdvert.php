<?php

namespace App\Filament\App\Resources\AdvertResource\Pages;

use App\Filament\App\Resources\AdvertResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdvert extends EditRecord
{
    protected static string $resource = AdvertResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
