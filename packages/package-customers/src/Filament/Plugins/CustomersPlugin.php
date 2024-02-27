<?php

namespace Wzrd\Customer\Filament\Plugins;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Wzrd\Customer\Filament\Resources\CustomerAttributesResource\CustomerAttributesResource;
use Wzrd\Customer\Filament\Resources\CustomerResource\CustomerResource;

class CustomersPlugin implements Plugin
{
    public static function make(): static
    {
        return app(static::class);
    }

    public function getId(): string
    {
        return 'wzrd-customers';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                CustomerResource::class,
                CustomerAttributesResource::class,
            ]);
    }

    public function boot(Panel $panel): void
    {

    }
}
