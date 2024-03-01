<?php

namespace Wzrd\Cms\Filament\Resources\CmsResource\Pages\Content;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Wzrd\Cms\Filament\Resources\CmsResource\Columns\ContentStatus;
use Wzrd\Cms\Filament\Resources\CmsResource\ContentResource;
use Wzrd\Cms\Model\Theme\ContentStatusInterface;


class ContentList extends ListRecords
{
    protected static string $resource = ContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make('create-content')
                ->label(__("Create Content"))
                ->color("success"),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                ContentStatus::make('status')
                    ->label(""),
                TextColumn::make('page_title'),
                TextColumn::make('slug'),
            ])
            ->searchable('slug')
            ->filters([
                SelectFilter::make('status')
                    ->native(false)
                    ->options([
                        ContentStatusInterface::PUBLISHED => "Published",
                        ContentStatusInterface::DRAFT => "Draft",
                    ]),
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([]);
    }

}
