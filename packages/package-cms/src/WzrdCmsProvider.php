<?php

namespace Wzrd\Cms;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class WzrdCmsProvider extends PackageServiceProvider
{
    public static string $name = 'wzrd/package-cms';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasRoute('cmsRouteProcessor')
            ->hasViews("WzrdCms");
    }

    public function registeringPackage(): void
    {}

    protected function getMigrations(): array
    {
        return [];
    }
}
