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
use Livewire\Component;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Wzrd\Cms\Config\ConfigInterface;
use Wzrd\Cms\Filament\Resources\CmsResource\ContentResource;
use Wzrd\Cms\Model\ContentStatusInterface;

class ContentEdit extends EditRecord
{

    protected static string $resource = ContentResource::class;
    protected static ?int $selectedBlock = 0;
    public ?array $data = [
        'selectedBlock' => 0
    ];

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
                                        ->live()
                                        ->required(),
                                ])
                                ->action(function (array $data, Action $action): void {
                                    $this->data['selectedBlock'] = $data['newComponent'];
                                    $action
                                        ->getComponent()
                                        ->getContainer()
                                        ->getComponent('slotsComponent')
                                        ->viewData(['selectedBlock' => 1])
                                        ->getChildComponentContainer()
                                        ->fill();
                                })
                        )
                        ->schema(fn (Get $get): array => $this->getSelectedComponent($get))
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

    public function getSelectedComponent(Get $get): array
    {
        return [App::make($this->availableComponentClasses()[$this->data['selectedBlock']])->adminEdit()];
    }
}
