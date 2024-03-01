<?php

namespace Wzrd\Cms\Model\Theme;

interface ContentStatusInterface
{
    const PUBLISHED = "published";
    const DRAFT = "draft";

    const VALUES = [
        self::PUBLISHED,
        self::DRAFT
    ];
}
