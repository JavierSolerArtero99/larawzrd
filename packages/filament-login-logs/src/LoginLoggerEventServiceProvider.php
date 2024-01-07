<?php

namespace Cursosdesarrolloweb\FilamentLoginLogs;

use Illuminate\Auth\Events\Login;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class LoginLoggerEventServiceProvider extends ServiceProvider
{
    public function listens(): array
    {
        return array_merge(
            config('filament-login-logs.login.enabled') ? [
                Login::class => [
                    config('filament-login-logs.login.logger'),
                ],
            ] : [],
        );
    }
}
