<?php

namespace Wzrd\Theme;

use Illuminate\Support\Facades\Config;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wzrd\CmsBridge\Config\ConfigInterface;
use Wzrd\Theme\WzrdComponents\Banner\Banner;
use Wzrd\Theme\WzrdComponents\Text\Text;

class WzrdThemeProvider extends PackageServiceProvider
{
    public static string $name = 'wzrd/package-theme';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasRoute('ThemeRoutes')
            ->hasViews("WzrdTheme");
    }

    public function registeringPackage(): void
    {
        /* Bloques laterales del header, cambiar por clases*/
        Config::push(ConfigInterface::HEADER_SIDEBAR_BLOCKS, [
            'login' => 'Login',
            'reviewing' => 'Compareee',
            'published' => 'Published',
        ]);
        /* WZRD Components */
        Config::push(ConfigInterface::WZRD_COMPONENTS, Text::class);
        Config::push(ConfigInterface::WZRD_COMPONENTS, Banner::class);
    }

    protected function getMigrations(): array
    {
        return [];
    }
}
