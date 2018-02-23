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
}
