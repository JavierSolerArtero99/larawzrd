<?php

namespace Wzrd\Cms\Components\Banner;

interface BannerInterface
{
    const COMPONENT_NAME = "Banner";
    const TITLE = "title";
    const SUBTITLE = "subtitle";
    const DESCRIPTION = "description";
    const DISPLAY_KEY = "display";
    const TEXT_DISPLAYS = ["top","right","bottom","left"];
    const IMAGE = "value";
}
