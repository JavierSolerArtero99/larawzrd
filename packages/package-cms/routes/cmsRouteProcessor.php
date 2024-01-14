<?php

use Illuminate\Support\Facades\Route;
use Wzrd\Cms\Controllers\ViewProcessorController;

Route::get('/{slug?}', [ViewProcessorController::class, 'render']);
