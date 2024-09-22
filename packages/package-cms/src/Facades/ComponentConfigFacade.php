<?php

namespace Wzrd\Cms\Facades;

use Illuminate\Support\Facades\Facade;

class ComponentConfigFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'component-config';
    }
}
