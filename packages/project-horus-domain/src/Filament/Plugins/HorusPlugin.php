<?php

namespace Wzrd\HorusDomain\Filament\Plugins;

use Filament\Contracts\Plugin;
use Wzrd\HorusDomain\Filament\HorusInteraction\Resources\HorusInteraction;

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
            HorusInteraction::class,
        ]);
    }

    public function boot(\Filament\Panel $panel): void
    {}
}
