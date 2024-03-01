<?php

namespace Wzrd\Cms\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wzrd\Cms\Model\Theme\ContentStatusInterface;

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

    public function publish()
    {
        $this->status = ContentStatusInterface::DRAFT;
        $this->save();
    }

    public function unpublish()
    {
        $this->status = ContentStatusInterface::DRAFT;
        $this->save();
    }


}
