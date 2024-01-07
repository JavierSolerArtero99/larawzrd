<?php

return [
    'user_table' => \App\Models\User::class,
    'user_pk' => 'user_id',
    'login' => [
        'enabled' => true,
        'logger' => \Wzrd\FilamentLoginLogs\Loggers::class,
    ],
];
