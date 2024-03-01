<?php

namespace Wzrd\Cms\Filament\Resources\CmsResource\Pages\Content;

use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Monolog\Handler\IFTTTHandler;
use Wzrd\Cms\Components\Banner\Banner;
use Wzrd\Cms\Components\Text\Text;
use Wzrd\Cms\Config\ConfigInterface;
use Wzrd\Cms\Filament\Resources\CmsResource\ContentResource;
use Wzrd\Cms\Model\ContentStatusInterface;

class ContentEdit extends EditRecord
{

    protected static string $resource = ContentResource::class;
    public ?array $data = ['blocks' => []];

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
            Section::make('Content')
                ->statePath('body')
                ->label("Slots")
                ->schema([
                    Repeater::make('slots')
                        ->hiddenLabel()
                        ->cloneable()
                        ->collapsible()
                        ->addActionLabel('Add Slot')
                        ->deleteAction(fn(Action $action) => $action->requiresConfirmation())
                        ->addAction(
                            fn(Action $action) => $action
                                ->form([
                                    Select::make('newComponent')
                                        ->label('Search the component')
                                        ->searchable()
                                        ->options($this->availableComponentNames())
                                        ->afterStateUpdated(function (?string $state) {
                                            $this->data['blocks'][] = $this->availableComponentClasses()[$state];
                                        })
                                        ->required(),
                                ])
                        )
                        ->schema(App::make(Text::class)->adminEdit())
                        ->key('slotsComponent'),
                ]),
        ]);
    }

    private function availableComponentNames()
    {
        return array_map(
            fn($componentClass) => $componentClass::COMPONENT_NAME,
            Config::get(ConfigInterface::WZRD_COMPONENTS)
        );
    }

    private function availableComponentClasses(): array
    {
        return array_map(
            fn($componentClass) => $componentClass,
            Config::get(ConfigInterface::WZRD_COMPONENTS)
        );
    }

    public function getSelectedComponent(): array
    {
        return array_map(
            //fn($block) => Section::make($block::COMPONENT_NAME)->schema(App::make($block)->adminEdit()),
            fn($block) => Section::make($block::COMPONENT_NAME),
            $this->data['blocks'] ?? []
        );
    }
}
