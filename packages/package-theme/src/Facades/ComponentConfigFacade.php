<?php

namespace Wzrd\Theme\Facades;

use Illuminate\Support\Facades\Facade;

class ComponentConfigFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'component-config';
    }
}
