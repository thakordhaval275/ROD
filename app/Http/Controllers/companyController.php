<?php

namespace App\Http\Controllers;

use App\JobPostModel;
use Illuminate\Http\Request;

class companyController extends Controller
{
    //======== Company Pages ==============

    public function companyProfile()
    {
        return view('company.companyProfile');
    }

    public function companyedit()
    {
        return view('company.companyEdit');
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
            'termperiod0'=>$request['termPeriod'],
            'experience'=>$request['experiance'],
            'payment'=>$request['payment'],
            'noofpositions'=>$request['noOfPostion'],
            'jobdescription'=>$request['description']
        ]);

        return redirect(Route('jobDetail'));
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
