<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganisationsController extends Controller
{
    public function addOrganization()
    {
        return view('add-organization');
    }

    public function addOrganizationCheck(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|min:4|max:50',
            'address' => 'required|max:150',
            'phone' => 'required|max:13',
            'working_hours' => 'required|max:45',
            'unp' => 'required|min:9|max:9',
            'legal_name' => 'required|max:255',
            'additionally' => 'min:15'
        ]);
    }
}
