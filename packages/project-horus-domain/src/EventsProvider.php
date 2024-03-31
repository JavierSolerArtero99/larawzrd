<?php

namespace Wzrd\HorusDomain;

use Illuminate\Foundation\Support\Providers\EventServiceProvider;
use Wzrd\HorusDomain\Model\HorusApps;
use Wzrd\HorusDomain\Observers\AppsObserver;

class EventsProvider extends EventServiceProvider
{
    public function boot()
    {
        HorusApps::observe(AppsObserver::class);
    }
}
