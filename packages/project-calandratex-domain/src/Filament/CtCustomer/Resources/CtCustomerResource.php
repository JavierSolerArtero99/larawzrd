<?php

namespace Wzrd\CalandraTexDomain\Filament\CtCustomer\Resources;

use Filament\Resources\Resource;
use Wzrd\CalandraTexDomain\Filament\CtCustomer\Pages\CtCustomerIndex;

class CtCustomerResource extends Resource
{

    protected static ?int $navigationSort = 30;
    protected static ?string $navigationIcon = 'heroicon-o-document';
    protected static ?string $navigationLabel = "Customer Dashboard";

    public static function getNavigationGroup(): ?string
    {
        return 'CalandraTex';
    }

    public static function getPages(): array
    {
        return [
            'index' => CtCustomerIndex::route('/'),
        ];
    }

}
