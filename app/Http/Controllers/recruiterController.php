<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class recruiterController extends Controller
{
    public function recruiterProfile()
    {
        return view('recruiter.recruiterProfile');
    }
    public function recruiteredit()
    {
        return view('recruiter.recruiterEdit');
    }
    public function addmyemployee()
    {
        return view('recruiter.addmyEmployee');
    }
    public function myemployee()
    {
        return view('recruiter.myEmployee');
    }
    public  function joblist()
    {
        return view('recruiter.jobList');
    }
    public function proposal()
    {
        return view('recruiter.proposal');
    }
}
