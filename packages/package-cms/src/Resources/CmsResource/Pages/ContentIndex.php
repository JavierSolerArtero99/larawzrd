<?php

namespace Wzrd\Cms\Resources\CmsResource\Pages;

use Filament\Resources\Pages\Page;
use Wzrd\Cms\Resources\CmsResource\ContentResource;

class ContentIndex extends Page
{
    protected ?string $heading = "";
    protected static string $view = 'WzrdCms::admin.pages.content';
    protected static string $resource = ContentResource::class;

}
