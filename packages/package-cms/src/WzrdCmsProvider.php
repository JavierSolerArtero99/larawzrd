<?php

namespace Wzrd\Cms;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wzrd\Cms\Model\Api\BlockInterface;
use Wzrd\Cms\Model\Api\CmsServiceInterface;
use Wzrd\Cms\Model\Api\ViewBuilderInterface;
use Wzrd\Cms\Model\Implement\Block;
use Wzrd\Cms\Model\Implement\CmsService;
use Wzrd\Cms\Model\Implement\ViewBuilder;

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
            ->hasMigrations($this->getMigrations())
            ->hasRoute('CmsRouteProcessor')
            ->hasViews("WzrdCms");
    }

    public function registeringPackage(): void
    {
        $this->app->bind(CmsServiceInterface::class, CmsService::class);
        $this->app->bind(ViewBuilderInterface::class, ViewBuilder::class);
        $this->app->bind(BlockInterface::class, Block::class);
    }

    protected function getMigrations(): array
    {
        return ['create_themes_table'];
    }
}
