<?php

namespace Wzrd\Customer\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Wzrd\Customer\Model\Customer;

class CustomersTotalCount extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Customers', Customer::count()),
        ];
    }
}
