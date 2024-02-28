<?php

namespace Wzrd\Cms\Filament\Resources\CmsResource\Pages\Theme;

use Filament\Resources\Pages\ListRecords;
use Wzrd\Cms\Filament\Resources\CmsResource\ThemeResource;

class ThemeIndex extends ListRecords
{
    protected ?string $heading = "";
    protected static string $resource = ThemeResource::class;

}
