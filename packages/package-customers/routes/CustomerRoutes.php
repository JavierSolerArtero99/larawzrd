<?php

use Illuminate\Support\Facades\Route;
use Wzrd\Customer\Controllers\LoginController;

Route::get('/customer/login', [LoginController::class, 'render']);
