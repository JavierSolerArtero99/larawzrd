<?php

namespace Wzrd\Cms\Filament\Resources\CmsResource;

use Filament\Resources\Resource;
use Wzrd\Cms\Filament\Resources\CmsResource\Pages\Theme\ThemeList;
use Wzrd\Cms\Filament\Resources\CmsResource\Pages\Theme\ThemeView;
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
            'index' => ThemeList::route('/'),
            'view' => ThemeView::route('/{record}'),
        ];
    }
}
