<?php

namespace Wzrd\Cms\Filament\Resources\CmsResource\Pages\Content;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Wzrd\Cms\Components\Api\ComponentInterface;
use Wzrd\Cms\Config\ConfigInterface;
use Wzrd\Cms\Filament\Resources\CmsResource\ContentResource;
use Wzrd\Cms\Model\ContentStatusInterface;

class ContentEdit extends EditRecord
{

    protected static string $resource = ContentResource::class;

    public function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('page_title'),
            TextInput::make('meta_title'),
            TextInput::make('slug'),
            Select::make('status')
                ->options([
                    ContentStatusInterface::PUBLISHED => "Published",
                    ContentStatusInterface::DRAFT => "Draft",
                ])
                ->native(false),
            Textarea::make('meta_desc')->columnSpanFull(),
            Section::make('body')
                ->schema(array_map(
                    fn(string $componentClass): ComponentInterface => App::make($componentClass)->adminEdit(),
                    Config::get(ConfigInterface::WZRD_COMPONENTS))
                )
        ]);
    }

}
