<?php

namespace Wzrd\Cms\Components\Text;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Wzrd\Cms\Components\Api\ComponentInterface;

class Text extends ComponentInterface implements TextInterface
{

    public function adminEdit()
    {
        return Section::make(TextInterface::COMPONENT_NAME)
            ->statePath($this->generateUid())
            ->collapsible()
            ->collapsed()
            ->schema([
                TextInput::make(self::COMPONENT_VALUE),
                Select::make(self::HTML_TAG)
                    ->options(self::HTML_TAG_OPTIONS)
                    ->searchable()
                    ->native(false),
                TagsInput::make(self::CSS_CLASSES),
            ]);
    }
}
