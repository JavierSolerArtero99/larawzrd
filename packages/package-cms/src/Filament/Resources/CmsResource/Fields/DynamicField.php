<?php

namespace Wzrd\Cms\Filament\Resources\CmsResource\Fields;

use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\App;

class DynamicField implements DynamicFieldInterface
{

    public function field(string $backendType): TextInput
    {
        $field = App::make($backendType, ['name' => 'value']);

        return HeaderField::make('slug');
    }

}
