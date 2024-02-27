<?php

namespace Wzrd\Cms\Resources\CmsResource;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Wzrd\Cms\Resources\CmsResource\Pages\ThemeIndex;
use Wzrd\Customer\Resources\CustomerResource\Pages\ListCustomers;

class ThemeResource extends Resource
{
    protected static ?int $navigationSort = 10;
    protected static ?string $navigationIcon = 'heroicon-o-paint-brush';

    public static function getNavigationGroup(): ?string
    {
        return 'Content';
    }

    public static function getLabel(): ?string
    {
        return "Tema";
    }

    public static function getPages(): array
    {
        return [
            'index' => ThemeIndex::route('/'),
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
