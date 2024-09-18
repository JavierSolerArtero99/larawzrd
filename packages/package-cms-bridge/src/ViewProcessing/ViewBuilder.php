<?php

namespace Wzrd\CmsBridge\ViewProcessing;

use Illuminate\Support\Facades\Config;
use Illuminate\View\View;
use Wzrd\Cms\Model\Content;
use Wzrd\CmsBridge\Config\ConfigInterface;
use Wzrd\CmsBridge\ViewProcessing\Api\ViewBuilderInterface;

class ViewBuilder implements ViewBuilderInterface
{
    public function build(?Content $content): View
    {
        Config::get(ConfigInterface::WZRD_COMPONENTS);

        // TODO: crear façades para los layouts ya que se están dando de alta los que no tocan y renderizar los hijos cada una a la suya
        return view('WzrdCmsBridge::processor.viewProcessor')
            ->with('layout', $content->layout)
            ->with('title', $content->pageTitle)
            ->with('slots', $content->body);
    }
}
