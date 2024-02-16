<?php

namespace Wzrd\Customer\Resources\CustomerAttributesResource;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Wzrd\Customer\Model\CustomerAttributes;
use Filament\Forms\Components\TextInput;
use Wzrd\Customer\Model\Customer;
use Wzrd\Customer\Resources\CustomerAttributesResource\Pages\ListCustomerAttributes;
use Wzrd\Customer\Resources\CustomerResource\Pages\ListCustomers;

class CustomerAttributesResource extends Resource
{
    protected static ?string $model = CustomerAttributes::class;

    protected static ?int $navigationSort = 20;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-vertical';

    public static function getNavigationGroup(): ?string
    {
        return 'Customers';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('code')->required()->rules(['alpha_dash']),
                TextInput::make('label')->required()->unique(),
                TextInput::make('frontend_type')->required(),
                TextInput::make('backend_type')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('code'),
                Tables\Columns\TextColumn::make('label'),
                Tables\Columns\TextColumn::make('frontend_type'),
                Tables\Columns\TextColumn::make('backend_type'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCustomerAttributes::route('/'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
        ];
    }
}
