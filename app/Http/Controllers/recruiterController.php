<?php

namespace App\Http\Controllers;

use App\EmployeeProfileModel;
use App\JobPostModel;
use App\Jobs\SendAddEmployeeEmail;
use App\Jobs\SendPraposalAcceptEmail;
use App\Jobs\SendPraposalRejectEmail;
use App\MyEmployee;
use App\Proposal;
use App\RecruiterProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class recruiterController extends Controller
{
    public function recruiterProfile()
    {
        $email=Auth::user()->email;

        $Reprofile=RecruiterProfile::where('emailid',$email)->get();
        return view('recruiter.recruiterProfile',['ReProfile'=>$Reprofile]);
    }
    public function recruiteredit(Request $request)
    {
        $requestid=$request->id;
        $recruiterdetail=RecruiterProfile::where('id',$request->id)->first();
        return view('recruiter.recruiterEdit',['recruiterdetail'=>$recruiterdetail]);
    }
    public function addmyemployee()
    {
        $myemp=EmployeeProfileModel::get();

        $categories=JobPostModel::distinct()->select('department')->get();
        //dd($categories);
        return view('recruiter.addmyEmployee',['myemp'=>$myemp,'categories'=>$categories]);
    }
    public function myemployee()
    {
        $useremail=Auth::user()->email;

        $categories=JobPostModel::distinct()->select('department')->get();
        //dd($categories);
        $myemp=MyEmployee::where('useremail',$useremail)->get();
        return view('recruiter.myEmployee',['myemp'=>$myemp,'categories'=>$categories]);
    }
    public  function joblist()
    {
        return view('recruiter.jobList');
    }
    public function proposal(Request $request)
    {
        $proposal=JobPostModel::where('id',$request->id)->get();
        return view('recruiter.proposal',['proposal'=>$proposal]);
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
            return redirect(Route('recruiterList'))->with('added_message','Recruiter has been added Successfully!!');
        }
    }

    public function recruiterupdate(Request $request)
    {

        $this->validate($request, [
            'firstName'=>'required',
            'lastName'=>'required',
            'gender'=>'required',
            'contactNo'=>'required',
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'country'=>'required',
            'gst'=>'required'
        ]);

        if($request->file('profilePhoto')!=""){
            $image = $request->file('profilePhoto');
            $input = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = 'assets/img/recruiter/';
            $image->move($destinationPath, $input);
        } else {
            $input = $request->hiddenPhoto;
        }

        if(Auth::user()->usertype==0) {
            $company=RecruiterProfile::find($request->id);
        }
        else{
            $company=RecruiterProfile::find($request->recruiter_id);
        }
        $company->profilephoto=$input;
        $company->aboutself=$request->aboutMe;
        $company->firstname=$request->firstName;
        $company->lastname=$request->lastName;
        $company->gender=$request->gender;
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
            return redirect(route('recruiterList'))->with('update_message','Your Record has been updated Successfully!!');
        }
        else if($usertype==2)
        {
            return redirect(Route('recruiterProfile'))->with('update_message','Your Record has been updated Successfully!!');
        }
    }

    public function myempstore(Request $request)
    {

        $usertype=Auth::user()->usertype;


        if($usertype==0)
        {
            $useremail=Auth::user()->email;

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
                'usertype'=>$request['userType'],
                'useremail'=>$useremail
            ]);

            return redirect(Route('myEmployeeList'));
        }
        else if($usertype==2)
        {
            $usertype=Auth::user()->usertype;
            $useremail=Auth::user()->email;

            $myemp=EmployeeProfileModel::find($request->id);

            MyEmployee::create([
                'logo'=>$myemp['logo'],
                'aboutself'=>$myemp['aboutself'],
                'firstname'=>$myemp['firstname'],
                'lastname'=>$myemp['lastname'],
                'address'=>$myemp['address'],
                'pincode'=>$myemp['pincode'],
                'gender'=>$myemp['gender'],
                'bdate'=>$myemp['bdate'],
                'contectno'=>$myemp['contectno'],
                'emailid'=>$myemp['emailid'],
                'city'=>$myemp['city'],
                'state'=>$myemp['state'],
                'country'=>$myemp['country'],
                'hometown'=>$myemp['hometown'],
                'maritalstatus'=>$myemp['maritalstatus'],
                'postgraduate'=>$myemp['postgraduate'],
                'graduate'=>$myemp['graduate'],
                'classxii'=>$myemp['classxii'],
                'classx'=>$myemp['classx'],
                'otherque'=>$myemp['otherque'],
                'industry'=>$myemp['industry'],
                'preferredlocation'=>$myemp['preferredlocation'],
                'expirienceyear'=>$myemp['expirienceyear'],
                'expiriencemonth'=>$myemp['expiriencemonth'],
                'keyskill'=>$myemp['keyskill'],
                'resume'=>$myemp['resume'],
                'usertype'=>$usertype,
                'useremail'=>$useremail
            ]);

            $myempmail=EmployeeProfileModel::find($myemp->id);
            $this->dispatch(new SendAddEmployeeEmail($myempmail->emailid,$useremail));

            return redirect(Route('myEmployee'))->with('success_message','This Employee has been added in your list Successfully!!');
        }
    }

    public function myempupdate(Request $request)
    {
        //dd($request);

        $this->validate($request, [
            'aboutMe'=>'required',
            'firstName'=>'required',
            'lastName'=>'required',
            'address'=>'required',
            'pincode'=>'required',
            'gender'=>'required',
            'birthdate'=>'required',
            'contectNo'=>'required',
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
        else if($usertype==2)
        {
            //dd($usertype);
            return redirect(route('myEmployee'));
        }
    }

    public function myproposal()
    {
        if(Auth::user()->usertype==1)
        {
            $useremail=Auth::user()->email;

            $recruiter=Proposal::where('companyemail',$useremail)->get();
            return view('recruiter.proposalList',['recruiter'=>$recruiter]);
        }
        elseif(Auth::user()->usertype==2)
        {
            $useremail=Auth::user()->email;

            $recruiter=Proposal::where('emailid',$useremail)->get();
            return view('recruiter.proposalList',['recruiter'=>$recruiter]);
        }
    }

    public function proposalstore(Request $request)
    {
        $this->validate($request, [
            'companyName'=>'required',
            'companyEmail'=>'required',
            'emailid'=>'required',
            'noOfEmp'=>'required',
            'equlification'=>'required',
            'keySkill'=>'required',
            'otherdetail'=>'required',
        ]);

        Proposal::create([
            'companyname'=>$request['companyName'],
            'companyemail'=>$request['companyEmail'],
            'noofemployee'=>$request['noOfEmp'],
            'emailid'=>$request['emailid'],
            'employeequalification'=>$request['equlification'],
            'keyskill'=>$request['keySkill'],
            'otherdetail'=>$request['otherdetail'],

        ]);

        return redirect(route('myProposal'))->with('success_message','Your Proposal has been sent Successfully!!');
    }


    public function acceptProposal(Request $request)
    {

        $proposal=Proposal::find($request->id);
        $rdata=RecruiterProfile::where('emailid',$proposal->emailid)->get();
        $proposal->status=Proposal::Accepted;
        $proposal->save();

        $this->dispatch(new SendPraposalAcceptEmail($proposal->emailid,$proposal->companyemail));

        return redirect(route('myProposal'))->with('accept_message','Email has been sent Successfully!!');
    }

    public function rejectProposal(Request $request)
    {

        $proposal=Proposal::find($request->id);

        $proposal->status=Proposal::Rejected;
        $proposal->save();

        $this->dispatch(new SendPraposalRejectEmail($proposal->emailid,$proposal->companyemail));

        return redirect(route('myProposal'))->with('reject_message','Rejection Email has been sent Successfully!!');
    }

}
