<?php

namespace Wzrd\Customer\Filament\Resources\CustomerAttributesResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Wzrd\Customer\Filament\Resources\CustomerAttributesResource\CustomerAttributesResource;

class ListCustomerAttributes extends ListRecords
{
    protected static string $resource = CustomerAttributesResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->color('success'),
        ];
    }
}
