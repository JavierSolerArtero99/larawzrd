<?php

namespace Wzrd\Theme\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ThemeController extends Controller
{
    public function render(string $slug = null): View
    {
        return view('WzrdTheme::styleguide')
            ->with('layout', 'default')
            ->with('title', 'Home - Calandratex');
    }
}
