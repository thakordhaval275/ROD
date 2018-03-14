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
    return view('index');
});

//============================================================= Frontend ======================================================================
//Home Pages
Route::get('/index','RodController@index')->name('index'); //index
Route::get('/about','RodController@about')->name('about'); //about
Route::get('/contact','RodController@contact')->name('contactus'); //contect
Route::get('/login','RodController@login')->name('login'); //Login
Route::get('/signup','RodController@signup')->name('signup'); //signup

//store Data
Route::post('user/login','RodController@userLogin')->name('userLogin'); //login
Route::post('user/signup','RodController@userSignup')->name('userSignup'); //signup
Route::post('contactstore','RodController@contactstore')->name('contactstore');

//=================================================================================
//Company Pages
Route::get('/company/companyjobpost','companyController@jobpost')->name('jobpost'); //jobpost new
Route::get('/company/companyprofile','companyController@companyprofile')->name('companyProfile');//company Profile
Route::get('/company/companyedit','companyController@companyedit')->name('companyEdit');//company Edit Profile
Route::get('/company/viewjobs','companyController@viewjobs')->name('viewJobs');//view PostJobs
Route::get('/company/jobdetail','companyController@jobdetail')->name('jobDetail');//Job Detail

//sotre Data
Route::post('jobpoststore','companyController@jobpoststore')->name('jobpoststore');
Route::post('companyprofilestore','companyController@companyprofilestore')->name('companyprofilestore');

//=================================================================================
//Recruiter Pages
Route::get('/recruiter/recruiterprofile','recruiterController@recruiterprofile')->name('recruiterProfile');//recruiter Profile
Route::get('/recruiter/recruiterEdit','recruiterController@recruiteredit')->name('recruiterEdit');//recruiter Profile
Route::get('/recruiter/addmyemployee','recruiterController@addmyemployee')->name('addmyEmployee');//add new employee from list
Route::get('/recruiter/myemployee','recruiterController@myemployee')->name('myEmployee');//recruiter's employee
Route::get('/recruiter/proposal','recruiterController@proposal')->name('proposal');//send a Proposal

//store Data
Route::post('recruiterprofilestore','recruiterController@recruiterprofilestore')->name('recruiterprofilestore');
Route::post('myempstore','recruiterController@myempstore')->name('myempstore');

//=================================================================================
//Employee Pages
Route::get('/employee/employeeprofile','employeeController@employeeprofile')->name('employeeProfile');//Employee Profile
Route::get('/employee/employeeedit','employeeController@employeeedit')->name('employeeEdit');//Edit Profile

//store Data
Route::post('employeeprofilestore','employeeController@employeeprofilestore')->name('employeeprofilestore');

//======================================================== Admin Pages =======================================================================
//Admin Pages
Route::get('/admin/index','adminController@index')->name('adminindex');//Admin Index
Route::get('/admin','adminController@admin')->name('admin');//Admin Login Page
Route::post('/adminlogin','adminController@adminLogin')->name('adminLogin');//Admin login validation check
Route::get('/userlogout','adminController@userLogout')->name('userLogout');//Admin Logout Method

//Company Pages
Route::get('/admin/company/companyslist','adminController@companylist')->name('companyList');//Admin company List
Route::get('/admin/company/addcompany','adminController@addcompany')->name('addCompany');//Admin Add New Company
Route::get('/admin/company/viewcompany/{id}','adminController@viewcompany')->name('viewCompany');//Admin company Profile
Route::get('/admin/company/destroycompany/{id}','adminController@destroycompany')->name('destroyCompany');//Admin company Profile Delete

Route::get('/admin/company/jobpostlist','adminController@jobpostlist')->name('postJobList');//Admin Job Post List
Route::get('/admin/company/addjob','adminController@addjob')->name('addJob');//Admin Add New Job
Route::get('/admin/company/viewjob/{id}','adminController@viewjob')->name('viewJob');//Admin Posted Job Profile
Route::get('/admin/company/destroyjob/{id}','adminController@destroyjob')->name('destroyJob');//Admin Posted Job Delete

//Recruiter Pages
Route::get('/admin/recruiter/recruiterlist','adminController@recruiterlist')->name('recruiterList');//Recruiter List
Route::get('/admin/recruiter/addrecruiter','adminController@addrecruiter')->name('addRecruiter');//Admin Add New Recruiter
Route::get('/admin/recruiter/viewrecruiter/{id}','adminController@viewrecruiter')->name('viewRecruiter');//Admin Recruiter Profile
Route::get('/admin/company/destroyrecruiter/{id}','adminController@destroyrecruiter')->name('destroyRecruiter');//Admin Recruiter Delete

Route::get('/admin/recruiter/myemployeelist','adminController@myEmployeeList')->name('myEmployeeList');//Admin my employee list page
Route::get('/admin/recruiter/addMyEmp','adminController@addMyEmp')->name('addMyEmp');//Admin my employee list page

//Employee Pages
Route::get('/admin/employee/employeelist','adminController@employeelist')->name('employeeList');//Employee List
Route::get('/admin/employee/addemployee','adminController@addemployee')->name('addEmployee');//Admin Add New Employee
Route::get('/admin/company/destroyemployee/{id}','adminController@destroyemployee')->name('destroyEmployee');//Admin Employee Delete


//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
