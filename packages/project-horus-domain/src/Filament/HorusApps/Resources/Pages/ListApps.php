<?php

namespace Wzrd\HorusDomain\Filament\HorusApps\Resources\Pages;

use Filament\Actions\CreateAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Wzrd\HorusDomain\Filament\HorusApps\Resources\HorusAppsResource;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Wzrd\HorusDomain\Filament\HorusApps\Widgets\ListAppsWidgets;

class ListApps extends ListRecords
{
    protected static string $resource = HorusAppsResource::class;
    protected static ?string $title = "Apps";

    public function getBreadcrumbs(): array
    {
        return [];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            ListAppsWidgets::class,
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make('create-app')
                ->label(__("Create New App"))
                ->icon('heroicon-o-cube-transparent')
                ->color("success"),
        ];
    }

    public function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('slug')->required(),
            TextInput::make('name')->required(),
            FileUpload::make('logo')
                // añadir restriccion de svg
                ->image()
                ->visible()
                ->preserveFilenames()
                ->deletable()
                ->imageEditor()
                ->hiddenLabel()
                ->imageEditor(),
            TextInput::make('api_key')->required(),
            TextInput::make('paths')->required(),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('logo'),
                TextColumn::make('name'),
                TextColumn::make('slug'),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }

}
