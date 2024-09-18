<?php

namespace Wzrd\Cms\Filament\Resources\CmsResource\Pages\Content;

use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Wzrd\Cms\Filament\Resources\CmsResource\ContentResource;
use Wzrd\Cms\Model\Theme\ContentStatusInterface;
use Wzrd\Cms\Model\Theme\LayoutInterface;
use Wzrd\CmsBridge\Config\ConfigInterface;
use Wzrd\Theme\WzrdComponents\Text\TextInterface;

class ContentEdit extends EditRecord
{

    protected static string $resource = ContentResource::class;

    public function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('page_title')->required(),
            TextInput::make('meta_title')->required(),
            TextInput::make('slug')->required()->helperText('CAUTION!: No input a duplicate value'),
            Select::make('status')
                ->required()
                ->options(ContentStatusInterface::SELECT_VALUES)
                ->native(false),
            Select::make('layout')
                ->required()
                ->options(LayoutInterface::SELECT_VALUES)
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
            fn($component) => App::make($component['class'])->editFields(),
            Config::get(ConfigInterface::WZRD_COMPONENTS)
        );
    }

}
