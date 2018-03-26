@extends('mainlayout')

@section('pageheader')
    My Account
@endsection
@section('contain')
    <br><br>
    <div class="profile-page">
        <div class="wrapper">
            <br><br><br><br><br><br><br>
            <form method="post" action="{{route('companyUpdate')}}" enctype="multipart/form-data">
                <input type="hidden" name="userType" id="userType" value="{{Auth::user()->usertype}}">
                <input type="hidden" name="company_id" id="company_id" value="{{$companydetail->id}}">
                <input type="hidden" name="hiddenLogo" id="hiddenLogo" value="{{$companydetail->logo}}">
                {{csrf_field()}}
                <div class="main main-raised">
                    <div class="profile-content">
                        <div class="container">
                            <div class="row">
                                <div class="profile">
                                    <div class="avatar">
                                        <img src="{{asset('assets/img/company/'.$companydetail->logo)}}" alt="Circle Image" class="img-circle img-responsive img-raised"><br>
                                        <input type="file" class="text-center center-block well well-sm" name="companyLogo">
                                    </div>
                                    <div class="name">
                                        <h3 class="title">MTAJ Solutions PVT LTD</h3>
                                        <h6>Software Company</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="description text-center">
                                <textarea id="aboutcompany" name="aboutCompany" class="form-control" placeholder="About Company" rows="4">{{$companydetail->aboutcompany}}</textarea>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <br><br>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="panel panel-danger">
                                            <div class="panel-heading">Company Details</div>
                                            <div class="panel-body">
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Company Name</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <input id="name" name="companyName" type="text" placeholder="Name of Company" class="form-control input-md" value="{{Auth::user()->name}}">

                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Location</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <div class="search-category-container">
                                                                <select id="location" name="location" class="form-control dropdown-product selectpicker">
                                                                    <option value="">Select Location</option>
                                                                    <option value="India" @if($companydetail->location=='India')selected="selected"@endif>India</option>
                                                                    <option value="USA" @if($companydetail->location=='USA')selected="selected"@endif>USA</option>
                                                                    <option value="New York" @if($companydetail->location=='New York')selected="selected"@endif>New York</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Address</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <textarea  class="form-control" name="companyAddress" id="companyaddress" placeholder="Address of company">{{$companydetail->address}}</textarea>
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Email Id</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <input type="text" name="email" id="email" placeholder="Company Email-id" class="form-control" value="{{Auth::user()->email}}" readonly>
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Website</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <input type="text" name="website" id="website" placeholder="Company's Website" class="form-control" value="{{$companydetail->website}}">
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Type</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <input id="companytype" name="companyType" type="text" placeholder="Ex.:PVT limited, limited...etc" class="form-control input-md" value="{{$companydetail->companytype}}">
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Year of Found</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <input id="yearoffound" name="yearOfFound" type="text" placeholder="year of found" class="form-control input-md" value="{{$companydetail->foundyear}}">
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>No. Of Employees</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <input id="noofemp" name="noOfEmp" type="text" placeholder="No Of Employees working..." class="form-control input-md" value="{{$companydetail->noofemployee}}">
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="form-group">
                                                    <div class="col-md-12 text-center">
                                                        <button type="submit" class="btn btn-common">Save</button>
                                                        <a id="cancel" name="cancel" class="btn btn-common" href="{{route('companyProfile')}}">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                    </div>
                                </div>
                            </div><br><br>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br><br>
@endsection
