<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Technical;

class Addtec extends Controller
{


    // to render page
    public function viewAddTec()
    {
        return view('addtec');
    }


    public function createTec(Request $request)
    {


        $this->validate($request, [
            'Employee_number' => ['required', 'string', 'max:255', 'unique:technical'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'min:5', 'confirmed'],
        ]);


        if ($request->isMethod('post')) {
                $tec = new Technical;
                $tec->Employee_Number = $request->input('Employee_number');
                $tec->First_Name = $request->input('first_name');
                $tec->Last_Name = $request->input('last_name');
                $tec->password = Hash::make($request->input('password'));
                $tec->save();

                return  redirect()->route('addtec')->with('success', 'Add successfully');
            }
    }
}
