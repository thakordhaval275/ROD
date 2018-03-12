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

Route::get('/login','RodController@login')->name('login'); //Login

//============================================================= Frontend ======================================================================
//Home Pages
Route::get('/index','RodController@index')->name('index'); //index
Route::get('/about','RodController@about')->name('about'); //about
Route::get('/contact','RodController@contact')->name('contactus'); //contect
Route::get('/signup','RodController@signup')->name('signup'); //signup

//store Data
Route::post('contactstore','RodController@contactstore')->name('contactstore');

//=================================================================================
//Company Pages
Route::get('/companyjobpost','companyController@jobpost')->name('jobpost'); //jobpost
Route::get('/companyprofile','companyController@companyprofile')->name('companyProfile');//company Profile
Route::get('/companyedit','companyController@companyedit')->name('companyEdit');//company Edit Profile
Route::get('/viewjobs','companyController@viewjobs')->name('viewJobs');//view PostJobs
Route::get('/jobdetail','companyController@jobdetail')->name('jobDetail');//Job Detail

//sotre Data
Route::post('jobpoststore','companyController@jobpoststore')->name('jobpoststore');
Route::post('companyprofilestore','companyController@companyprofilestore')->name('companyprofilestore');

//=================================================================================
//Recruiter Pages
Route::get('/recruiterprofile','recruiterController@recruiterprofile')->name('recruiterProfile');//recruiter Profile
Route::get('/recruiterEdit','recruiterController@recruiteredit')->name('recruiterEdit');//recruiter Profile
Route::get('/addmyemployee','recruiterController@addmyemployee')->name('addmyEmployee');//add new employee from list
Route::get('/myemployee','recruiterController@myemployee')->name('myEmployee');//recruiter's employee
Route::get('/proposal','recruiterController@proposal')->name('proposal');//send a Proposal


//=================================================================================
//Employee Pages
Route::get('/employeeprofile','employeeController@employeeprofile')->name('employeeProfile');//Employee Profile
Route::get('/employeeedit','employeeController@employeeedit')->name('employeeEdit');//Edit Profile

//store Data
Route::post('employeeprofilestore','employeeController@employeeprofilestore')->name('employeeprofilestore');

//======================================================== Admin Pages =======================================================================
//Admin Pages
Route::get('/admin','adminController@index')->name('admin');//Admin Index

//Company Pages
Route::get('/admin/company/companyslist','adminController@companylist')->name('companyList');//Admin company List
Route::get('/admin/company/addcompany','adminController@addcompany')->name('addCompany');//Admin Add New Company
Route::get('/admin/company/view/{id}','adminController@viewcompany')->name('viewCompany');//Admin company Profile
Route::get('/admin/company/jobpostlist','adminController@jobpostlist')->name('postJobList');//Admin Job Post List
Route::get('/admin/company/addjob','adminController@addjob')->name('addJob');//Admin Add New Company

//Recruiter Pages
Route::get('/admin/recruiter/recruiterlist','adminController@recruiterlist')->name('recruiterList');//Recruiter List
Route::get('/admin/recruiter/addrecruiter','adminController@addrecruiter')->name('addRecruiter');//Admin Add New Recruiter
Route::get('/admin/recruiter/view/{id}','adminController@viewrecruiter')->name('viewRecruiter');//Admin Recruiter Profile

//Employee Pages
Route::get('/admin/employee/employeelist','adminController@employeelist')->name('employeeList');//Employee List
Route::get('/admin/employee/addemployee','adminController@addemployee')->name('addEmployee');//Admin Add New Employee