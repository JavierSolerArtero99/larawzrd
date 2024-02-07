<?php

namespace Wzrd\Customer\Resources\CustomerResource\Pages;

use Wzrd\Customer\Resources\CustomerResource\CustomerResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomer extends CreateRecord
{
    protected static string $resource = CustomerResource::class;
}
