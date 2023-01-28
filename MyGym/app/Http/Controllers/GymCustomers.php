<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GymCustomer;

class GymCustomers extends Controller
{
    public function signUpCustomer(Request $request)
    {
        print_r($request->input());die;
    }
}
