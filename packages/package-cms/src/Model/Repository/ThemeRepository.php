<?php

namespace Wzrd\Cms\Model\Repository;

use Wzrd\Cms\Model\Theme;
use Illuminate\Database\Eloquent\Collection;

class ThemeRepository implements ThemeRepositoryInterface
{
    public function allTheme(): Collection
    {
        return Theme::all();
    }
}
