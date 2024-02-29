<?php

namespace Wzrd\Cms\Components\Api;

abstract class ComponentInterface
{
    public function generateUid()
    {
        return uniqid('text_');
    }

    /* TIPAR ESTA FUNCION */
    abstract protected function adminEdit();

}
