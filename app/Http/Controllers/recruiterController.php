<?php

namespace App\Http\Controllers;

use App\EmployeeProfileModel;
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
        $myemp=EmployeeProfileModel::get();
        return view('recruiter.addmyEmployee',['myemp'=>$myemp]);
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

        if($request->file('profilePhoto')!=""){
            $image = $request->file('profilePhoto');
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

    public function myempupdate(Request $request)
    {
        $this->validate($request, [
            'aboutMe'=>'required',
            'firstName'=>'required',
            'lastName'=>'required',
            'address'=>'required',
            'pincode'=>'required',
            'gender'=>'required',
            'birthdate'=>'required',
            'contectNo'=>'required',
            'email'=>'required',
            'city'=>'required',
            'state'=>'required',
            'country'=>'required',
            'homeTown'=>'required',
            'meritalStatus'=>'required',
            'homeTown'=>'required',
            'postGraduate'=>'required',
            'graduate'=>'required',
            'classXII'=>'required',
            'classX'=>'required',
            'otherquli'=>'required',
            'industry'=>'required',
            'preferredLocation'=>'required',
            'experianceYear'=>'required',
            'experianceMonth'=>'required',
            'keySkill'=>'required',
        ]);

        if($request->file('companyLogo')!=""){
            $image = $request->file('companyLogo');
            $input = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = 'assets/img/recruiter/';
            $image->move($destinationPath, $input);
        } else {
            $input = $request->hiddenLogo;
        }

        $employe=MyEmployee::find($request->id);
        $employe->logo=$input;
        $employe->aboutself=$request->aboutMe;
        $employe->firstname=$request->firstName;
        $employe->lastname=$request->lastName;
        $employe->address=$request->address;
        $employe->pincode=$request->pincode;
        $employe->gender=$request->gender;
        $employe->bdate=$request->birthdate;
        $employe->contectno=$request->contectNo;
        $employe->emailid=$request->email;
        $employe->city=$request->city;
        $employe->state=$request->state;
        $employe->country=$request->country;
        $employe->hometown=$request->homeTown;
        $employe->maritalstatus=$request->meritalStatus;
        $employe->postgraduate=$request->postGraduate;
        $employe->graduate=$request->graduate;
        $employe->classxii=$request->classXII;
        $employe->classx=$request->classX;
        $employe->otherque=$request->otherquli;
        $employe->industry=$request->industry;
        $employe->preferredlocation=$request->preferredLocation;
        $employe->expirienceyear=$request->experianceYear;
        $employe->expiriencemonth=$request->experianceMonth;
        $employe->keyskill=$request->keySkill;
        $employe->usertype=$request->userType;
        $employe->save();

        $usertype=Auth::user()->usertype;

        if($usertype==0)
        {
            return redirect(route('myEmployeeList'));
        }
        else if($usertype==3)
        {
            //dd($usertype);
            return redirect(route('myEmployee'));
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
