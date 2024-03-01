<?php

namespace Wzrd\Theme;

use Illuminate\Support\Facades\Config;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wzrd\Cms\Config\ConfigInterface;
use Wzrd\Theme\WzrdComponents\Banner\Banner;
use Wzrd\Theme\WzrdComponents\Text\Text;

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
    {
        /* WZRD Components */
        Config::push(ConfigInterface::WZRD_COMPONENTS, Text::class);
        Config::push(ConfigInterface::WZRD_COMPONENTS, Banner::class);
    }

    protected function getMigrations(): array
    {
        return [];
    }
}
