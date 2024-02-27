<?php

namespace Wzrd\Cms\Resources\CmsResource;

use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms\Form;
use Wzrd\Cms\Resources\CmsResource\Pages\ContentIndex;

class ContentResource extends Resource
{
    protected static ?int $navigationSort = 20;
    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';

    public static function getNavigationGroup(): ?string
    {
        return 'Content';
    }

    public static function getPages(): array
    {
        return [
            'index' => ContentIndex::route('/'),
        ];
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([])
            ->filters([])
            ->actions([])
            ->bulkActions([]);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([]);
    }
}
