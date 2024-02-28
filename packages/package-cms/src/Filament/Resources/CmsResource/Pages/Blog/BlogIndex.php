<?php

namespace Wzrd\Cms\Filament\Resources\CmsResource\Pages\Blog;

use Filament\Resources\Pages\Page;
use Wzrd\Cms\Filament\Resources\CmsResource\BlogResource;

class BlogIndex extends Page
{
    protected ?string $heading = "";
    protected static string $view = 'WzrdCms::admin.pages.blog';
    protected static string $resource = BlogResource::class;

}
