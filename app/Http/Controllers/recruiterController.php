<?php

namespace App\Http\Controllers;

use App\MyEmployee;
use App\Proposal;
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

        $this->validate($request, [

            'profilePhoto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'aboutMe'=>'required',
            'firstName'=>'required',
            'lastName'=>'required',
            'gender'=>'required',
            'emailid'=>'required',
            'contactNo'=>'required',
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'country'=>'required',
            'alterEmailid'=>'required',
            'gst'=>'required',
            'companyName'=>'required',
            'companyType'=>'required',
            'industryType'=>'required',
            'companyAddress'=>'required',
            'referenceName'=>'required',
            'designation'=>'required',
        ]);

        $image = $request->file('profilePhoto');
        $input = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = 'assets/img/recruiter/';
        $image->move($destinationPath, $input);

        RecruiterProfile::create([
            'profilephoto'=>$input,
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

    public function recruiterupdate(Request $request)
    {
        //dd($request);
        $this->validate($request, [
            'aboutMe'=>'required',
            'firstName'=>'required',
            'lastName'=>'required',
            'gender'=>'required',
            'emailid'=>'required',
            'contactNo'=>'required',
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'country'=>'required',
            'alterEmailid'=>'required',
            'gst'=>'required',
            'companyName'=>'required',
            'companyType'=>'required',
            'industryType'=>'required',
            'companyAddress'=>'required',
            'referenceName'=>'required',
            'designation'=>'required',
        ]);

        if($request->file('companyLogo')!=""){
            $image = $request->file('companyLogo');
            $input = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = 'assets/img/recruiter/';
            $image->move($destinationPath, $input);
        } else {
            $input = $request->hiddenPhoto;
        }

        $company=RecruiterProfile::find($request->id);
        $company->profilephoto=$input;
        $company->aboutself=$request->aboutMe;
        $company->firstname=$request->firstName;
        $company->lastname=$request->lastName;
        $company->gender=$request->gender;
        $company->emailid=$request->emailid;
        $company->contactno=$request->contactNo;
        $company->address=$request->address;
        $company->city=$request->city;
        $company->state=$request->state;
        $company->country=$request->country;
        $company->otheremailid=$request->alterEmailid;
        $company->gstregister=$request->gst;
        $company->rcompanyname=$request->companyName;
        $company->rcompanytype=$request->companyType;
        $company->rindustrytype=$request->industryType;
        $company->companyaddress=$request->companyAddress;
        $company->rname=$request->referenceName;
        $company->rdesignation=$request->designation;
        $company->usertype=$request->userType;
        $company->save();

        $usertype=Auth::user()->usertype;
        if($usertype==0)
        {
            return redirect(route('recruiterList'));
        }
        else if($usertype==2)
        {
            return redirect(Route('companyProfile'));
        }
    }

    public function myempstore(Request $request)
    {
        //dd($request);
        $this->validate($request, [

            'empProfile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $image = $request->file('empProfile');
        $input = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = 'assets/img/recruiter/';
        $image->move($destinationPath, $input);

        MyEmployee::create([
            'logo'=>$input,
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

    public function proposalstore(Request $request)
    {
        //dd($request);
        Proposal::create([
            'companyname'=>$request['companyName'],
            'noofemployee'=>$request['noOfEmp'],
            'emailid'=>$request['emailid'],
            'employeequalification'=>$request['equlification'],
            'keyskill'=>$request['keySkill']
        ]);

        return redirect(route('recruiterProfile'));
    }
}
