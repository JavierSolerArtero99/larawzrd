<?php

namespace Wzrd\Cms\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    protected $table = 'theme';

    public $timestamps = false;

    protected $fillable = [
        'slug',
        'value',
    ];

    protected $casts = [
        'value' => 'json',
    ];


}
