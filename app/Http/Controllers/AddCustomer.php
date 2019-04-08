<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddCustomer extends Controller
{
    public function viewAddCust()
    {
        return view('addcust');
    }
}
