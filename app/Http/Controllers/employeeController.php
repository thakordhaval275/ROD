<?php

namespace App\Http\Controllers;

use App\EmployeeProfileModel;
use App\MyEmployee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Exception;

class employeeController extends Controller
{
    public function employeeprofile(Request $request)
    {
        $usertype=Auth::user()->usertype;
        $emali=Auth::user()->email;

        if($usertype==3)
        {
            $viewProfile=EmployeeProfileModel::where('emailid',$emali)->get();
            return view('employee.employeeProfile',['viewprofile'=>$viewProfile]);
        }
        else if($usertype==2)
        {
           if($request->usertype==2)
           {
               $viewProfile=MyEmployee::where('id',$request->id)->get();
               return view('employee.employeeProfile',['viewprofile'=>$viewProfile]);
           }
           else
           {
                $viewProfile=EmployeeProfileModel::where('id',$request->id)->get();
                return view('employee.employeeProfile',['viewprofile'=>$viewProfile]);
           }
        }
    }

    public function employeeedit(Request $request)
    {
            $usertype=Auth::user()->usertype;
            if($usertype==2)
            {
                return view('employee.employeeEdit');
            }
            else
            {
                $editemp=EmployeeProfileModel::where('id',$request->id)->get();
                return view('employee.employeeEdit',['editemp'=>$editemp]);
            }

    }

    public function employeeprofilestore(Request $request)
    {
        //dd($request);

        $this->validate($request, [
            'empProfile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'aboutMe'=>'required',
            'firstName'=>'required',
            'lastName'=>'required',
            'address'=>'required',
            'pincode'=>'required',
            'gender'=>'required',
            'birthdate'=>'required',
            'contectNo'=>'required',
            'email'=>'required',
            'city'=>'required',
            'state'=>'required',
            'country'=>'required',
            'homeTown'=>'required',
            'meritalStatus'=>'required',
            'homeTown'=>'required',
            'postGraduate'=>'required',
            'graduate'=>'required',
            'classXII'=>'required',
            'classX'=>'required',
            'otherquli'=>'required',
            'industry'=>'required',
            'preferredLocation'=>'required',
            'experianceYear'=>'required',
            'experianceMonth'=>'required',
            'keySkill'=>'required',

        ]);

        $image = $request->file('empProfile');
        $input = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = 'assets/img/employee/';
        $image->move($destinationPath, $input);

        EmployeeProfileModel::create([
            'logo'=>$input,
            'aboutself'=>$request['aboutMe'],
            'firstname'=>$request['firstName'],
            'lastname'=>$request['lastName'],
            'address'=>$request['address'],
            'pincode'=>$request['pincode'],
            'gender'=>$request['gender'],
            'bdate'=>$request['birthdate'],
            'contectno'=>$request['contectNo'],
            'emailid'=>$request['email'],
            'city'=>$request['city'],
            'state'=>$request['state'],
            'country'=>$request['country'],
            'hometown'=>$request['homeTown'],
            'maritalstatus'=>$request['meritalStatus'],
            'postgraduate'=>$request['postGraduate'],
            'graduate'=>$request['graduate'],
            'classxii'=>$request['classXII'],
            'classx'=>$request['classX'],
            'otherque'=>$request['otherquli'],
            'industry'=>$request['industry'],
            'preferredlocation'=>$request['preferredLocation'],
            'expirienceyear'=>$request['experianceYear'],
            'expiriencemonth'=>$request['experianceMonth'],
            'keyskill'=>$request['keySkill'],
            'usertype'=>$request['userType']
        ]);

        $usertype=Auth::user()->usertype;

        if($usertype==0)
        {
            return redirect(route('employeeList'));
        }
        else if($usertype==3)
        {
            //dd($usertype);
            return redirect(route('employeeProfile'));
        }
    }

    public function employeeupdate(Request $request)
    {
        //dd($request);

        $this->validate($request, [
            'aboutMe'=>'required',
            'firstName'=>'required',
            'lastName'=>'required',
            'address'=>'required',
            'pincode'=>'required',
            'gender'=>'required',
            'birthdate'=>'required',
            'contectNo'=>'required',
            'city'=>'required',
            'state'=>'required',
            'country'=>'required',
            'homeTown'=>'required',
            'meritalStatus'=>'required',
            'homeTown'=>'required',
            'postGraduate'=>'required',
            'graduate'=>'required',
            'classXII'=>'required',
            'classX'=>'required',
            'otherquli'=>'required',
            'industry'=>'required',
            'preferredLocation'=>'required',
            'experianceYear'=>'required',
            'keySkill'=>'required',
        ]);

        if($request->file('empProfile')!=""){
            $image = $request->file('empProfile');
            $input = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = 'assets/img/employee/';
            $image->move($destinationPath, $input);
        } else {
            $input = $request->hiddenLogo;
        }

        $employe=EmployeeProfileModel::find($request->id);
        $employe->logo=$input;
        $employe->aboutself=$request->aboutMe;
        $employe->firstname=$request->firstName;
        $employe->lastname=$request->lastName;
        $employe->address=$request->address;
        $employe->pincode=$request->pincode;
        $employe->gender=$request->gender;
        $employe->bdate=$request->birthdate;
        $employe->contectno=$request->contectNo;
        $employe->city=$request->city;
        $employe->state=$request->state;
        $employe->country=$request->country;
        $employe->hometown=$request->homeTown;
        $employe->maritalstatus=$request->meritalStatus;
        $employe->postgraduate=$request->postGraduate;
        $employe->graduate=$request->graduate;
        $employe->classxii=$request->classXII;
        $employe->classx=$request->classX;
        $employe->otherque=$request->otherquli;
        $employe->industry=$request->industry;
        $employe->preferredlocation=$request->preferredLocation;
        $employe->expirienceyear=$request->experianceYear;
        $employe->expiriencemonth=$request->experianceMonth;
        $employe->keyskill=$request->keySkill;
        $employe->usertype=$request->userType;
        $employe->save();

        $usertype=Auth::user()->usertype;

        if($usertype==0)
        {
            return redirect(route('employeeList'));
        }
        else if($usertype==3)
        {
            //dd($usertype);
            return redirect(route('employeeProfile'));
        }
    }
}
