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
    public function contactstore(Request $request)
    {
        dd($request);
    }
}
