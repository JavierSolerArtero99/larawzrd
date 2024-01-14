<?php

namespace Wzrd\Cms\Model\Implement;

use Wzrd\Cms\Model\Api\BlockInterface;

class Block implements BlockInterface
{

    public function __construct(
        public string $pageTitle = "",
        public string $layout = "",
        public array $slots = [],
    ) {
    }

    public function withPageTitle(string $pageTitle): self
    {
        $this->pageTitle = $pageTitle;

        return $this;
    }

    public function withLayout(string $layout): self
    {
        $this->layout = $layout;

        return $this;
    }

    public function withSlots(array $slots): self
    {
        $this->slots = $slots;

        return $this;
    }
}
