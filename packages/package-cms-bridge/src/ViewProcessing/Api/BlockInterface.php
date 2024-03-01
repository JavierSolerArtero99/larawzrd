<?php

namespace Wzrd\CmsBridge\ViewProcessing\Api;

interface BlockInterface
{
    public function withPageTitle(string $pageTitle): self;

    public function withLayout(string $layout): self;

    public function withSlots(array $slots): self;
}
