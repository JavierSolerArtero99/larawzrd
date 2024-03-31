<?php

namespace Wzrd\HorusDomain\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HorusApps extends Model
{
    protected $table = "horus_apps";
    public $timestamps = false;

    protected $fillable = [
        'name',
        'slug',
        'api_key',
        'paths',
        'horus_customer',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(HorusCustomers::class);
    }

    public function interactions(): HasMany
    {
        return $this->hasMany(HorusInteraction::class);
    }
}
