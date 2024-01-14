<?php

namespace Wzrd\Cms\Model\Implement;

use Wzrd\Cms\Model\Api\BlockInterface;
use Wzrd\Cms\Model\Api\CmsServiceInterface;
use Wzrd\Cms\Model\Implement\Block;

class CmsService implements CmsServiceInterface
{
    public const BLOCK_DATA = [
        'home' => [
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

    public function getPageBlocks(string $slug): BlockInterface
    {
        $selected = self::BLOCK_DATA[$slug] ?? self::BLOCK_DATA["home"];
        $printedBlock = new Block();

        return $printedBlock
            ->withLayout($selected['layout'])
            ->withPageTitle($selected['title'])
            ->withSlots($selected['slots']);
    }
}
