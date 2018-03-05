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

    public function companyedit()
    {
        return view('company.companyEdit');
    }

    public function jobpost()
    {
        return view('company.jobPost');
    }
    
    public function viewjobs()
    {
        return view('company.viewPostJobs');
    }
    
    public function jobdetail()
    {
        return view('company.jobDetail');
    }
}
