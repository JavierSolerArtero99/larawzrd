<?php

namespace Wzrd\CalandraTexDomain\Filament\CtCustomer\Dashboard;

use Filament\Pages\Dashboard;
use Wzrd\CalandraTexDomain\Filament\CtCustomer\Widgets\CtData;
use Wzrd\CalandraTexDomain\Filament\CtCustomer\Widgets\CtOrderHistory;
use Wzrd\CalandraTexDomain\Filament\CtCustomer\Widgets\NewCtOrder;

class CtCustomerDashboard extends Dashboard
{
    protected static string $routePath = '/calandratex';
    protected static ?int $navigationSort = 30;
    protected static ?string $navigationGroup = "CalandraTex";
    protected static ?string $navigationLabel = "CalandraTex Customer";
    protected static ?string $title = "Bienvenido";

    public function getHeaderWidgetsColumns(): int|string|array
    {
        return 1;
    }

    protected function getHeaderWidgets(): array
    {
        return [
            NewCtOrder::class,
            CtOrderHistory::class,
            CtData::class,
        ];
    }

    public function getWidgets(): array
    {
        return [];
    }

}
