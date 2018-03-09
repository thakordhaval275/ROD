<?php

namespace App\Http\Controllers;

use App\CompanyProfileModel;
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

    public function recruiterlist()
    {
        return view('admin.recruiter.recruiterList');
    }

    public function employeelist()
    {
        return view('admin.employee.employeeList');
    }
}
