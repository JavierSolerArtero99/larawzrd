<?php

namespace Wzrd\Cms\Filament\Resources\CmsResource\Pages\Theme;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Get;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;
use Wzrd\Cms\Filament\Resources\CmsResource\ThemeResource;

class ThemeEdit extends EditRecord
{
    protected static string $resource = ThemeResource::class;

    public function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Logo')
                ->hidden(fn(Get $get): bool => $get('slug') != 'header')
                ->statePath('value')
                ->schema([
                    FileUpload::make('logo')
                        ->image()
                        ->hiddenLabel()
                        ->imageEditor(),
                ]),
            Section::make('Sections')
                ->statePath('value')
                ->schema([
                    Repeater::make('sections')
                        ->label('Level 1 Sections')
                        ->collapsible()
                        ->collapsed()
                        ->schema([
                            TextInput::make('name'),
                            TextInput::make('link'),
                            Repeater::make('children')
                                ->label('Level 2 Sections')
                                ->collapsible()
                                ->collapsed()
                                ->defaultItems(0)
                                ->schema([
                                    TextInput::make('name'),
                                    TextInput::make('icon'),
                                    Textarea::make('description')
                                        ->columnSpan(2),
                                ]),
                        ]),
                ]),
        ]);
    }

}
