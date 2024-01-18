<?php

namespace Wzrd\Customer;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;

class AddCustomerGuardProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        Config::set('auth.guards.customer', [
            'driver' => 'session',
            'provider' => 'customer',
        ]);

        Config::set('auth.providers.customer', [
            'driver' => 'eloquent',
            'model' => \Wzrd\Customer\Model\Customer::class,
        ]);
    }
}
