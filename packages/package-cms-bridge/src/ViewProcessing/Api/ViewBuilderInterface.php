<?php

namespace Wzrd\CmsBridge\ViewProcessing\Api;

use Illuminate\View\View;
use Wzrd\Cms\Model\Content;

interface ViewBuilderInterface
{
    public function build(?Content $content): View;
}
