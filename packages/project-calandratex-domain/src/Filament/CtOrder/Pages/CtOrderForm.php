<?php

namespace Wzrd\CalandraTexDomain\Filament\CtOrder\Pages;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;
use Wzrd\CalandraTexDomain\Filament\CtOrder\Resources\CtOrderResource;
use Wzrd\CalandraTexDomain\Model\CtOrder\PresentationInterface;
use Filament\Forms\Components\Checkbox;

class CtOrderForm extends CreateRecord
{

    protected static string $resource = CtOrderResource::class;

    public function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('albaran')->required()->columnSpanFull(),
            TextInput::make('acabado')->required()->columnSpanFull(), // Lista (relacion)
            Section::make([
                TextInput::make('rollos')->required()->numeric(),
                TextInput::make('piezas')->required()->numeric(),
                TextInput::make('metros')->required()->numeric(),
            ])->columns(3),
            TextInput::make('ancho_entrada')->required()->numeric(),
            TextInput::make('ancho_final')->required()->numeric(),
            Select::make('presentacion')
                ->required()
                ->options(PresentationInterface::SELECT_VALUES)
                ->native(false),
            TextInput::make('cortar_a')->required()->numeric(), // Visible solo si la presentacion es cortado
            Checkbox::make('cinta')
                ->label('Cinta'),
            Checkbox::make('tablilla')
                ->label('Tablilla'),
            TextInput::make('num_bolo')->numeric()->columnSpanFull(),
            TextInput::make('etiqueta')->required()->columnSpanFull(),// Lista
            TextInput::make('piezas_de')->columnSpanFull(),
            Textarea::make('observaciones_1')->columnSpanFull(),
            Textarea::make('observaciones_2')->columnSpanFull(),
            Textarea::make('observaciones_3')->columnSpanFull(),
            Textarea::make('observaciones_4')->columnSpanFull(),
        ]);
    }

}
