<?php

namespace App\Http\Controllers;

use App\MyEmployee;
use App\RecruiterProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class recruiterController extends Controller
{
    public function recruiterProfile()
    {
        $Reprofile=RecruiterProfile::get();
        return view('recruiter.recruiterProfile',['ReProfile'=>$Reprofile]);
    }
    public function recruiteredit(Request $request)
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
            'rdesignation'=>$request['designation'],
            'usertype'=>$request['userType']
        ]);

        $usertype=Auth::user()->usertype;
        if($usertype==0)
        {
            return redirect(Route('recruiterList'));
        }
        else if($usertype==2)
        {
            return redirect(Route('recruiterProfile'));
        }

    }

    public function myempstore(Request $request)
    {
        //dd($request);
        MyEmployee::create([
            'logo'=>$request['empProfile'],
            'aboutself'=>$request['aboutMe'],
            'firstname'=>$request['firstName'],
            'lastname'=>$request['lastName'],
            'address'=>$request['address'],
            'pincode'=>$request['pincode'],
            'gender'=>$request['gender'],
            'bdate'=>$request['birthdate'],
            'contectno'=>$request['contectNo'],
            'emailid'=>$request['emailid'],
            'city'=>$request['city'],
            'state'=>$request['state'],
            'country'=>$request['country'],
            'hometown'=>$request['homeTown'],
            'maritalstatus'=>$request['meritalStatus'],
            'postgraduate'=>$request['postGraduate'],
            'graduate'=>$request['graduate'],
            'classxii'=>$request['classXII'],
            'classx'=>$request['classX'],
            'otherque'=>$request['otherquli'],
            'industry'=>$request['industry'],
            'preferredlocation'=>$request['preferredLocation'],
            'expirienceyear'=>$request['experianceYear'],
            'expiriencemonth'=>$request['experianceMonth'],
            'keyskill'=>$request['keySkill'],
            'usertype'=>$request['userType']
        ]);
        $usertype=Auth::user()->usertype;
        if($usertype==0)
        {
            return redirect(Route('myEmployeeList'));
        }
        else if($usertype==2)
        {
            return redirect(Route('myEmployee'));
        }
    }
}
