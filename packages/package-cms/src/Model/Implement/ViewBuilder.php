<?php

namespace Wzrd\Cms\Model\Implement;

use Illuminate\View\View;
use Wzrd\Cms\Model\Api\ViewBuilderInterface;
use Wzrd\Cms\Model\Api\BlockInterface;

class ViewBuilder implements ViewBuilderInterface
{
    public function build(BlockInterface $block): View
    {
        return view('WzrdCms::processor.viewProcessor')
        ->with('layout', $block->layout)
        ->with('title', $block->pageTitle)
        ->with('slots', $block->slots);
    }
}
