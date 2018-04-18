<?php

namespace App\Http\Controllers;

use App\CompanyProfileModel;
use App\Contact;
use App\ContactUs;
use App\EmployeeProfileModel;
use App\Jobs\SendEmailResetPassword;
use App\RecruiterProfile;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;

class RodController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function forgotpwd()
    {
        return view('resetpwd');
    }

    public function resetlink(Request $request)
    {
        $email=$request->email;

        $this->dispatch(new SendEmailResetPassword($email));

        return(redirect(route('login')));
    }

    public function changepassword($email)
    {
        return view('changepassword',['useremail'=> decrypt($email)]);
    }

    public function updatepassword(Request $request)
    {
        $this->validate($request,[
            'password'=>'required|confirmed',
            'password_confirmation'=>'required',
        ]);

        $resetpwd=User::where('email',$request->useremail)->first();
        $resetpwd->password=bcrypt($request->password);
        $resetpwd->save();


        return(redirect(route('login')))->with('success_message','Password has been updated Successfully!!');
    }

    public function signup()
    {
        return view('signup');
    }

    public function index()
    {
        $count=\App\JobPostModel::count();
        $recruiter=\App\RecruiterProfile::count();
        $company=\App\CompanyProfileModel::count();
        $employee=\App\EmployeeProfileModel::count();

        $topcmp=\App\CompanyProfileModel::get();
        return view('index',['count'=>$count,'recruiter'=>$recruiter,'company'=>$company,'employee'=>$employee,'topcmp'=>$topcmp]);
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
        $this->validate($request,[
                'firstName'=>'required',
                'lastName'=>'required',
                'emailid'=>'required',
                'relationship'=>'required',
                'companyName'=>'required',
                'other'=>'required',
                'country'=>'required',
                'contactNo'=>'required',
                'howCanIHelp'=>'required',
            ]);

        //dd($request);
        Contact::create([
            'firstname'=>$request->firstName,
            'lastname'=>$request->lastName,
            'emailid'=>$request->emailid,
            'relationtorod'=>$request->relationship,
            'company'=>$request->companyName,
            'other'=>$request->other,
            'country'=>$request->country,
            'contactno'=>$request->contactNo,
            'howcanwehelp'=>$request->howCanIHelp
        ]);

        return redirect(route('index'));
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

        if($request->userType == 1)
        {
            CompanyProfileModel::create([
               'emailid'=>$request->email,
            ]);

            $result=Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
            if($result) {
                return redirect(route('companyProfile'));
            }
            else{
                return redirect(route('login'));
            }
        }
        else if($request->userType==2)
        {
            RecruiterProfile::create([
                'emailid'=>$request->email,
            ]);

            $result=Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
            if($result) {
                return redirect(route('recruiterProfile'));
            }
            else{
                return redirect(route('login'));
            }
        }
        else if($request->userType==3)
        {
            EmployeeProfileModel::create([
                'emailid'=>$request->email,
            ]);

            $result=Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
            if($result) {
                return redirect(route('employeeProfile'));
            }
            else{
                return redirect(route('login'));
            }
        }
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
