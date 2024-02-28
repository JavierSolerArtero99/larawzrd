<?php

namespace Wzrd\Cms\Filament\Resources\CmsResource\Pages\Theme;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;
use Wzrd\Cms\Filament\Resources\CmsResource\ThemeResource;

class ThemeView extends ViewRecord
{
    protected static string $resource = ThemeResource::class;

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('slug')
            ]);
    }
}
