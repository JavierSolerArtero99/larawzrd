<?php

namespace Wzrd\Cms\Filament\Resources\CmsResource\Pages;

use Filament\Resources\Pages\Page;
use Wzrd\Cms\Filament\Resources\CmsResource\ThemeResource;

class ThemeIndex extends Page
{
    protected ?string $heading = "";
    protected static string $view = 'WzrdCms::admin.pages.theme';
    protected static string $resource = ThemeResource::class;

}
