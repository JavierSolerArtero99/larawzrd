<?php

namespace Wzrd\Cms\Filament\Resources\CmsResource\Pages;

use Filament\Resources\Pages\Page;
use Wzrd\Cms\Filament\Resources\CmsResource\ContentResource;

class ContentIndex extends Page
{
    protected ?string $heading = "";
    protected static string $view = 'WzrdCms::admin.pages.content';
    protected static string $resource = ContentResource::class;

}
