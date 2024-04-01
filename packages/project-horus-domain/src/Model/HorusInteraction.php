<?php

namespace Wzrd\HorusDomain\Model;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HorusInteraction extends Model
{
    protected $table = 'horus_interaction';
    public $timestamps = false;

    protected $fillable = [
        'api_key',
        'device_id',
        'device_brand',
        'device_model',
        'device_sdk',
        'path',
        'platform',
        'screen_width',
        'screen_height',
        'xdpi',
        'ydpi',
        'timestamp',
    ];

    protected static function booted(): void
    {
        static::addGlobalScope('own_interactions', function (Builder $query) {
            if (auth()->check()) {
                $query->whereIn('app', auth()->user()->apps->pluck('id'));
            }
        });
    }

    public function app(): BelongsTo
    {
        return $this->belongsTo(HorusApps::class, 'id', 'app');
    }

}
