<?php

namespace Wzrd\Customer\Resources\CustomerAttributesResource\Pages;

use Wzrd\Customer\Resources\CustomerAttributesResource\CustomerAttributesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Wzrd\Customer\Widgets\CustomersTotalCount;

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
