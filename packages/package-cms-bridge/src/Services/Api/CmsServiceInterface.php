<?php

namespace Wzrd\CmsBridge\Services\Api;

interface CmsServiceInterface
{
    public function getContentBySlug(string $slug);
}
