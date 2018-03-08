<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }


    public function companylist()
    {
        return view('admin.company.companyList');
    }

    public function recruiterlist()
    {
        return view('admin.recruiter.recruiterList');
    }

    public function employeelist()
    {
        return view('admin.employee.employeeList');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
