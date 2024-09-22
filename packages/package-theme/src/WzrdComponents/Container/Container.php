<?php

namespace Wzrd\Theme\WzrdComponents\Container;

use Filament\Forms\Components\Builder\Block;
use Illuminate\View\View;
use Wzrd\Cms\Domain\WzrdComponents\Api\AbstractComponent;
use Wzrd\Cms\Domain\WzrdComponents\Api\WithAdminFieldsInterface;

class Container extends AbstractComponent implements ContainerInterface, WithAdminFieldsInterface
{
    public function createFields(): Block
    {
        return Block::make(ContainerInterface::COMPONENT_NAME)
            ->icon(ContainerInterface::ICON)
            ->schema([]);
    }

    public function editFields(): Block
    {
        return $this->createFields();
    }

    public function render(): View
    {
        return view(ContainerInterface::COMPONENT_TEMPLATE);
    }
}
