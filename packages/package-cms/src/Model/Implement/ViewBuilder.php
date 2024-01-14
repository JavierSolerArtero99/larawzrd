<?php

namespace Wzrd\Cms\Model\Implement;

use Illuminate\View\View;
use Wzrd\Cms\Model\Api\ViewBuilderInterface;

class ViewBuilder implements ViewBuilderInterface
{
    public function build(array $blocks): View
    {
        return view('WzrdCms::WzrdCms.viewProcessor');
    }
}
