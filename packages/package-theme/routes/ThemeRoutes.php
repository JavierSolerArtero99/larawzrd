<?php

use Illuminate\Support\Facades\Route;
use Wzrd\Theme\Controllers\ThemeController;

Route::get('styleguide', [ThemeController::class, 'render']);
