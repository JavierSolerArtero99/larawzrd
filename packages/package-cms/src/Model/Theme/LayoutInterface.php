<?php

namespace Wzrd\Cms\Model\Theme;

interface LayoutInterface
{
    const FULL_PAGE = "full_page";
    const CONTAINER = "container";

    const VALUES = [
        self::FULL_PAGE,
        self::CONTAINER
    ];
}
