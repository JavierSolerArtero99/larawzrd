<?php

namespace Wzrd\Customer\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Wzrd\Customer\Model\Customer;

class LoginController extends Controller
{

    public function render(): View
    {
        $customer = Customer::find(1);

        return view('WzrdCustomer::pages.login', ['customer' => $customer]);
    }
}
