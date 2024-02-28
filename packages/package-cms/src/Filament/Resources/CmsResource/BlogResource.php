<?php

namespace Wzrd\Cms\Filament\Resources\CmsResource;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Wzrd\Cms\Filament\Resources\CmsResource\Pages\Blog\BlogIndex;

class BlogResource extends Resource
{
    protected static ?int $navigationSort = 30;
    protected static ?string $navigationIcon = 'heroicon-o-document';
    protected static ?string $navigationLabel = "Blog";

    public static function getNavigationGroup(): ?string
    {
        return 'Content';
    }

    public static function getLabel(): ?string
    {
        return "Blog";
    }

    public static function getPages(): array
    {
        return [
            'index' => BlogIndex::route('/'),
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
