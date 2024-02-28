<?php

namespace Wzrd\Cms\Filament\Resources\CmsResource\Pages\Theme;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Illuminate\Support\Facades\App;
use Filament\Resources\Pages\EditRecord;
use Wzrd\Cms\Filament\Resources\CmsResource\Fields\DynamicFieldInterface;
use Wzrd\Cms\Filament\Resources\CmsResource\ThemeResource;

class ThemeEdit extends EditRecord
{
    protected static string $resource = ThemeResource::class;

    public function form(Form $form): Form
    {
        $dynamicField = App::make(DynamicFieldInterface::class);

        return $form->schema([
            TextInput::make('slug')->required()->unique(),
            $dynamicField->field($this->record->backend_type)
        ]);
    }

}
