<?php

namespace Wzrd\CmsBridge\ViewProcessing\Api;

interface CmsServiceInterface
{
    public function getPageBlocks(string $slug): ?BlockInterface;
}
