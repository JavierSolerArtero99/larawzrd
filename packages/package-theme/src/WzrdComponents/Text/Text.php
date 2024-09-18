<?php

namespace Wzrd\Theme\WzrdComponents\Text;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Wzrd\Cms\Domain\WzrdComponents\Api\WithAdminFieldsInterface;
use Wzrd\Cms\Domain\WzrdComponents\Api\WithTemplateInterface;

class Text implements WithAdminFieldsInterface, TextInterface, WithTemplateInterface
{
    private $data;

    public function createFields(): Block
    {
        return Block::make(TextInterface::COMPONENT_NAME)
            ->icon(self::COMPONENT_ICON)
            ->schema([
                Textarea::make(self::COMPONENT_VALUE),
                Select::make(self::HTML_TAG)
                    ->options(self::HTML_TAG_OPTIONS)
                    ->searchable()
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
        return view(TextInterface::COMPONENT_TEMPLATE);
    }
}
