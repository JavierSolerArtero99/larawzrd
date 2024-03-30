<?php

namespace Wzrd\HorusDomain\Model;

use Illuminate\Database\Eloquent\Model;

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
}
