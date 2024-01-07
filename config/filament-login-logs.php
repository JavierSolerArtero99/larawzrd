<?php

return [
    'model' => \App\Models\User::class,
    'login' => [
        'enabled' => true,
        'logger' => \Cursosdesarrolloweb\FilamentLoginLogs\Loggers\LoginLogger::class,
    ],
];
