<?php

namespace Wzrd\HorusDomain\Filament\Plugins;

use Filament\Contracts\Plugin;
use Wzrd\HorusDomain\Filament\HorusApps\Resources\HorusAppsResource;
use Wzrd\HorusDomain\Filament\HorusInteraction\Resources\HorusInteractionResource;
use Wzrd\HorusDomain\Filament\HorusInteraction\Widgets\PlatformChart;

class HorusPlugin implements Plugin
{

    public static function make(): static
    {
        return app(static::class);
    }

    public function getId(): string
    {
        return 'wzrd-horus';
    }

    public function register(\Filament\Panel $panel): void
    {
        $panel->resources([
            HorusInteractionResource::class,
            HorusAppsResource::class,
        ])
        ->widgets([
            PlatformChart::class
        ]);
    }

    public function boot(\Filament\Panel $panel): void
    {}
}
