<?php

namespace Wzrd\Cms;

use Illuminate\Support\Facades\Config;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wzrd\Cms\Config\ConfigInterface;

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
            ->hasRoute('CmsRouteProcessor')
            ->hasViews("WzrdCms");
    }

    public function registeringPackage(): void
    {
        /* Bloques laterales del header, cambiar por clases*/
        Config::push(ConfigInterface::HEADER_SIDEBAR_BLOCKS, [
            'login' => 'Login',
            'reviewing' => 'Compareee',
            'published' => 'Published',
        ]);
    }

    protected function getMigrations(): array
    {
        return [
            'create_themes_table',
            'create_content_table',
        ];
    }
}
