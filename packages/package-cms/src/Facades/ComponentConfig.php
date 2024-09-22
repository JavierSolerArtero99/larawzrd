<?php

namespace Wzrd\Cms\Facades;

use Illuminate\Support\Facades\Config;

class ComponentConfig
{
    const WZRD_COMPONENTS = "cms-config.wzrd_components";
    const NEW_COMPONENT_PATH = "cms-config.wzrd_components.%s";
    const HEADER_SIDEBAR_BLOCKS = "cms-config.header_sidebar_blocks";
    const NEW_HEADER_SIDEBAR_BLOCKS_PATH = "cms-config.header_sidebar_blocks.%s";

    public function addNewComponent($componentName, $className, $template): void
    {
        Config::set(sprintf(self::NEW_COMPONENT_PATH, $componentName), [
            'class' => $className,
            'template' => $template
        ]);
    }

    public function getComponents(): array
    {
        return Config::get(self::WZRD_COMPONENTS);
    }

    public function getClassForComponent(string $component): string
    {
        return Config::get(self::WZRD_COMPONENTS . '.' . $component . '.class');
    }

}
