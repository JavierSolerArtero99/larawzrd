<?php

namespace Wzrd\HorusDomain\Filament\HorusInteraction\Resources\Pages;

use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Wzrd\HorusDomain\Filament\HorusInteraction\Resources\HorusInteraction;

class ListInteractions extends ListRecords
{
    protected static string $resource = HorusInteraction::class;

    public function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('api_key')->searchable(),
        ]);
    }
}
