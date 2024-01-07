<?php

namespace Wzrd\Theme;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class WzrdThemeProvider extends PackageServiceProvider
{
    public static string $name = 'wzrd/package-theme';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews("WzrdTheme");
    }

    public function registeringPackage(): void
    {}

    protected function getMigrations(): array
    {
        return [];
    }
}
