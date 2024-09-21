<?php

namespace Wzrd\Theme\WzrdComponents\Text;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Wzrd\Cms\Domain\WzrdComponents\Api\WithAdminFieldsInterface;
use Wzrd\Cms\Domain\WzrdComponents\Api\WithTemplateInterface;

class Text implements TextInterface, WithAdminFieldsInterface, WithTemplateInterface
{
    public array $data;

    public function setData(array $data): Text
    {
        $this->data = $data;

        return $this;
    }

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

    public function render()
    {
        return view(TextInterface::COMPONENT_TEMPLATE)
            ->with(TextInterface::HTML_TAG, $this->data[TextInterface::HTML_TAG])
            ->with(TextInterface::COMPONENT_VALUE, $this->data[TextInterface::COMPONENT_VALUE])
            ->with(TextInterface::CSS_CLASSES, $this->data[TextInterface::CSS_CLASSES]);
    }
}
