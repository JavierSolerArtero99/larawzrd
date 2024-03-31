<?php

namespace Wzrd\HorusDomain\Model;

use Illuminate\Database\Eloquent\Model;

class HorusCustomer extends Model
{
    protected $table = 'horus_customers';

    protected $fillable = [
        'name',
        'slug',
    ];

}
