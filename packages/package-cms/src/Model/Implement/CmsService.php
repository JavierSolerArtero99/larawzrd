<?php

namespace Wzrd\Cms\Model\Implement;

use Wzrd\Cms\Model\Api\BlockInterface;
use Wzrd\Cms\Model\Api\CmsServiceInterface;
use Wzrd\Cms\Model\Implement\Block;

class CmsService implements CmsServiceInterface
{
    public function getPageBlocks(string $slug): BlockInterface
    {
        $blocks = [
            "home" => new Block(),
        ];
        
        return $blocks[$slug] ?? $blocks["home"];
    }
}
