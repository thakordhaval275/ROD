<?php

namespace App\Http\Controllers;

use App\CompanyProfileModel;
use App\EmployeeProfileModel;
use App\MyEmployee;
use App\Proposal;
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

    public function editcompany($id)
    {
        //dd($id);
        $company=CompanyProfileModel::where('id',$id)->first();
        return view('admin.company.editCompanyPro',['company'=>$company]);
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

    public function editpostjob($id)
    {
        //dd($id);
        $job=jobPostModel::where('id',$id)->first();
        return view('admin.company.editPostJob',['job'=>$job]);
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

    public function editRecruiter($id)
    {
        $recruiter=RecruiterProfile::where('id',$id)->first();
        return view('admin.recruiter.editRecruiterPro',['recruiter'=>$recruiter]);
    }
	
	public function viewRecruiter($id)
    {
        $recruiter=RecruiterProfile::where('id',$id)->first();
        return view('admin.recruiter.viewRecruiter',['recruiter'=>$recruiter]);
    }

    public function destroyrecruiter($id)
    {
        $recruiter = RecruiterProfile::find($id);
        $recruiter->delete();

        return redirect(route('recruiterList'));
    }

    public function myEmployeeList()
    {
        $myemplist=MyEmployee::get();
        return view('admin.recruiter.myemplist',['myemplist'=>$myemplist]);
    }

    public function addMyEmp()
    {
        return view('admin.recruiter.addmyemp');
    }

    public  function viewMyEmp($id)
    {
        //dd($id);
        $myemp=MyEmployee::where('id',$id)->first();
        return view('admin.recruiter.viewMyEmployee',['myemp'=>$myemp]);
    }

    public function sendProposalList()
    {
        $proposal=Proposal::get();
        return view('admin.recruiter.sendProposalList',['Proposal'=>$proposal]);
    }

    public function destroymyemp($id)
    {
        $myemployee = MyEmployee::find($id);
        $myemployee->delete();

        return redirect(route('myEmployeeList'));
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

    public function editemployee($id)
    {
        //dd($id);
        $employee=EmployeeProfileModel::where('id',$id)->first();
        return view('admin.employee.editemployee',['employee'=>$employee]);
    }

    public function viewEmployee($id)
    {
        //dd($id);
        $employee=EmployeeProfileModel::where('id',$id)->first();
        return view('admin.employee.viewEmployee',['employee'=>$employee]);
    }

    public function destroyemployee($id)
    {
        $recruiter=EmployeeProfileModel::find($id);
        $recruiter->delete();

        return redirect(route('employeeList'));
    }

}
