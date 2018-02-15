<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RodController extends Controller
{
    public function login()
    {
        return view('login');
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

    public function jobpost()
    {
        return view('company.jobPost');
    }
    public function companyprofile()
    {
        return view('company.companyProfile');
    }

    public function signup()
    {
        return view('signup');
    }

    public function recruiterprofile()
    {
        return view('recruiter.recruiterProfile');
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
