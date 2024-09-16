<?php

namespace Wzrd\Cms\Domain\WzrdComponents\Api;

use Filament\Forms\Components\Builder\Block;

interface WithAdminFieldsInterface
{
    public function createFields(): Block;
    public function editFields(): Block;
}
