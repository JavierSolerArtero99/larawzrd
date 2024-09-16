<?php

namespace Wzrd\CmsBridge\Services\Api;

use Wzrd\Cms\Model\Content;

interface CmsServiceInterface
{
    public function getContentBySlug(string $slug): ?Content;
}
