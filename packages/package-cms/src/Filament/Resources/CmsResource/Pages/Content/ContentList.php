<?php

namespace Wzrd\Cms\Filament\Resources\CmsResource\Pages\Content;

use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions;
use Filament\Tables\Table;
use Wzrd\Cms\Filament\Resources\CmsResource\ContentResource;


class ContentList extends ListRecords
{
    protected ?string $heading = "";
    protected static string $resource = ContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('page_title'),
                TextColumn::make('slug'),
            ])
            ->filters([])
            ->actions([])
            ->bulkActions([]);
    }

}
