<?php

namespace Wzrd\CalandraTexDomain\Filament\CtOrder\Pages;

use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Table;
use Wzrd\CalandraTexDomain\Filament\CtOrder\Resources\CtOrderResource;
use Wzrd\CalandraTexDomain\Filament\CtOrder\Widgets\CtData;
use Wzrd\CalandraTexDomain\Filament\CtOrder\Widgets\CtOrderHistory;
use Wzrd\CalandraTexDomain\Filament\CtOrder\Widgets\NewCtOrder;

class CtOrderIndex extends ListRecords
{
    protected static string $resource = CtOrderResource::class;
    protected static ?string $title = "CalandraTex";

    public function getHeaderWidgetsColumns(): int|string|array
    {
        return 1;
    }

    protected function getHeaderWidgets(): array
    {
        return [
            NewCtOrder::class,
            CtOrderHistory::class,
            CtData::class,
        ];
    }

    public function table(Table $table): Table
    {
        return $table->columns([]);
    }
}
