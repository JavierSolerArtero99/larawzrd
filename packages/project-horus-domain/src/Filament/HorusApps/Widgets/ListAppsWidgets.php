<?php

namespace Wzrd\HorusDomain\Filament\HorusApps\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Wzrd\HorusDomain\Model\HorusApps;
use Wzrd\HorusDomain\Model\HorusInteraction;

class ListAppsWidgets extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Apps', HorusApps::count())
                ->icon('heroicon-o-cube-transparent'),
            Stat::make('Total Interactions', HorusInteraction::count())
                ->icon('heroicon-o-finger-print'),
        ];
    }
}
