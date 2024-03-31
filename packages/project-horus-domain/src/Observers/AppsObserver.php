<?php

namespace Wzrd\HorusDomain\Observers;

use Wzrd\HorusDomain\Model\HorusApps;

class AppsObserver
{
    public function saving(HorusApps $app): void
    {
        if (auth()->check()) {
            $app->horus_customer = auth()->user()->getAuthIdentifier();
        }
    }
}
