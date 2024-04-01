<?php

namespace Wzrd\HorusDomain\Filament\HorusApps\Resources;

use Wzrd\HorusDomain\Filament\HorusApps\Resources\Pages\ListApps;
use Wzrd\HorusDomain\Filament\HorusApps\Widgets\ListAppsWidgets;
use Wzrd\HorusDomain\Model\HorusApps;
use Filament\Resources\Resource;

class HorusAppsResource extends Resource
{
    protected static ?string $model = HorusApps::class;
    protected static ?int $navigationSort = 10;
    protected static ?string $navigationIcon = 'heroicon-o-cube-transparent';

    public static function getPages(): array
    {
        return [
            'index' => ListApps::route('/'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            ListAppsWidgets::class,
        ];
    }
}
