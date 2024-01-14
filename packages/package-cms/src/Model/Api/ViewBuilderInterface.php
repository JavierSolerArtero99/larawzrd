<?php

namespace Wzrd\Cms\Model\Api;

use Illuminate\View\View;
use Wzrd\Cms\Model\Api\BlockInterface;

interface ViewBuilderInterface
{
    public function build(BlockInterface $block): View;
}
