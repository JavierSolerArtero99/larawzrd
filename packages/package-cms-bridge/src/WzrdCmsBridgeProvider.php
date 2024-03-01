<?php

namespace Wzrd\CmsBridge;

use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class WzrdCmsBridgeProvider extends PackageServiceProvider
{
    public static string $name = 'wzrd/package-cms-bridge';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name);
    }
}
