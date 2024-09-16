<?php

namespace Wzrd\CmsBridge\ViewProcessing;

use Illuminate\View\View;
use Wzrd\Cms\Model\Content;
use Wzrd\CmsBridge\ViewProcessing\Api\ViewBuilderInterface;

class ViewBuilder implements ViewBuilderInterface
{
    public function build(?Content $content): View
    {
        return view('WzrdCmsBridge::processor.viewProcessor')
            ->with('layout', $content->layout)
            ->with('title', $content->pageTitle)
            ->with('slots', $content->body);
    }
}
