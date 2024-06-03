<?php

namespace Wzrd\CalandraTexDomain\Filament\CtOrder\Resources;

use Filament\Resources\Resource;
use Wzrd\CalandraTexDomain\Filament\CtOrder\Pages\CtOrderIndex;
use Wzrd\CalandraTexDomain\Filament\CtOrder\Widgets\CtData;
use Wzrd\CalandraTexDomain\Filament\CtOrder\Widgets\CtOrderHistory;
use Wzrd\CalandraTexDomain\Filament\CtOrder\Widgets\NewCtOrder;
use Wzrd\CalandraTexDomain\Model\CtOrder;

class CtOrderResource extends Resource
{
    protected static ?string $model = CtOrder::class;
    protected static ?int $navigationSort = 30;
    protected static ?string $navigationGroup = "CalandraTex";
    protected static ?string $navigationLabel = "CalandraTex";
    protected static ?string $navigationIcon = 'heroicon-o-scissors';

    public static function getWidgets(): array
    {
        return [
            NewCtOrder::class,
            CtOrderHistory::class,
            CtData::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => CtOrderIndex::route('/'),
        ];
    }
}
