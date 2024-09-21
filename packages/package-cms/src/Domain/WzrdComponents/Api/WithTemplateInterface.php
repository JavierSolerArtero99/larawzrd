<?php

namespace Wzrd\Cms\Domain\WzrdComponents\Api;

use Illuminate\View\View;

interface WithTemplateInterface
{
    public function render(): View;
}
