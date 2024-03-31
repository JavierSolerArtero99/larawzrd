<?php

namespace Wzrd\HorusDomain\Filament\HorusInteraction\Resources\Pages;

use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Wzrd\HorusDomain\Filament\HorusInteraction\Resources\HorusInteractionResource;
use Wzrd\HorusDomain\Filament\HorusInteraction\Widgets\PlatformChart;

class ListInteractions extends ListRecords
{
    protected static string $resource = HorusInteractionResource::class;

    public function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('app'),
            TextColumn::make('api_key')->searchable(),
            TextColumn::make('device_id'),
            TextColumn::make('device_brand'),
            TextColumn::make('device_model'),
            TextColumn::make('device_sdk'),
            TextColumn::make('path'),
            TextColumn::make('platform'),
            TextColumn::make('screen_width'),
            TextColumn::make('screen_height'),
            TextColumn::make('xdpi'),
            TextColumn::make('ydpi'),
        ]);
    }

    protected function getHeaderWidgets(): array
    {
        return [
            // PlatformChart::class
        ];
    }

}
