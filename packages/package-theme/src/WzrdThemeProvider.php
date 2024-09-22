<?php

namespace Wzrd\Theme;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wzrd\Cms\Facades\ComponentConfigFacade;
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
