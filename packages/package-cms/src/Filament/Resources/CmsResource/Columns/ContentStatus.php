<?php

namespace Wzrd\Cms\Filament\Resources\CmsResource\Columns;

use Filament\Tables\Columns\Column;
use Wzrd\Cms\Model\Theme\ContentStatusInterface;

class ContentStatus extends Column
{
    protected string $view = 'WzrdCms::admin.columns.status-col';

    public function isPublished()
    {
        return $this->getState() == ContentStatusInterface::PUBLISHED;
    }
}
