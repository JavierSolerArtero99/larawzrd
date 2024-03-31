<?php

namespace Wzrd\HorusDomain\Model\Tenancy;

use Filament\Models\Contracts\HasTenants;
use Filament\Panel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;
use Wzrd\HorusDomain\Model\HorusApps;

class HorusCustomers extends Authenticatable implements HasTenants
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

    public function getTenants(Panel $panel): array|Collection
    {
        return $this->apps;
    }

    public function canAccessTenant(Model $tenant): bool
    {
        return $this->apps->contains($tenant);
    }
}
