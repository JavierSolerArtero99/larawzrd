<?php

namespace Wzrd\Theme\WzrdComponents\Text;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Illuminate\View\View;
use Wzrd\Cms\Domain\WzrdComponents\Api\AbstractComponent;
use Wzrd\Cms\Domain\WzrdComponents\Api\WithAdminFieldsInterface;

class Text extends AbstractComponent implements
    TextInterface,
    WithAdminFieldsInterface
{
    public function createFields(): Block
    {
        return Block::make(TextInterface::COMPONENT_NAME)
            ->icon(self::COMPONENT_ICON)
            ->schema([
                Textarea::make(self::COMPONENT_VALUE),
                Select::make(self::HTML_TAG)
                    ->options(self::HTML_TAG_OPTIONS)
                    ->searchable()
                    ->required()
                    ->native(false),
                TagsInput::make(self::CSS_CLASSES),
            ]);
    }

    public function editFields(): Block
    {
        return $this->createFields();
    }

    public function render(): View
    {
        return view(TextInterface::COMPONENT_TEMPLATE)
            ->with(TextInterface::HTML_TAG, $this->data[TextInterface::HTML_TAG])
            ->with(TextInterface::COMPONENT_VALUE, $this->data[TextInterface::COMPONENT_VALUE])
            ->with(TextInterface::CSS_CLASSES, $this->data[TextInterface::CSS_CLASSES]);
    }
}
