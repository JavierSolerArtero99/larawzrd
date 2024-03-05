<?php

namespace Wzrd\CalandraTexDomain;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CalandraTexDomainProvider extends PackageServiceProvider
{
    public static string $name = 'wzrd/project-calandratex-domain';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews("CtDomain")
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishMigrations()
                    ->askToRunMigrations();
            })
            ->hasMigrations($this->getMigrations());
    }

    protected function getMigrations(): array
    {
        return [
            'create_ct_order_table',
        ];
    }
}
