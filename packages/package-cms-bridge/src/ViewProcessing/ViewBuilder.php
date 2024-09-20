<?php

namespace Wzrd\CmsBridge\ViewProcessing;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\View\View;
use Wzrd\Cms\Model\Content;
use Wzrd\CmsBridge\Config\ConfigInterface;
use Wzrd\CmsBridge\ViewProcessing\Api\ViewBuilderInterface;

class ViewBuilder implements ViewBuilderInterface
{
    public function build(?Content $content): View
    {
        $slots = [];

        foreach ($content->body as $slot) {
            $slotClass = Config::get(ConfigInterface::WZRD_COMPONENTS . '.' . $slot['type'] . '.class');
            $slots[] = App::make($slotClass, ['data' => $content->body]);
        }

        // TODO: crear façades para los layouts ya que se están dando de alta los que no tocan y renderizar los hijos cada una a la suya
        return view('WzrdCmsBridge::processor.viewProcessor')
            ->with('layout', $content->layout)
            ->with('title', $content->pageTitle)
            ->with('slots', $slots);
    }
}
