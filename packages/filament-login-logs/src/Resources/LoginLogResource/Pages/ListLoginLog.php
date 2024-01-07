<?php

namespace Wzrd\FilamentLoginLogs\Resources\LoginLogResource\Pages;

use Wzrd\FilamentLoginLogs\Resources\LoginLogResource\LoginLogResource;
use Filament\Resources\Pages\ListRecords;

class ListLoginLog extends ListRecords
{
    protected static string $resource = LoginLogResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [

        ];
    }
}
