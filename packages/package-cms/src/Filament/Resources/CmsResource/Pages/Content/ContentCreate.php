<?php

namespace Wzrd\Cms\Filament\Resources\CmsResource\Pages\Content;

use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Wzrd\Cms\Config\ConfigInterface;
use Wzrd\Cms\Filament\Resources\CmsResource\ContentResource;
use Wzrd\Cms\Model\Theme\ContentStatusInterface;
use Wzrd\Cms\Model\Theme\LayoutInterface;

class ContentCreate extends CreateRecord
{
    protected static string $resource = ContentResource::class;

    public function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('page_title')->required(),
            TextInput::make('meta_title')->required(),
            TextInput::make('slug')->required()->unique(),
            Select::make('status')
                ->required()
                ->options([
                    ContentStatusInterface::PUBLISHED => "Published",
                    ContentStatusInterface::DRAFT => "Draft",
                ])
                ->native(false),
            Select::make('layout')
                ->required()
                ->options([
                    LayoutInterface::CONTAINER => "Container",
                    LayoutInterface::FULL_PAGE => "Full Page",
                ])
                ->native(false),
            Textarea::make('meta_desc')->columnSpanFull(),
            Section::make('Content')
                ->collapsible()
                ->collapsed()
                ->label("Slots")
                ->schema([
                    Builder::make('body')
                        ->blockNumbers(false)
                        ->blockPickerColumns(2)
                        ->blockPickerWidth('2xl')
                        ->hiddenLabel()
                        ->cloneable()
                        ->collapsible()
                        ->collapsed()
                        ->persistCollapsed()
                        ->addActionLabel('Add Slot')
                        ->deleteAction(fn(Action $action) => $action->requiresConfirmation())
                        ->blocks($this->getAllComponents()),
                ]),
        ]);
    }

    private function getAllComponents()
    {
        return array_map(
            fn($componentClass) => App::make($componentClass)->adminEdit(),
            Config::get(ConfigInterface::WZRD_COMPONENTS)
        );
    }
}
