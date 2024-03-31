<?php

namespace Wzrd\HorusDomain\Model;

use Illuminate\Database\Eloquent\Model;

class HorusApps extends Model
{
    protected $table = "horus_apps";

    protected $fillable = [
        'name',
        'slug',
    ];
}
