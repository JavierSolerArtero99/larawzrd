<?php

namespace Wzrd\Cms\Filament\Resources\CmsResource;

use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Wzrd\Cms\Filament\Resources\CmsResource\Pages\Theme\ThemeIndex;
use Wzrd\Cms\Filament\Resources\CmsResource\Pages\Theme\ViewTheme;
use Wzrd\Cms\Model\Theme;

class ThemeResource extends Resource
{
    protected static ?string $model = Theme::class;
    protected static ?int $navigationSort = 10;
    protected static ?string $navigationIcon = 'heroicon-o-paint-brush';
    protected static ?string $navigationLabel = "Tema";

    public static function getNavigationGroup(): ?string
    {
        return 'Content';
    }

    public static function getPages(): array
    {
        return [
            'index' => ThemeIndex::route('/'),
            'view' => ViewTheme::route('/{record}'),
        ];
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('slug')
            ])
            ->actions([
                ViewAction::make(),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\TextEntry::make('slug')
            ]);
    }
}
