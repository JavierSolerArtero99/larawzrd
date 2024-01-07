<?php

namespace Wzrd\FilamentLoginLogs\Loggers;

use Wzrd\FilamentLoginLogs\Models\LoginLog;
use Illuminate\Auth\Events\Login;

class LoginLogger
{
    public function handle(Login $event): void
    {
        $primaryKey = app(config('filament-login-logs.user_table'))->getKeyName();
        LoginLog::create([
            'user_id' => $event->user->{$primaryKey},
            'ip' => request()->ip(),
            'user_agent' => request()->userAgent(),
            'login_at' => now(),
        ]);
    }
}