<?php

namespace App\Http\Controllers;

use App\CompanyProfileModel;
use App\ContactUs;
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

    public function contactuslist()
    {
        $contact=ContactUs::get();
        dd($contact);
        return view('admin.contactusList',['contact'=>$contact]);
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

    public function adminLogout()
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

    public function updatecompany(Request $request)
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

        $company=CompanyProfileModel::find($request->id);
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

        $usertype=Auth::user()->usertype;
        if($usertype==0)
        {
            return redirect(route('postJobList'));
        }
        else if($usertype==1)
        {
            return redirect(route('viewJobs'));
        }
    }

    public function proposallist()
    {
        $proposal=Proposal::get();
        return view('admin.company.proposallist',['proposal'=>$proposal]);
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
    public  function editMyEmp($id)
    {
        //dd($id);
        $myempedit=MyEmployee::where('id',$id)->first();
        return view('admin.recruiter.editMyEmployee',['myempedit'=>$myempedit]);
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
