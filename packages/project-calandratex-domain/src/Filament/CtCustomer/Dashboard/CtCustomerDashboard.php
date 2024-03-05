<?php

namespace Wzrd\CalandraTexDomain\Filament\CtCustomer\Dashboard;

use Filament\Pages\Dashboard;
use Wzrd\CalandraTexDomain\Filament\CtCustomer\Widgets\NewOrderWidget;

class CtCustomerDashboard extends Dashboard
{
    protected static string $routePath = '/calandratex';
    protected static ?int $navigationSort = 30;
    protected static ?string $navigationGroup = "CalandraTex";
    protected static ?string $navigationLabel = "CalandraTex Customer";
    protected static ?string $title = "Bienvenido TEXTILES FERRE SANZ, S.L.";

    public function getHeaderWidgetsColumns(): int|string|array
    {
        return 1;
    }

    protected function getHeaderWidgets(): array
    {
        return [
            NewOrderWidget::class,
            NewOrderWidget::class,
            NewOrderWidget::class,
        ];
    }

    public function getWidgets(): array
    {
        return [];
    }

}
