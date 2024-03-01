<?php

namespace Wzrd\CmsBridge;

use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Wzrd\CmsBridge\ViewProcessing\Api\BlockInterface;
use Wzrd\CmsBridge\ViewProcessing\Api\CmsServiceInterface;
use Wzrd\CmsBridge\ViewProcessing\Api\ViewBuilderInterface;
use Wzrd\CmsBridge\ViewProcessing\Block;
use Wzrd\CmsBridge\ViewProcessing\CmsService;
use Wzrd\CmsBridge\ViewProcessing\ViewBuilder;

class WzrdCmsBridgeProvider extends PackageServiceProvider
{
    public static string $name = 'wzrd/package-cms-bridge';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name);
    }

    public function registeringPackage(): void
    {
        /* Bindings */
        $this->app->bind(CmsServiceInterface::class, CmsService::class);
        $this->app->bind(ViewBuilderInterface::class, ViewBuilder::class);
        $this->app->bind(BlockInterface::class, Block::class);
    }
}
