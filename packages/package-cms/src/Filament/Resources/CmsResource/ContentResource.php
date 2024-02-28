<?php

namespace Wzrd\Cms\Filament\Resources\CmsResource;

use Filament\Resources\Resource;
use Wzrd\Cms\Filament\Resources\CmsResource\Pages\Content\ContentEdit;
use Wzrd\Cms\Filament\Resources\CmsResource\Pages\Content\ContentList;
use Wzrd\Cms\Model\Content;

class ContentResource extends Resource
{
    protected static ?string $model = Content::class;
    protected static ?int $navigationSort = 20;
    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';

    public static function getNavigationGroup(): ?string
    {
        return 'Content';
    }

    public static function getPages(): array
    {
        return [
            'index' => ContentList::route('/'),
            'edit' => ContentEdit::route('/{record}/edit'),
        ];
    }
}
