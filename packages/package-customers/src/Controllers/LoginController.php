<?php

namespace Wzrd\Customer\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class LoginController extends Controller
{

    public function render(): View
    {
        return view('WzrdCustomer::WzrdCustomer.pages.login');
    }
}
