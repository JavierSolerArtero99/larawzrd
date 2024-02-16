<?php

namespace Wzrd\Customer\Tables\Columns;

use Closure;
use Filament\Tables\Columns\Column;

class DynamicAttribute extends Column
{
    protected string $view = 'WzrdCustomer::WzrdCustomer.admin.tables.columns.status-switcher';
}
