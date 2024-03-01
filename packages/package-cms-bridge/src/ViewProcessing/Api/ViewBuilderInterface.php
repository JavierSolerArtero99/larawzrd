<?php

namespace Wzrd\CmsBridge\ViewProcessing\Api;

use Illuminate\View\View;

interface ViewBuilderInterface
{
    public function build(BlockInterface $block): View;
}
