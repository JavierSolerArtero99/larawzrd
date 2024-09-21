<?php

namespace Wzrd\Theme\Facades;

use Illuminate\Support\Facades\Config;

class ComponentConfig
{
    const WZRD_COMPONENTS = "cms-config.wzrd_components";
    const NEW_COMPONENT_PATH = "cms-config.wzrd_components.%s";

    public function addNewComponent($componentName, $className, $template): void
    {
        Config::set(sprintf(self::NEW_COMPONENT_PATH, $componentName), [
            'class' => $className,
            'template' => $template
        ]);
    }

}
