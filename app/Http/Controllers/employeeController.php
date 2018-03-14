<?php

namespace App\Http\Controllers;

use App\EmployeeProfileModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class employeeController extends Controller
{
    public function employeeprofile()
    {
        $viewProfile=EmployeeProfileModel::get();
        return view('employee.employeeProfile',['ViewProfile'=>$viewProfile]);
    }

    public function employeeedit()
    {
        return view('employee.employeeEdit');
    }

    public function employeeprofilestore(Request $request)
    {
        //dd($request);
        EmployeeProfileModel::create([
            'logo'=>$request['empProfile'],
            'aboutself'=>$request['aboutMe'],
            'firstname'=>$request['firstName'],
            'lastname'=>$request['lastName'],
            'address'=>$request['address'],
            'pincode'=>$request['pincode'],
            'gender'=>$request['gender'],
            'bdate'=>$request['birthdate'],
            'contectno'=>$request['contectNo'],
            'emailid'=>$request['email'],
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
            return redirect(route('employeeList'));
        }
        else if($usertype==3)
        {
            return redirect(route('employeeProfile'));
        }
    }
}
