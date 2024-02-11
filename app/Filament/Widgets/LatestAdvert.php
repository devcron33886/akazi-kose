<?php

namespace App\Filament\Widgets;

use App\Enums\AdvertStatus;
use App\Models\Advert;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;

class LatestAdvert extends BaseWidget
{
    public int | string | array $columnSpan = 'full';

    public function getTableQuery(): Builder|Relation|null
    {
        return Advert::query()->with(['institution', 'category'])->latest();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('title')
                ->searchable(),

            TextColumn::make('deadline')
                ->date()
                ->sortable(),

            TextColumn::make('location')
                ->searchable(),

            TextColumn::make('number_of_positions')
                ->numeric()
                ->sortable(),
            TextColumn::make('status')
                ->badge(AdvertStatus::class),
        ];
    }
}
