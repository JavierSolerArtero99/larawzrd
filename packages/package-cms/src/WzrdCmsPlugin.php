<?php

namespace Wzrd\Cms;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Wzrd\Cms\Resources\CmsResource\BlogResource;
use Wzrd\Cms\Resources\CmsResource\ContentResource;
use Wzrd\Cms\Resources\CmsResource\ThemeResource;

class WzrdCmsPlugin implements Plugin
{
    public static function make(): static
    {
        return app(static::class);
    }

    public function getId(): string
    {
        return 'wzrd-cms';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                ContentResource::class,
                ThemeResource::class,
                BlogResource ::class,
            ]);
    }

    public function boot(Panel $panel): void
    {}
}
