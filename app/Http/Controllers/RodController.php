<?php

namespace App\Http\Controllers;

use App\CompanyProfileModel;
use App\EmployeeProfileModel;
use App\RecruiterProfile;
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
            //,['email.required'=>'email field is must.',] //Direct Print Msg For Required Field
        );


        $usersign=User::create([
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
            $usertype=Auth::user()->usertype;

            if($usertype=='1')
            {
                return redirect(route('companyProfile'));
            }
            else if($usertype=='2')
            {
                return redirect(route('recruiterProfile'));
            }
            else if($usertype=='3')
            {
                return redirect(route('employeeProfile'));
            }
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
