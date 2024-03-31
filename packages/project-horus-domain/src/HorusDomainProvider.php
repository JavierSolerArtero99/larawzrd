<?php

namespace Wzrd\HorusDomain;

use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\Commands\InstallCommand;

class HorusDomainProvider extends PackageServiceProvider
{

    public static string $name = 'wzrd/project-horus-domain';


    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishMigrations()
                    ->askToRunMigrations();
            })
            ->hasMigrations($this->getMigrations());
    }

    public function registeringPackage(): void
    {
        $this->app->register(AddHorusCustomersProvider::class);
    }

    protected function getMigrations(): array
    {
        return [
            'create_horus_tables',
        ];
    }
}
