<?php

namespace Wzrd\HorusDomain\Filament\HorusInteraction\Resources;

use Wzrd\HorusDomain\Model\HorusInteraction as HorusInteractionModel;
use Filament\Resources\Resource;
use Wzrd\HorusDomain\Filament\HorusInteraction\Resources\Pages\ListInteractions;

class HorusInteractionResource extends Resource
{
    protected static ?string $model = HorusInteractionModel::class;
    protected static ?int $navigationSort = 50;
    protected static ?string $navigationIcon = 'heroicon-o-eye';
    protected static ?string $tenantOwnershipRelationshipName = "app";

    public static function getNavigationGroup(): ?string
    {
        return 'Horus';
    }

    public static function getPages(): array
    {
        return [
            'index' => ListInteractions::route('/'),
        ];
    }
}
