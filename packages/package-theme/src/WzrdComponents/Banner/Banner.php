<?php

namespace Wzrd\Theme\WzrdComponents\Banner;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Wzrd\Cms\Domain\WzrdComponents\Api\WithAdminFieldsInterface;

class Banner implements WithAdminFieldsInterface, BannerInterface
{

    public function createFields(): Block
    {
        return Block::make(BannerInterface::COMPONENT_NAME)
            ->icon(self::COMPONENT_ICON)
            ->schema([
                FileUpload::make(self::IMAGE)
                    ->image()
                    ->visible()
                    ->preserveFilenames()
                    ->deletable()
                    ->imageEditor()
                    ->hiddenLabel()
                    ->imageEditor(),
                TextInput::make(self::TITLE),
                TextInput::make(self::SUBTITLE),
                Textarea::make(self::DESCRIPTION),
                Select::make(self::DISPLAY_KEY)
                    ->options(self::TEXT_DISPLAYS)
                    ->searchable()
                    ->native(false),
            ]);
    }

    public function editFields(): Block
    {
        return $this->createFields();
    }
}
