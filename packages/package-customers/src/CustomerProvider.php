<?php

namespace Wzrd\Customer;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CustomerProvider extends PackageServiceProvider
{
    public static string $name = 'package-customers';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishMigrations()
                    ->askToRunMigrations();
            })
            ->hasRoute('CustomerRoutes')
            ->hasViews("WzrdCustomer")
            ->hasMigrations($this->getMigrations());
    }

    public function registeringPackage(): void
    {
        $this->app->register(AddCustomerGuardProvider::class);
    }

    /**
     * @return array<string>
     */
    protected function getMigrations(): array
    {
        return [
            'create_customer_table',
            'create_eav_tables',
        ];
    }
}
