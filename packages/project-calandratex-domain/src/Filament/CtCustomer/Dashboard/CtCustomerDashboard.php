<?php

namespace Wzrd\CalandraTexDomain\Filament\CtCustomer\Dashboard;

use Filament\Pages\Dashboard;

class CtCustomerDashboard extends Dashboard
{
    protected static string $routePath = '/calandratex';
    protected static ?int $navigationSort = 30;
    protected static ?string $navigationGroup = "CalandraTex";
    protected static ?string $navigationLabel = "CalandraTex Customer";
    protected static ?string $title = "Bienvenido TEXTILES FERRE SANZ, S.L.";

    public function getWidgets(): array
    {
        return [

        ];
    }

}
