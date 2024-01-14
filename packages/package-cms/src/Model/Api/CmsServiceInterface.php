<?php

namespace Wzrd\Cms\Model\Api;

use Wzrd\Cms\Model\Api\BlockInterface;

interface CmsServiceInterface
{
    public function getPageBlocks(string $slug): BlockInterface;
}
