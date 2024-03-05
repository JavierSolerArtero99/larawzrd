<?php

namespace Wzrd\CalandraTexDomain\Filament\Plugins;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Wzrd\CalandraTexDomain\Filament\CtCustomer\Dashboard\CtCustomerDashboard;
use Wzrd\CalandraTexDomain\Filament\CtCustomer\Resources\CtCustomerResource;
use Wzrd\CalandraTexDomain\Filament\CtCustomer\Widgets\NewOrderWidget;

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
            ->pages([
                CtCustomerDashboard::class
            ])
            ->widgets([
                NewOrderWidget::class
            ])
            ->resources([]);
    }

    public function boot(Panel $panel): void
    {}

}
