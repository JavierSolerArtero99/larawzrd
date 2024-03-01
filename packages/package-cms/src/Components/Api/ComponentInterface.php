<?php

namespace Wzrd\Cms\Components\Api;

abstract class ComponentInterface
{
    public function generateUid()
    {
        return uniqid();
    }

    /* TIPAR ESTA FUNCION */
    abstract protected function adminEdit();

}
