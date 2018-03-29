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

    public function companyedit(Request $request)
    {

        $requestid=$request->id;
        $companydetail=CompanyProfileModel::where('id',$request->id)->first();
        return view('company.companyEdit',['companydetail'=>$companydetail]);
    }

    public function companyprofilestore(Request $request)
    {
        //dd($request);

        $this->validate($request, [
            'companyLogo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'companyName'=>'required',
            'aboutCompany'=>'required',
            'location'=>'required',
            'companyAddress'=>'required',
            'email'=>'required',
            'website'=>'required',
            'companyType'=>'required',
            'yearOfFound'=>'required',
            'noOfEmp'=>'required',
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
            'companyName'=>'required',
            'aboutCompany'=>'required',
            'location'=>'required',
            'companyAddress'=>'required',
            'website'=>'required',
            'companyType'=>'required',
            'yearOfFound'=>'required',
            'noOfEmp'=>'required',
        ]);

        if($request->file('companyLogo')!=""){
            $image = $request->file('companyLogo');
            $input = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = 'assets/img/company/';
            $image->move($destinationPath, $input);
        } else {
            $input = $request->hiddenLogo;
        }

        $company=CompanyProfileModel::find($request->company_id);
        $company->logo=$input;
        $company->aboutcompany=$request->aboutCompany;
        $company->companyname=$request->companyName;
        $company->location=$request->location;
        $company->address=$request->companyAddress;
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

    public function jobpostedit(Request $request)
    {

        $jobpostedit=JobPostModel::where('id',$request->id)->first();
        //dd($jobpostedit);
        return view('company.jobPost',['jobpostedit'=>$jobpostedit]);
    }

    public function jobpoststore(Request $request)
    {
       //dd($request);

        $this->validate($request, [
            'companylogo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'compnayName'=>'required',
            'jobType'=>'required',
            'department'=>'required',
            'term'=>'required',
            'termPeriod'=>'required',
            'experiance'=>'required',
            'payment'=>'required',
            'noOfPostion'=>'required',
            'description'=>'required',
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
            return redirect(Route('viewJobs'));
        }
    }
    
    public function jobpostupdate(Request $request)
    {
        //dd($request);

        $this->validate($request, [
            'compnayName'=>'required',
            'jobType'=>'required',
            'department'=>'required',
            'term'=>'required',
            'termPeriod'=>'required',
            'experiance'=>'required',
            'payment'=>'required',
            'noOfPostion'=>'required',
            'description'=>'required',
        ]);

        if($request->file('companylogo')!=""){
            $image = $request->file('companylogo');
            $input = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = 'assets/img/company/';
            $image->move($destinationPath, $input);
        } else {
           $input = $request->hiddenLogo;
        }

        $job=JobPostModel::find($request->id);
        $job->logo=$input;
        $job->companyname=$request->compnayName;
        $job->jobtype=$request->jobType;
        $job->department=$request->department;
        $job->term=$request->term;
        $job->termperiod=$request->termPeriod;
        $job->experience=$request->experiance;
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
            return redirect(Route('viewJobs'));
        }
    }

    public function viewjobs(Request $request)
    {
        $viewJob=JobPostModel::orderByDesc('id')->get();
        return view('company.viewPostJobs',['JobPost'=>$viewJob]);
    }
    
    public function jobdetail($id)
    {
        $jobdetail=JobPostModel::find($id);
        return view('company.jobDetail',['jobdetail'=>$jobdetail]);
    }
}
