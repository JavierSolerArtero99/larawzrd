<?php

namespace Cursosdesarrolloweb\FilamentLoginLogs;

use Cursosdesarrolloweb\FilamentLoginLogs\Resources\LoginLogResource\LoginLogResource;
use Filament\Contracts\Plugin;
use Filament\Panel;

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
