<?php

namespace Wzrd\Cms;

use Illuminate\Support\Facades\Config;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wzrd\Cms\Config\ConfigInterface;
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
            ->hasConfigFile(['cms-config'])
            ->hasMigrations($this->getMigrations())
            ->hasRoute('CmsRouteProcessor')
            ->hasViews("WzrdCms");
    }

    public function registeringPackage(): void
    {
        /* Bindings */
        $this->app->bind(CmsServiceInterface::class, CmsService::class);
        $this->app->bind(ViewBuilderInterface::class, ViewBuilder::class);
        $this->app->bind(BlockInterface::class, Block::class);

        /* Config */
        Config::push(ConfigInterface::SIDEBAR_BLOCKS, [
            'draft' => 'Draft',
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
