<?php

namespace Wzrd\CalandraTexDomain\Filament\Plugins;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Wzrd\CalandraTexDomain\Filament\CtCustomer\Dashboard\CtCustomerDashboard;
use Wzrd\CalandraTexDomain\Filament\CtCustomer\Resources\CtCustomerResource;
use Wzrd\CalandraTexDomain\Filament\CtCustomer\Widgets\CtData;
use Wzrd\CalandraTexDomain\Filament\CtCustomer\Widgets\CtOrderHistory;
use Wzrd\CalandraTexDomain\Filament\CtCustomer\Widgets\LinkWidget;
use Wzrd\CalandraTexDomain\Filament\CtCustomer\Widgets\NewCtOrder;

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
                LinkWidget::class,
                NewCtOrder::class,
                CtOrderHistory::class,
                CtData::class,
            ])
            ->resources([]);
    }

    public function boot(Panel $panel): void
    {}

}
