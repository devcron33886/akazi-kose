<?php

namespace App\Filament\Widgets;

use App\Models\Advert;
use App\Models\Category;
use App\Models\Institution;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AdvertWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Categories', Category::count())
                ->description('Total categories')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Stat::make('Advert', Advert::count())
                ->description('Total adverts')
                ->chart([17, 2, 30, 3, 15, 4, 17])
                ->color('info'),
            Stat::make('Institution', Institution::count())
                ->description('Total institutions')
                ->chart([17, 2, 0, 3, 15, 4, 17])
                ->color('warning'),
        ];
    }
}
