<?php

namespace Wzrd\Cms\Model\Theme;

interface LayoutInterface
{
    const FULL_PAGE = "full_page";
    const FULL_PAGE_LABEL = "Full Page";
    const CONTAINER = "container";
    const CONTAINER_LABEL = "Container";

    const SELECT_VALUES = [
        self::FULL_PAGE => self::FULL_PAGE_LABEL,
        self::CONTAINER => self::CONTAINER_LABEL
    ];

    const VALUES = [
        self::FULL_PAGE,
        self::CONTAINER
    ];
}
