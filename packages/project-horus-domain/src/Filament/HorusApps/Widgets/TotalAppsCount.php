<?php

namespace Wzrd\HorusDomain\Filament\HorusApps\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Wzrd\HorusDomain\Model\HorusApps;

class TotalAppsCount extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Apps', HorusApps::count())
                ->color('success'),
            ];
    }
}
