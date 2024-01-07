<?php

namespace Wzrd\FilamentLoginLogs;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Wzrd\FilamentLoginLogs\Resources\LoginLogResource\LoginLogResource;

class FilamentLoginLogs implements Plugin
{
    public static function make(): static
    {
        return app(static::class);
    }

    public function getId(): string
    {
        return 'filament-login-logs';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                LoginLogResource::class,
            ]);
    }

    public function boot(Panel $panel): void
    {

    }
}
