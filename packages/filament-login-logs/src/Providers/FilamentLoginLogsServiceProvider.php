<?php

namespace Wzrd\FilamentLoginLogs\Poviders;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentLoginLogsServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-login-logs';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name(static::$name)
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->publishMigrations()
                    ->askToRunMigrations();
            })
            ->hasConfigFile()
            ->hasMigrations($this->getMigrations())
            ->hasTranslations();
    }

    public function registeringPackage(): void
    {
        $this->app->register(LoginLoggerEventServiceProvider::class);
    }

    /**
     * @return array<string>
     */
    protected function getMigrations(): array
    {
        return [
            'create_login_logs_table',
        ];
    }
}
