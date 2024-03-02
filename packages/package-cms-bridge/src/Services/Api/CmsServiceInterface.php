<?php

namespace Wzrd\CmsBridge\ViewProcessing\Api;

interface CmsServiceInterface
{
    public function getContentBySlug(string $slug);
}
