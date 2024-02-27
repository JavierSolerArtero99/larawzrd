<?php

namespace Wzrd\Cms\Resources\CmsResource\Pages;

use Filament\Resources\Pages\Page;
use Wzrd\Cms\Resources\CmsResource\BlogResource;

class BlogIndex extends Page
{
    protected ?string $heading = "";
    protected static ?string $breadcrumb = "Blog";
    protected static string $view = 'WzrdCms::admin.pages.blog';
    protected static string $resource = BlogResource::class;

}
