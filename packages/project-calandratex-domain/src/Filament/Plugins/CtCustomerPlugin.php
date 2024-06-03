<?php

namespace Wzrd\CalandraTexDomain\Filament\Plugins;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Wzrd\CalandraTexDomain\Filament\CtOrder\Resources\CtOrderResource;

class CtCustomerPlugin implements Plugin
{

    public static function make(): static
    {
        return app(static::class);
    }

    public function getId(): string
    {
        return 'wzrd-ct';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->widgets([
            ])
            ->resources([
                CtOrderResource::class
            ]);
    }

    public function boot(Panel $panel): void
    {}

}
