<?php

namespace App\Http\Controllers;

use App\CompanyProfileModel;
use App\JobPostModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class companyController extends Controller
{
    //======== Company Pages ==============

    public function companyProfile()
    {
        $profiledata=CompanyProfileModel::get();
        return view('company.companyProfile',['ProfileData'=>$profiledata]);
    }

    public function companyedit()
    {
        return view('company.companyEdit');
    }

    public function companyprofilestore(Request $request)
    {
        //dd($request);

        $this->validate($request, [
            'companyLogo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('companyLogo');
        $input = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = 'assets/img/company/';
        $image->move($destinationPath, $input);

        CompanyProfileModel::create([
            'logo'=>$input,
            'aboutcompany'=>$request['aboutCompany'],
            'companyname'=>$request['companyName'],
            'location'=>$request['location'],
            'address'=>$request['companyAddress'],
            'emailid'=>$request['email'],
            'website'=>$request['website'],
            'companytype'=>$request['companyType'],
            'foundyear'=>$request['yearOfFound'],
            'noofemployee'=>$request['noOfEmp'],
            'usertype'=>$request['userType']
        ]);

        $usertype=Auth::user()->usertype;
        if($usertype==0)
        {
            return redirect(route('companyList'));
        }
        else if($usertype==1)
        {
            return redirect(Route('companyProfile'));
        }
    }

    public function companyupdate(Request $request)
    {
        //dd($request);

        $this->validate($request, [
            'companyLogo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('companyLogo');
        $input = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = 'assets/img/company/';
        $image->move($destinationPath, $input);

        $company=CompanyProfileModel::find($request->id);
        $company->logo=$input;
        $company->aboutcompany=$request->aboutCompany;
        $company->companyname=$request->companyName;
        $company->location=$request->location;
        $company->address=$request->companyAddress;
        $company->emailid=$request->email;
        $company->website=$request->website;
        $company->companytype=$request->companyType;
        $company->foundyear=$request->yearOfFound;
        $company->noofemployee=$request->noOfEmp;
        $company->usertype=$request->userType;
        $company->save();

        $usertype=Auth::user()->usertype;
        if($usertype==0)
        {
            return redirect(route('companyList'));
        }
        else if($usertype==1)
        {
            return redirect(Route('companyProfile'));
        }
    }

    public function jobpost()
    {
        return view('company.jobPost');
    }
    public function jobpoststore(Request $request)
    {
        //dd($request);

        $this->validate($request, [
            'companylogo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('companylogo');

        $input = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = 'assets/img/company/';
        $image->move($destinationPath, $input);

        JobPostModel::create([
            'companyname'=>$request['compnayName'],
            'logo'=>$input,
            'jobtype'=>$request['jobType'],
            'department'=>$request['department'],
            'term'=>$request['term'],
            'termperiod'=>$request['termPeriod'],
            'experience'=>$request['experiance'],
            'payment'=>$request['payment'],
            'noofpositions'=>$request['noOfPostion'],
            'jobdescription'=>$request['description'],
            'usertype'=>$request['userType']
        ]);

        $usertype=Auth::user()->usertype;
        if($usertype==0)
        {
            return redirect(Route('postJobList'));
        }
        else if($usertype==1)
        {
            //dd($request->id);
            return redirect(Route('jobDetail'));
        }
    }
    
    public function jobpostupdate(Request $request)
    {
        //dd($request);

        $this->validate($request, [
            'companylogo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('companylogo');
        $input = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = 'assets/img/company/';
        $image->move($destinationPath, $input);

        $job=JobPostModel::find($request->id);
        $job->logo=$input;
        $job->companyname=$request->compnayName;
        $job->jobtype=$request->jobType;
        $job->department=$request->department;
        $job->term=$request->term;
        $job->termperiod=$request->termPeriod;
        $job->experience=$request->experience;
        $job->payment=$request->payment;
        $job->noofpositions=$request->noOfPostion;
        $job->jobdescription=$request->description;
        $job->usertype=$request->userType;
        $job->save();

        $usertype=Auth::user()->usertype;
        if($usertype==0)
        {
            return redirect(route('postJobList'));
        }
        else if($usertype==1)
        {
            return redirect(Route('companyProfile'));
        }
    }

    public function viewjobs(Request $request)
    {
        $viewJob=JobPostModel::get();
        //dd($request);
        return view('company.viewPostJobs',['JobPost'=>$viewJob]);
    }
    
    public function jobdetail()
    {
        //$getid=JobPostModel::get();
        //dd($getid);
        return view('company.jobDetail');
    }
}
