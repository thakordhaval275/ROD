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

    public function jobpost()
    {
        return view('company.jobPost');
    }
    public function jobpoststore(Request $request)
    {
        //dd($request);
        JobPostModel::create([
            'companyname'=>$request['compnayName'],
            'logo'=>$request['companyLogo'],
            'jobtype'=>$request['jobType'],
            'department'=>$request['department'],
            'term'=>$request['term'],
            'termperiod'=>$request['termPeriod'],
            'experience'=>$request['experiance'],
            'payment'=>$request['payment'],
            'noofpositions'=>$request['noOfPostion'],
            'jobdescription'=>$request['description']
        ]);

        $usertype=Auth::user()->usertype;
        if($usertype==0)
        {
            return redirect(Route('postJobList'));
        }
        else if($usertype==1)
        {
            return redirect(Route('jobDetail'));
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
        return view('company.jobDetail');
    }
}
