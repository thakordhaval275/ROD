<?php

namespace App\Http\Controllers;

use App\CompanyProfileModel;
use App\EmployeeProfileModel;
use App\RecruiterProfile;
use App\jobPostModel;
use Illuminate\Http\Request;

class adminController extends Controller
{
	public function index()
    {
        return view('admin.index');
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

	public function viewCompany($id)
    {
        //dd($id);
        $company=CompanyProfileModel::where('id',$id)->first();
        return view('admin.company.viewcompany',['company'=>$company]);
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
	
	public function viewRecruiter()
    {
        return view('admin.recruiter.viewRecruiter');
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
}
