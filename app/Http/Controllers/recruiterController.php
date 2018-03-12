<?php

namespace App\Http\Controllers;

use App\RecruiterProfile;
use Illuminate\Http\Request;

class recruiterController extends Controller
{
    public function recruiterProfile()
    {
        $Reprofile=RecruiterProfile::get();
        return view('recruiter.recruiterProfile',['ReProfile'=>$Reprofile]);
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
    public function recruiterprofilestore(Request $request)
    {
        //dd($request);
        RecruiterProfile::create([
            'profilephoto'=>$request['profilePhoto'],
            'aboutself'=>$request['aboutMe'],
            'firstname'=>$request['firstName'],
            'lastname'=>$request['lastName'],
            'gender'=>$request['gender'],
            'emailid'=>$request['emailid'],
            'password'=>$request['password'],
            'contactno'=>$request['contactNo'],
            'address'=>$request['address'],
            'city'=>$request['city'],
            'state'=>$request['state'],
            'country'=>$request['country'],
            'otheremailid'=>$request['alterEmailid'],
            'gstregister'=>$request['gst'],
            'rcompanyname'=>$request['companyName'],
            'rcompanytype'=>$request['companyType'],
            'rindustrytype'=>$request['industryType'],
            'companyaddress'=>$request['companyAddress'],
            'rname'=>$request['referenceName'],
            'rdesignation'=>$request['designation']
        ]);
    }
}
