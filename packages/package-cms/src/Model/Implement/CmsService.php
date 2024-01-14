<?php

namespace Wzrd\Cms\Model\Implement;

use Wzrd\Cms\Model\Api\CmsServiceInterface;

class CmsService implements CmsServiceInterface
{
    public function getBlocks(string $slug): array
    {
        return [
            "home" => ""
        ];
    }
}
