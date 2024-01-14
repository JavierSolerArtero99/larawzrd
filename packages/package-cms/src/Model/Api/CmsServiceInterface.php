<?php

namespace Wzrd\Cms\Model\Api;

interface CmsServiceInterface
{
    public function getBlocks(string $slug): array;
}
