<?php

namespace Wzrd\FilamentLoginLogs\Resources\LoginLogResource\Pages;

use Filament\Resources\Pages\ListRecords;
use Wzrd\FilamentLoginLogs\Resources\LoginLogResource\LoginLogResource;

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
