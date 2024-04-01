<?php

namespace Wzrd\HorusDomain\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;

class HorusApps extends Model
{
    use HasFactory;

    protected $table = "horus_apps";
    public $timestamps = false;

    protected $fillable = [
        'name',
        'slug',
        'logo',
        'api_key',
        'paths',
        'horus_customer',
    ];

    protected static function booted(): void
    {
        static::addGlobalScope('own_apps_restriction', function (Builder $query) {
            if (auth()->check()) {
                $query->where('horus_customer', auth()->user()->getAuthIdentifier());
            }
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(HorusCustomers::class, 'id', 'horus_customer');
    }

    public function interactions(): HasMany
    {
        return $this->hasMany(HorusInteraction::class);
    }
}
