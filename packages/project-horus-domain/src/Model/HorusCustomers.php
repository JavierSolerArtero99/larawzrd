<?php

namespace Wzrd\HorusDomain\Model;

use Filament\Panel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;

class HorusCustomers extends Authenticatable
{
    use Notifiable;

    protected $table = 'horus_customers';
    protected $guard = 'horus_customers';

    protected $fillable = [
        'name', 'email', 'password', 'slug',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function apps(): HasMany
    {
        return $this->hasMany(HorusApps::class, 'horus_customer');
    }
}
