<?php

use Illuminate\Support\Facades\Route;
use Wzrd\Customer\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'render']);
