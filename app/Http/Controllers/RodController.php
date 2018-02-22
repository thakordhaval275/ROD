<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RodController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function signup()
    {
        return view('signup');
    }

    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    //======== Company Pages ==============

    public function companyProfile()
    {
        return view('company.companyProfile');
    }

    public function jobpost()
    {
        return view('company.jobPost');
    }

    //======== Recruiter Pages ===============

    public function recruiterProfile()
    {
        return view('recruiter.recruiterProfile');
    }

    //======== Recruiter Pages ===============

    public function employeeprofile()
    {
        return view('employee.employeeprofile');
    }
}
