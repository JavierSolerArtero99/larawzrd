<?php

namespace Wzrd\Customer\Filament\Resources\CustomerResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Wzrd\Customer\Filament\Resources\CustomerResource\CustomerResource;

class CreateCustomer extends CreateRecord
{
    protected static string $resource = CustomerResource::class;
}
