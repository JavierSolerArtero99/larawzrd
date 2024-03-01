<?php

namespace Wzrd\Cms\Model\Theme;

interface ContentStatusInterface
{
    const PUBLISHED = "published";
    const PUBLISHED_LABEL = "Published";
    const DRAFT = "draft";
    const DRAFT_LABEL = "Draft";

    const SELECT_VALUES = [
        self::PUBLISHED => self::PUBLISHED_LABEL,
        self::DRAFT => self::DRAFT_LABEL
    ];

    const VALUES = [
        self::PUBLISHED,
        self::DRAFT
    ];
}
