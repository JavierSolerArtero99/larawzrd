<?php

namespace Wzrd\HorusDomain;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Wzrd\HorusDomain\Model\HorusApps;
use Wzrd\HorusDomain\Model\HorusCustomers;
use Wzrd\HorusDomain\Observers\AppsObserver;

class AddHorusCustomersProvider extends ServiceProvider
{

    public function boot()
    {
        Config::set('auth.guards.horus_customers', [
            'driver' => 'session',
            'provider' => 'horus_customers',
        ]);

        Config::set('auth.providers.horus_customers', [
            'driver' => 'eloquent',
            'model' => HorusCustomers::class,
        ]);

        Config::set('auth.passwords.horus_customers', [
            'driver' => 'eloquent',
            'model' => HorusCustomers::class,
        ]);
    }

}
