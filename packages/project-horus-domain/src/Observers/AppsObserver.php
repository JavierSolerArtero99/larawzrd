<?php

namespace Wzrd\HorusDomain\Observers;

use Wzrd\HorusDomain\Model\HorusApps;
use Illuminate\Foundation\Support\Providers\EventServiceProvider;

class AppsObserver extends EventServiceProvider
{
    public function created(HorusApps $app): void
    {
        if (auth()->check()) {
            echo var_dump($app);
            die();
            $app->user()->associate(auth()->user());
        }
    }
}
