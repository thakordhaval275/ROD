<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class companyController extends Controller
{
    //======== Company Pages ==============

    public function companyProfile()
    {
        return view('company.companyProfile');
    }

    public function jobpost()
    {
        return view('company.jobPost');
    }
}
