<?php

namespace Wzrd\CmsBridge\Services;

use Wzrd\Cms\Model\Content;
use Wzrd\CmsBridge\ViewProcessing\Api\BlockInterface;
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

    /* OLD TO REFACTOR */
    public function getPageBlocks(string $slug): ?BlockInterface
    {
        $selected = self::BLOCK_DATA[$slug] ?? self::BLOCK_DATA["/"];
        $printedBlock = new Block();

        return $printedBlock
            ->withLayout($selected['layout'])
            ->withPageTitle($selected['title'])
            ->withSlots($selected['slots']);
    }
}
