<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function userSignup(Request $request)
    {
        //dd($request);
        $this->validate($request,[
           'userName'=>'required',
           'email'=>'required',
           'password'=>'required|confirmed',
           'password_confirmation'=>'required',
           'userType'=>'required',
           'securityQue'=>'required',
           'securityAns'=>'required',
        ]
//            ,[
//            'email.required'=>'email field is must.',
//        ]
        );

        User::create([
            'name'=>$request->userName,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'usertype'=>$request->userType,
            'securityque'=>$request->securityQue,
                'securityans'=>$request->securityAns,
        ]);

        return redirect(route('login'));
    }

    public function userLogin(Request $request)
    {
       //dd($request);
        $this->validate($request,[
             'email'=>'required',
            'password'=>'required',

        ]);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            //dd(Auth::user());
            dd('Login Successfulluy.');
        }else
        {
            dd('Email and Password invalid.');
        }

    }

    public function userLogout()
    {
        Auth::logout();
        return redirect(route('login'));

    }
}
