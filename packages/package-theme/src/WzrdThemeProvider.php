<?php

namespace Wzrd\Theme;

use Illuminate\Support\Facades\Config;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wzrd\CmsBridge\Config\ConfigInterface;
use Wzrd\Theme\Facades\ComponentConfigFacade;
use Wzrd\Theme\WzrdComponents\Banner\Banner;
use Wzrd\Theme\WzrdComponents\Banner\BannerInterface;
use Wzrd\Theme\WzrdComponents\Text\Text;
use Wzrd\Theme\WzrdComponents\Text\TextInterface;

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
        /** Bindings **/
        $this->app->bind(TextInterface::class, Text::class);

        /* Bloques laterales del header, cambiar por clases*/
        Config::push(ConfigInterface::HEADER_SIDEBAR_BLOCKS, [
            'login' => 'Login',
            'reviewing' => 'Compareee',
            'published' => 'Published',
        ]);

        /* WZRD Components */
        ComponentConfigFacade::addNewComponent(
            TextInterface::COMPONENT_NAME,
            TextInterface::class,
            TextInterface::COMPONENT_TEMPLATE
        );
        /**
        Config::set(ConfigInterface::WZRD_COMPONENTS . '.' . BannerInterface::COMPONENT_NAME, [
            'class' => Banner::class,
            'template' => BannerInterface::COMPONENT_TEMPLATE
        ]);
        */
    }

    protected function getMigrations(): array
    {
        return [];
    }
}
