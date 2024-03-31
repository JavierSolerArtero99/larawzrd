<?php

namespace Wzrd\HorusDomain\Model;

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

    public function app(): BelongsTo
    {
        return $this->belongsTo(HorusApps::class, 'id', 'app');
    }

}
