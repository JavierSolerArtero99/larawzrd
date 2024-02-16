<?php

namespace Wzrd\Customer;

use Wzrd\Customer\Resources\CustomerResource\CustomerResource;
use Filament\Contracts\Plugin;
use Filament\Panel;
use Wzrd\Customer\Resources\CustomerAttributesResource\CustomerAttributesResource;

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
