<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $count=\App\JobPostModel::count();
    $recruiter=\App\RecruiterProfile::count();
    $company=\App\CompanyProfileModel::count();
    $employee=\App\EmployeeProfileModel::count();

    $topcmp=\App\CompanyProfileModel::get();
    return view('index',['count'=>$count,'recruiter'=>$recruiter,'company'=>$company,'employee'=>$employee,'topcmp'=>$topcmp]);
});

//============================================================= Frontend ======================================================================
//Home Pages
Route::get('/index','RodController@index')->name('index'); //index
Route::get('/about','RodController@about')->name('about'); //about
Route::get('/contact','RodController@contact')->name('contactus'); //contact
Route::get('/login','RodController@login')->name('login'); //Login
Route::get('/signup','RodController@signup')->name('signup'); //signup
Route::get('/userlogout','RodController@userLogout')->name('userLogout');//User Logout Method
Route::get('/forgotpwd','RodController@forgotpwd')->name('forgotPwd');//Forgot Page
Route::get('/changepassword/{email}','RodController@changepassword')->name('changePassword');//Send Reset Link
Route::post('/resetlink','RodController@resetlink')->name('resetLink');//Send Reset Link



//store Data
Route::post('user/login','RodController@userLogin')->name('userLogin'); //login
Route::post('user/signup','RodController@userSignup')->name('userSignup'); //signup
Route::post('contactstore','RodController@contactstore')->name('contactstore');//Contact Store
Route::post('/update password','RodController@updatepassword')->name('updatePassword');//update New Password

//===========================================================================================================================================
//Company Pages
Route::group(['middleware' => ['auth']], function () {
    Route::get('/company/companyjobpost','companyController@jobpost')->name('jobpost'); //jobpost new
    Route::get('/company/companyjobpostedit/{id}','companyController@jobpostedit')->name('jobpostEdit'); //jobpost new
    Route::get('/company/companyprofile', 'companyController@companyprofile')->name('companyProfile');//company Profile
    Route::get('/company/companyedit', 'companyController@companyedit')->name('companyEdit');//company Edit Profile
    Route::get('/company/viewjobs', 'companyController@viewjobs')->name('viewJobs');//view PostJobs
    Route::get('/company/jobdetail/{id}', 'companyController@jobdetail')->name('jobDetail');//Job Detail
    Route::get('/company/accept/proposal', 'recruiterController@acceptProposal')->name('acceptProposal');//Proposal List
    Route::get('/company/reject/proposal', 'recruiterController@rejectProposal')->name('rejectProposal');//Proposal List

    //sotre Data
    Route::post('jobpoststore','companyController@jobpoststore')->name('jobpoststore');
    Route::post('jobpostupdate','companyController@jobpostupdate')->name('jobpostUpdate');
    Route::post('companyprofilestore','companyController@companyprofilestore')->name('companyprofilestore');
    Route::post('companyupdate','companyController@companyupdate')->name('companyUpdate');// Edit Company Profile
});
//===========================================================================================================================================
//Recruiter Pages
Route::group(['middleware' => ['auth']], function () {
    Route::get('/recruiter/recruiterprofile','recruiterController@recruiterprofile')->name('recruiterProfile');//recruiter Profile
    Route::get('/recruiter/recruiterEdit','recruiterController@recruiteredit')->name('recruiterEdit');//recruiter Profile
    Route::get('/recruiter/addmyemployee','recruiterController@addmyemployee')->name('addmyEmployee');//add new employee from list
    Route::get('/recruiter/myemployee','recruiterController@myemployee')->name('myEmployee');//recruiter's employee
    Route::get('/recruiter/proposal','recruiterController@proposal')->name('proposal');//send a Proposal
    Route::get('/recruiter/myproposal','recruiterController@myproposal')->name('myProposal');//Proposal List

    //store Data
    Route::post('recruiterprofilestore','recruiterController@recruiterprofilestore')->name('recruiterprofilestore');
    Route::get('myempstore/{id}','recruiterController@myempstore')->name('myempstore');
    Route::post('proposalstore','recruiterController@proposalstore')->name('proposalstore');
    Route::post('recruiterupdate','recruiterController@recruiterupdate')->name('recruiterupdate');
    Route::post('myempupdate','recruiterController@myempupdate')->name('myempupdate');
});
//===========================================================================================================================================
//Employee Pages
Route::group(['middleware' => ['auth']], function () {
    Route::get('/employee/employeeprofile','employeeController@employeeprofile')->name('employeeProfile');//Employee Profile
    Route::get('/employee/employeeedit','employeeController@employeeedit')->name('employeeEdit');//Edit Profile

    //store Data
    Route::post('employeeprofilestore','employeeController@employeeprofilestore')->name('employeeprofilestore');
    Route::post('employeeupdate','employeeController@employeeupdate')->name('employeeUpdate');
});
//======================================================== Admin Pages =======================================================================
//Admin Pages
Route::get('/admin/index','adminController@index')->name('adminindex');//Admin Index
Route::get('/admin/contactuslist','adminController@contactuslist')->name('contactUsList');//Admin contact Us List
Route::get('/admin/destroycontact/{id}','adminController@destroycontact')->name('destroyContact');//Destroy Contact
Route::get('/admin','adminController@admin')->name('admin');//Admin Login Page
Route::post('/adminlogin','adminController@adminLogin')->name('adminLogin');//Admin login validation check
Route::get('/adminlogout','adminController@adminLogout')->name('adminLogout');//Admin Logout Method

