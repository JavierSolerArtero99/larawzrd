<?php

namespace Wzrd\HorusDomain\Filament\HorusApps\Resources\Pages;

use Filament\Actions\CreateAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Wzrd\HorusDomain\Filament\HorusApps\Resources\HorusAppsResource;

class ListApps extends ListRecords
{
    protected static string $resource = HorusAppsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make('create-content')
                ->label(__("Create Content"))
                ->color("success"),
        ];
    }

    public function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('slug')->required(),
            TextInput::make('name')->required(),
            TextInput::make('api_key')->required(),
            TextInput::make('paths')->required(),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name'),
            TextColumn::make('slug'),
        ]);
    }

}
