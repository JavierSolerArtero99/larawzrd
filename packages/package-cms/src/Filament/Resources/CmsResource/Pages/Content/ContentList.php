<?php

namespace Wzrd\Cms\Filament\Resources\CmsResource\Pages\Content;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Collection;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
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
                IconColumn::make('status')
                    ->label("")
                    ->icon(fn (string $state): string => match ($state) {
                        ContentStatusInterface::DRAFT => 'heroicon-o-x-circle',
                        ContentStatusInterface::PUBLISHED => 'heroicon-o-check-circle',
                    })->color(fn (string $state): string => match ($state) {
                        ContentStatusInterface::DRAFT => 'warning',
                        ContentStatusInterface::PUBLISHED => 'success',
                    }),
                TextColumn::make('page_title')->searchable(),
                TextColumn::make('slug')->searchable(),
            ])
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
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    BulkAction::make('publish')
                        ->color("success")
                        ->requiresConfirmation()
                        ->action(fn (Collection $records) => $records->each->publish()),
                    BulkAction::make('draft')
                        ->color("warning")
                        ->requiresConfirmation()
                        ->action(fn (Collection $records) => $records->each->unpublish()),
                    BulkAction::make('delete')
                        ->color("danger")
                        ->requiresConfirmation()
                        ->action(fn (Collection $records) => $records->each->delete()),
                ])->label(""),
            ]);
    }

}