//Company Pages------------------------------------------------------------------------------------------------------------------------------
Route::get('/admin/company/companyslist','adminController@companylist')->name('companyList');//Admin company List
Route::get('/admin/company/proposallist','adminController@proposallist')->name('proposalList');//Admin company List

Route::get('/admin/company/addcompany','adminController@addcompany')->name('addCompany');//Admin Add New Company
Route::get('/admin/company/viewcompany/{id}','adminController@viewcompany')->name('viewCompany');//Admin company Profile
Route::get('/admin/company/editcompany/{id}','adminController@editcompany')->name('editCompany');//Admin company Profile Edit
Route::get('/admin/company/destroycompany/{id}','adminController@destroycompany')->name('destroyCompany');//Admin company Profile Delete

Route::get('/admin/company/jobpostlist','adminController@jobpostlist')->name('postJobList');//Admin Job Post List
Route::get('/admin/company/addjob','adminController@addjob')->name('addJob');//Admin Add New Job
Route::get('/admin/company/viewjob/{id}','adminController@viewjob')->name('viewJob');//Admin Posted Job Profile
Route::get('/admin/company/editpostjob/{id}','adminController@editpostjob')->name('editPostJob');//Admin company Post Job Edit
Route::get('/admin/company/destroyjob/{id}','adminController@destroyjob')->name('destroyJob');//Admin Posted Job Delete

Route::post('updatecompany','adminController@updatecompany')->name('updateCompany');// Edit Company Profile

//Recruiter Pages----------------------------------------------------------------------------------------------------------------------------
Route::get('/admin/recruiter/recruiterlist','adminController@recruiterlist')->name('recruiterList');//Recruiter List
Route::get('/admin/recruiter/addrecruiter','adminController@addrecruiter')->name('addRecruiter');//Admin Add New Recruiter
Route::get('/admin/recruiter/editRecruiter/{id}','adminController@editRecruiter')->name('editRecruiter');//Admin Edit Recruiter
Route::get('/admin/recruiter/viewrecruiter/{id}','adminController@viewrecruiter')->name('viewRecruiter');//Admin Recruiter Profile
Route::get('/admin/company/destroyrecruiter/{id}','adminController@destroyrecruiter')->name('destroyRecruiter');//Admin Recruiter Delete

Route::get('/admin/recruiter/myemployeelist','adminController@myEmployeeList')->name('myEmployeeList');//Admin my employee list page
Route::get('/admin/recruiter/addMyEmp','adminController@addMyEmp')->name('addMyEmp');//Admin my employee list page
Route::get('/admin/recruiter/viewMyEmp/{id}','adminController@viewMyEmp')->name('viewMyEmp');//Admin my employee list page
Route::get('/admin/recruiter/editMyEmp/{id}','adminController@editMyEmp')->name('editMyEmp');//Admin my employee list page

Route::get('/admin/recruiter/sendProposalList','adminController@sendProposalList')->name('sendProposalList');//Admin my employee list page
Route::get('/admin/recruiter/destroyProposal/{id}','adminController@destroyProposal')->name('destroyProposal');//Admin my employee list page
Route::get('/admin/company/destroymyemp/{id}','adminController@destroymyemp')->name('destroyMyEmp');//Admin Employee Delete


//Employee Pages-------------------------------------------------------------------------------------------------------------------------------
Route::get('/admin/employee/employeelist','adminController@employeelist')->name('employeeList');//Employee List
Route::get('/admin/employee/addemployee','adminController@addemployee')->name('addEmployee');//Admin Add New Employee
Route::get('/admin/employee/viewEmployee/{id}','adminController@viewEmployee')->name('viewEmployee');//Admin View Employee

Route::get('/admin/employee/editemployee/{id}','adminController@editemployee')->name('editEmployee');//Admin Employee Edit
Route::get('/admin/company/destroyemployee/{id}','adminController@destroyemployee')->name('destroyEmployee');//Admin Employee Delete


//Auth::routes();-------------------------------------------------------------------------------------------------------------------------------

Route::get('/home', 'HomeController@index')->name('home');
