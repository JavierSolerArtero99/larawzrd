<?php

namespace Wzrd\FilamentLoginLogs\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property int $user_id
 * @property string $ip
 * @property string $user_agent
 * @property Carbon $login_at
 */
class LoginLog extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    protected $casts = [
        'user_id' => 'integer',
        'ip' => 'string',
        'user_agent' => 'string',
        'login_at' => 'datetime',
    ];

    public function loggedBy(): BelongsTo
    {
        return $this->belongsTo(config('filament-login-logs.user_table'), config('filament-login-logs.user_pk'));
    }
}
