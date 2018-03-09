<?php

namespace App\Http\Controllers;

use App\CompanyProfileModel;
use App\EmployeeProfileModel;
use App\RecruiterProfile;
use Illuminate\Http\Request;

class adminController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }


    public function companylist(Request $request)
    {
        $clist=CompanyProfileModel::get();
        return view('admin.company.companyList',['clist'=>$clist]);
    }

    public function recruiterlist(Request $request)
    {
        $rlist=RecruiterProfile::get();
        return view('admin.recruiter.recruiterList',['rlist'=>$rlist]);
    }

    public function employeelist(Request $request)
    {
        $elist=EmployeeProfileModel::get();
        return view('admin.employee.employeeList',['elist'=>$elist]);
    }

    public function viewCompany($id)
    {
        //dd($id);
        $company=CompanyProfileModel::where('id',$id)->first();
        return view('admin.company.viewcompany',['company'=>$company]);
    }
}
