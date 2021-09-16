<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutController extends Controller
{
    public function authorization()
    {
        return view('authorization');
    }

    public function registration()
    {
        return view('registration');
    }

    public function registrationCheck(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|min:5|max:100',
            'login' => 'required|min:5|max:255',
            'pass' => 'required|min:8|max:32'
        ]);
    }

    public function authorizationCheck(Request $request)
    {
        $validation = $request->validate([
            'login' => 'required|min:5|max:255',
            'pass' => 'required|min:8|max:32'
        ]);
    }
}
