<?php

namespace Wzrd\Cms\Filament\Resources\CmsResource\Pages\Theme;

use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Wzrd\Cms\Filament\Resources\CmsResource\ThemeResource;

class ThemeList extends ListRecords
{
    protected ?string $heading = "";
    protected static string $resource = ThemeResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('slug')
            ])
            ->actions([
                EditAction::make(),
            ]);
    }
}
