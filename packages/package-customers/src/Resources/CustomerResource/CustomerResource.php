<?php

namespace Wzrd\Customer\Resources\CustomerResource;

use Wzrd\Customer\Resources\CustomerResource\Pages;
use Wzrd\Customer\Model\Customer;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Wzrd\Customer\Model\CustomerAttributes;
use Wzrd\Customer\Tables\Columns\DynamicAttribute;
use Wzrd\Customer\Widgets\CustomersTotalCount;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?int $navigationSort = 10;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function getNavigationGroup(): ?string
    {
        return 'Customers';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('email')->required()->unique(),
                TextInput::make('password')->required()->password(),
            ]);
    }

    public static function table(Table $table): Table
    {
        $eavAttributes = CustomerAttributes::all();
        $columns = [
            Tables\Columns\TextColumn::make('name'),
            Tables\Columns\TextColumn::make('email'),
            Tables\Columns\TextColumn::make('email'),
        ];

        foreach ($eavAttributes as $col) {
            $columns[] = DynamicAttribute::make($col->label)
                ->setAttribute($col)
                ->toggleable(isToggledHiddenByDefault: true);
        }

        return $table
            ->columns($columns)
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
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            CustomersTotalCount::class
        ];
    }
}
