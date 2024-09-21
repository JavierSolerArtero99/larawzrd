<?php

namespace Wzrd\Cms\Domain\WzrdComponents\Api;

use Illuminate\View\View;

abstract class AbstractComponent
{
    public array $data;

    /**
     * Data setter for the view
     * @param array $data
     * @return $this
     */
    public function setData(array $data): AbstractComponent
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Each components render itself with its own data in the way that it needs
     * @return View
     */
    public abstract function render(): View;
}
