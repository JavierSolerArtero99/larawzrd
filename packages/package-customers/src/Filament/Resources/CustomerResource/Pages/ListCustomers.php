<?php

namespace Wzrd\Customer\Filament\Resources\CustomerResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Wzrd\Customer\Filament\Resources\CustomerResource\CustomerResource;
use Wzrd\Customer\Filament\Widgets\CustomersTotalCount;

class ListCustomers extends ListRecords
{
    protected static string $resource = CustomerResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            CustomersTotalCount::class,
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('create-attribute')
                ->label(__("New Attribute"))
                ->color("info")
                ->url("/")
                ->openUrlInNewTab(),
            Actions\CreateAction::make()->color('success'),
        ];
    }
}
