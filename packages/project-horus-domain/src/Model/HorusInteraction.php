<?php

namespace Wzrd\HorusDomain\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;

class HorusInteraction extends Model
{
    protected $table = 'horus_interaction';

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
        static::addGlobalScope('belongs_to_app', function (Builder $query) {
            if (auth()->check()) {

            }
        });
    }

    public function app(): BelongsTo
    {
        return $this->belongsTo(HorusApps::class, 'id', 'app');
    }

}
