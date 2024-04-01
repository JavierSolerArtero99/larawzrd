<?php

namespace Wzrd\HorusDomain\Filament\HorusApps\Resources\Pages;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;
use Wzrd\HorusDomain\Filament\HorusApps\Resources\HorusAppsResource;

class CreateApp extends CreateRecord
{
    protected static string $resource = HorusAppsResource::class;
    protected static ?string $title = "New App";

    public function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('api_key')
                ->required()
                ->unique()
                ->columnStart(1)
                ->default(Str::uuid()->toString()),
            Group::make([
                TextInput::make('name')->required(),
                FileUpload::make('logo')
                    ->helperText("Recommended format: .svg")
                    ->required()
                    ->acceptedFileTypes(['.svg'])
                    ->image()
                    ->visible()
                    ->preserveFilenames()
                    ->deletable()
                    ->imageEditor()
                    ->imageEditor(),
            ])
                ->columnSpanFull()
            ->columns(2),
            Repeater::make('paths')->columns(2)
                ->schema([
                    TextInput::make('name')->required(),
                    FileUpload::make('img')
                        ->required()
                        ->image()
                        ->visible()
                        ->preserveFilenames()
                        ->deletable()
                        ->imageEditor()
                        ->hiddenLabel()
                        ->imageEditor(),
                ])
                ->required()
                ->columnSpanFull(),
        ]);
    }

}
