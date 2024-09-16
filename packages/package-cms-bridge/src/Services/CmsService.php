<?php

namespace Wzrd\CmsBridge\Services;

use Wzrd\Cms\Model\Content;
use Wzrd\CmsBridge\Services\Api\CmsServiceInterface;

class CmsService implements CmsServiceInterface
{
    public const BLOCK_DATA = [
        '/' => [
            'slug' => 'home',
            'title' => 'Home',
            'layout' => 'main',
            'slots' => [
                [
                    'title' => 'content',
                    'content' => 'maincontent'
                ],
            ],
        ],
    ];

    public function getContentBySlug(string $slug): ?Content
    {
        return Content::where('slug', "/")->first();
    }
}
