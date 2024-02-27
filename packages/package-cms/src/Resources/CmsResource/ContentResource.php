<?php

namespace Wzrd\Cms\Resources\CmsResource;

use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms\Form;
use Wzrd\Customer\Resources\CustomerResource\Pages\ListCustomers;

class ContentResource extends Resource
{
    protected static ?int $navigationSort = 30;
    protected static ?string $navigationIcon = 'heroicon-o-paint-brush';

    public static function getNavigationGroup(): ?string
    {
        return 'Content';
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCustomers::route('/'),
        ];
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([])
            ->filters([])
            ->actions([])
            ->bulkActions([]);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([]);
    }
}
