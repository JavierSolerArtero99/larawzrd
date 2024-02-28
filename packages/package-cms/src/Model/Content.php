<?php

namespace Wzrd\Cms\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $table = 'content';

    public $timestamps = false;

    protected $fillable = [
        'slug',
        'page_title',
        'meta_title',
        'meta_desc',
        'status',
        'layout',
        'body',
    ];

    protected $casts = [
        'body' => 'json',
    ];


}
