<?php

namespace Wzrd\Cms\Filament\Resources\CmsResource\Fields;

use Filament\Forms\Components\TextInput;

class HeaderField
{
    protected string $view = 'filament-forms::components.text-input';


    public function field(): TextInput
    {
        return TextInput::make('slug');
    }

}
