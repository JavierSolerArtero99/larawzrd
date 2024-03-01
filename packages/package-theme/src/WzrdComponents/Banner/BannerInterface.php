<?php

namespace Wzrd\Theme\WzrdComponents\Banner;

interface BannerInterface
{
    const COMPONENT_NAME = "Banner";
    const COMPONENT_ICON = "heroicon-o-document-text";
    const TITLE = "title";
    const SUBTITLE = "subtitle";
    const DESCRIPTION = "description";
    const DISPLAY_KEY = "display";
    const TEXT_DISPLAYS = ["top","right","bottom","left"];
    const IMAGE = "value";
}
