<?php

namespace Wzrd\CmsBridge\ViewProcessing;

use Illuminate\View\View;
use Wzrd\CmsBridge\ViewProcessing\Api\BlockInterface;
use Wzrd\CmsBridge\ViewProcessing\Api\ViewBuilderInterface;

class ViewBuilder implements ViewBuilderInterface
{
    public function build(BlockInterface $block): View
    {
        return view('WzrdCmsBridge::processor.viewProcessor')
        ->with('layout', $block->layout)
        ->with('title', $block->pageTitle)
        ->with('slots', $block->slots);
    }
}
