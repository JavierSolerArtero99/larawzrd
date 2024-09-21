<?php

namespace Wzrd\Cms;

use Illuminate\Foundation\AliasLoader;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wzrd\Theme\Facades\ComponentConfig;

class WzrdCmsProvider extends PackageServiceProvider
{
    public static string $name = 'wzrd/package-cms';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishMigrations()
                    ->askToRunMigrations();
            })
            ->hasConfigFile(['cms-config'])
            ->hasMigrations($this->getMigrations())
            ->hasViews("WzrdCms");
    }

    public function registeringPackage(): void
    {
        $this->app->singleton('component-config', function ($app) {
            return new ComponentConfig();
        });

        AliasLoader::getInstance()->alias('ComponentConfig', ComponentConfig::class);
    }

    protected function getMigrations(): array
    {
        return [
            'create_themes_table',
            'create_content_table',
        ];
    }
}
