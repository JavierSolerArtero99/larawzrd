<?php

namespace Wzrd\Cms\Components\Text;

interface TextInterface
{
    const COMPONENT_NAME = "Text";
    const COMPONENT_VALUE = "value";
    const HTML_TAG = "html_tag";
    const CSS_CLASSES = "css_classes";

    const HTML_TAG_OPTIONS = [
        'p' => 'p',
        'span' => 'span',
        'h1' => 'h1',
        'h2' => 'h2',
        'h3' => 'h3',
        'h4' => 'h4',
        'h5' => 'h5',
        'div' => 'div',
    ];

}
