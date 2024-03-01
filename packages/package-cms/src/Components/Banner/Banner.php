<?php

namespace Wzrd\Cms\Components\Banner;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Wzrd\Cms\Components\Api\ComponentInterface;

class Banner extends ComponentInterface implements BannerInterface
{
    public function adminEdit()
    {
        return [
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
        ];
        /*
        return Section::make(BannerInterface::COMPONENT_NAME)
            ->statePath($this->generateUid())
            ->collapsible()
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
       */
    }
}
