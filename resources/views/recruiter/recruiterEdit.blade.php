@extends('mainlayout')

@section('pageheader')
    Edit Profile
@endsection

@section('contain')

    <div class="profile-page">
        <div class="wrapper">
            <br><br><br><br><br><br><br>
            <form method="post" action="{{route('recruiterprofilestore')}}">
                <input type="hidden" name="userType" id="userType" value="{{Auth::user()->usertype}}">
                {{csrf_field()}}
                <div class="main main-raised">
                    <div class="profile-content">
                        <div class="container">
                            <div class="row">
                                <div class="profile">
                                    <div class="avatar">
                                        <img src="{{asset('assets/img/employee/christian.jpg')}}" alt="Circle Image" class="img-circle img-responsive img-raised"><br>
                                        <input type="file" name="profilePhoto" id="profilePhoto" class=" text-center  center-block  well well-sm">
                                    </div>
                                    <div class="name">
                                        <h3 class="title">{{Auth::user()->name}}</h3>
                                        <h6>Designer</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="description text-center">
                                <textarea id="aboutMe" name="aboutMe" class="form-control" placeholder="About Yourself" rows="4"></textarea>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                <div class="col-md-6">
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">Personal Details</div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>First Name</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <input type="text" class="form-control" placeholder="Ex.:Janki" name="firstName" id="firstName">
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>last Name</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <input type="text" class="form-control" placeholder="Ex.:patel" name="lastName" id="lastName">
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Gender</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <input type="radio"  name="gender" value="Male"><strong> Male</strong>&nbsp;&nbsp;
                                                        <input type="radio"  name="gender" value="Female"><strong> Female</strong>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Email ID</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <input type="email" class="ti-email form-control" name="emailid" id="emailid" placeholder="abc@gmail.com" value="{{Auth::user()->email}}">
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Contact Number</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                      <input type="tel" class="form-control" placeholder="8160626748" maxlength="15" name="contactNo">
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Address</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <textarea class="form-control" name="address" placeholder="Ex.: 57,hari krushna street, harni" rows="4"></textarea>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>City</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <div class="search-category-container">
                                                                <select id="city" name="city" class="form-control dropdown-product selectpicker">
                                                                    <option value="">Select</option>
                                                                    <option value="Vadodara">Vadodara</option>
                                                                    <option value="Bharuch">Bharuch</option>
                                                                    <option value="Rajkot">Rajkot</option>
                                                                    <option value="Mumbai">Mumbai</option>
                                                                </select>
                                                        </div>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>State</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <div class="search-category-container">
                                                            <select id="state" name="state" class="form-control dropdown-product selectpicker">
                                                                <option value="">Select</option>
                                                                <option value="Gujarat">Gujarat</option>
                                                                <option value="Maharastra">Maharastra</option>
                                                                <option value="Rajasthan">Rajasthan</option>
                                                                <option value="Goa">Goa</option>
                                                            </select>
                                                        </div>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Country</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <div class="search-category-container">
                                                            <select id="country" name="country" class="form-control dropdown-product selectpicker">
                                                                <option value="">Select</option>
                                                                <option value="India">India</option>
                                                                <option value="USA">USA</option>
                                                                <option value="Dubai">Dubai</option>
                                                                <option value="Canda">Canda</option>
                                                            </select>
                                                        </div>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Alternative Email ID</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <input type="email" class="ti-email form-control" name="alterEmailid" id="alteremailid" placeholder="abc@gmail.com" >
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br>

                                        </div><!--/panel-body-->
                                    </div><!--/panel-->
                                </div><!--/col-6-->
                                <div class="col-md-6">
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">Other Details</div>
                                        <div class="panel-body">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>GST Register</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <input type="radio"  name="gst" value="Yes"><strong> Yes</strong>&nbsp;&nbsp;
                                                        <input type="radio"  name="gst" value="No"><strong> No</strong>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Company Name</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <input type="text" class="form-control" placeholder="Ex.:abc private limited" name="companyName" id="companyname">
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Company Type</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <input type="text" class="form-control" placeholder="Ex.:abc private limited" name="companyType" id="companyname">
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Industry Type</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <div class="search-category-container">
                                                            <select id="industrytype" name="industryType" class="form-control dropdown-product selectpicker">
                                                                <option value="">Select</option>
                                                                <option value="IT-Hardware & Networking">IT-Hardware & Networking</option>
                                                                <option value="Food Processing">Food Processing</option>

                                                            </select>
                                                        </div>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Company Address</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <textarea class="form-control" name="companyAddress" placeholder="Ex.: 57,hari krushna street, harni" rows="4"></textarea>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Reference Name</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <input type="text" class="form-control" placeholder="Ex.:abc private limited" name="referenceName" id="companyname">
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Reference's Designation</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <div class="search-category-container">
                                                            <select id="designation" name="designation" class="form-control dropdown-product selectpicker">
                                                                <option value="">Select</option>
                                                                <option value="Manager">Manager</option>
                                                                <option value="Assi. Manager">Assi. Manager</option>
                                                            </select>
                                                        </div>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br>
                                        </div><!--/panel-body-->
                                    </div>
                                </div><!--/col-6-->
                            </div><!--/col-12-->
                        </div><!--/row--><br>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-common">Save</button>
                                <a id="cancel" name="cancel" class="btn btn-common" href="{{route('recruiterProfile')}}">Cancel</a>
                            </div>
                        </div><!--/formgroup-->
                    </div><!--/container--><br>
                </div>
            </form>
        </div>
    </div>
    <br><br>

@endsection
