<?php

namespace App\Http\Controllers;

use App\CompanyProfileModel;
use App\EmployeeProfileModel;
use App\MyEmployee;
use App\RecruiterProfile;
use App\jobPostModel;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class adminController extends Controller
{
	public function index()
    {
        return view('admin.index');
    }

	public function admin(Request $request)
    {
        return view('admin.adminlogin');
    }

    public function adminLogin(Request $request)
    {

        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            $usertype=Auth::user()->usertype;

            if($usertype==0)
            {
                return redirect(route('adminindex'));
            }
            else{
                dd("not found");
            }
        }else
        {
            dd('invalid id pwd');
        }
    }

    public function userLogout()
    {
        Auth::logout();
        return redirect(route('admin'));
    }

	//========== Company ===============
	public function companylist(Request $request)
    {
        $clist=CompanyProfileModel::get();
        return view('admin.company.companyList',['clist'=>$clist]);
    }

    public function addcompany()
    {
        return view('admin.company.addCompany');
    }

	public function viewcompany($id)
    {
        //dd($id);
        $company=CompanyProfileModel::where('id',$id)->first();
        return view('admin.company.viewcompany',['company'=>$company]);
    }

    public function destroycompany($id)
    {
        $company=CompanyProfileModel::find($id);
        $company->delete();

        return redirect(route('companyList'));
    }

	public function jobpostlist()
    {
        $joblist=jobPostModel::get();
        return view('admin.company.jobPostList',['joblist'=>$joblist]);
    }

    public function addjob()
    {
        return view('admin.company.addjob');
    }

    public function viewjob($id)
    {
        //dd($id);
        $job=jobPostModel::where('id',$id)->first();
        return view('admin.company.viewjob',['job'=>$job]);
    }

    public function destroyjob($id)
    {
        $job=JobPostModel::find($id);
        $job->delete();

        return redirect(route('postJobList'));
    }
	
	//============ Recruiter =============
	
	public function recruiterlist(Request $request)
    {
        $rlist=RecruiterProfile::get();
        return view('admin.recruiter.recruiterList',['rlist'=>$rlist]);
    }
	
	public function addrecruiter()
    {
        return view('admin.recruiter.addRecruiter');
    }
	
	public function viewRecruiter($id)
    {
        $recruiter=RecruiterProfile::where('id',$id)->first();
        return view('admin.recruiter.viewRecruiter',['recruiter'=>$recruiter]);
    }

<<<<<<< HEAD
    public function destroyrecruiter($id)
    {
        $recruiter=RecruiterProfile::find($id);
        $recruiter->delete();

        return redirect(route('recruiterList'));
=======
    public function myEmployeeList()
    {
        $myemplist=MyEmployee::get();
        return view('admin.recruiter.myemplist',['myemplist'=>$myemplist]);
    }
    public function addMyEmp()
    {
        return view('admin.recruiter.addmyemp');
>>>>>>> 16cac4067733a2a7e3d7e42c3b4b8a150640e04e
    }
	
	//============= Employee ===============

    public function employeelist(Request $request)
    {
        $elist=EmployeeProfileModel::get();
        return view('admin.employee.employeeList',['elist'=>$elist]);
    }

	public function addemployee()
    {
        return view('admin.employee.addEmployee');
    }
    public function destroyemployee($id)
    {
        $recruiter=EmployeeProfileModel::find($id);
        $recruiter->delete();

        return redirect(route('employeeList'));
    }

}
