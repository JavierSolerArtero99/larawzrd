<?php

namespace Wzrd\Cms\Model\Api;

use Illuminate\View\View;

interface ViewBuilderInterface
{
    public function build(array $blocks): View;
}
