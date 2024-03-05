<?php

namespace Wzrd\CalandraTexDomain\Filament\CtCustomer\Pages;

use Filament\Resources\Pages\Page;
use Wzrd\CalandraTexDomain\Filament\CtCustomer\Resources\CtCustomerResource;

class CtCustomerIndex extends Page
{
    protected static string $resource = CtCustomerResource::class;
        protected static string $view = 'filament-panels::pages.dashboard';
}
