@extends('mainlayout')

@section('pageheader')
    Edit Profile
@endsection

@section('contain')

    <div class="profile-page">
        <div class="wrapper">
            <br><br><br><br><br><br><br>
            <form method="post" action="{{route('recruiterupdate')}}" enctype="multipart/form-data">
                <input type="hidden" name="userType" id="userType" value="{{Auth::user()->usertype}}">
                <input type="hidden" name="recruiter_id" id="recruiter_id" value="{{$recruiterdetail->id}}">
                <input type="hidden" name="hiddenPhoto" id="hiddenPhoto" value="{{$recruiterdetail->profilephoto}}">
                {{csrf_field()}}
                <div class="main main-raised">
                    <div class="profile-content">
                        <div class="container">
                            <div class="row">
                                <div class="profile">
                                    <div class="avatar">
                                        <img src="@if($recruiterdetail->profilephoto==""){{ asset('assets/img/recruiter/default.png').'/'.$recruiterdetail->profilephoto}} @else {{ asset('assets/img/recruiter/').'/'.$recruiterdetail->profilephoto}} @endif" alt="Circle Image" class="img-circle img-responsive img-raised"><br>
                                        <input type="file" name="profilePhoto" id="profilePhoto" class=" text-center  center-block  well well-sm">
                                    </div>
                                    <div class="name">
                                        <h3 class="title">@if($recruiterdetail->firstname!="" && $recruiterdetail->lastname!="") {{$recruiterdetail->firstname}} {{$recruiterdetail->lastname}} @else {{$recruiterdetail->emailid}} @endif</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="description text-center">
                                <textarea id="aboutMe" name="aboutMe" class="form-control" placeholder="About Yourself" rows="4">{{$recruiterdetail->aboutself}}</textarea>
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
                                                        <input type="text" class="form-control" placeholder="Ex.:Janki" name="firstName" id="firstName" value="{{$recruiterdetail->firstname}}">
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
                                                        <input type="text" class="form-control" placeholder="Ex.:patel" name="lastName" id="lastName" value="{{$recruiterdetail->lastname}}">
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
                                                        <input type="radio"  name="gender" value="Male"@if($recruiterdetail->gender=='Male') checked="checked"@endif><strong> Male</strong>&nbsp;&nbsp;
                                                        <input type="radio"  name="gender" value="Female"@if($recruiterdetail->gender=='Female') checked="checked"@endif><strong> Female</strong>
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
                                                        <input type="email" class="ti-email form-control" name="emailid" id="emailid" placeholder="abc@gmail.com" value="{{Auth::user()->email}}" readonly>
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
                                                      <input type="tel" class="form-control" placeholder="8160626748" maxlength="15" name="contactNo" value="{{$recruiterdetail->contactno}}">
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
                                                        <textarea class="form-control" name="address" placeholder="Ex.: 57,hari krushna street, harni" rows="4">{{$recruiterdetail->address}}</textarea>
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
                                                                    <option value="Vadodara"@if($recruiterdetail->city=='Vadodara') selected="selected"@endif>Vadodara</option>
                                                                    <option value="Bharuch" @if($recruiterdetail->city=='Bharuch') selected="selected"@endif>Bharuch</option>
                                                                    <option value="Rajkot" @if($recruiterdetail->city=='Rajkot') selected="selected"@endif>Rajkot</option>
                                                                    <option value="Mumbai" @if($recruiterdetail->city=='Mumbai') selected="selected"@endif>Mumbai</option>
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
                                                                <option value="Gujarat" @if($recruiterdetail->state=='Gujarat') selected="selected"@endif>Gujarat</option>
                                                                <option value="Maharastra" @if($recruiterdetail->state=='Maharastra') selected="selected"@endif>Maharastra</option>
                                                                <option value="Rajasthan" @if($recruiterdetail->state=='Rajasthan') selected="selected"@endif>Rajasthan</option>
                                                                <option value="Goa" @if($recruiterdetail->state=='Goa') selected="selected"@endif>Goa</option>
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
                                                                <option value="India" @if($recruiterdetail->country=='India') selected="selected"@endif>India</option>
                                                                <option value="USA" @if($recruiterdetail->country=='USA') selected="selected"@endif>USA</option>
                                                                <option value="Dubai" @if($recruiterdetail->country=='Dubai') selected="selected"@endif>Dubai</option>
                                                                <option value="Canda" @if($recruiterdetail->country=='Canda') selected="selected"@endif>Canda</option>
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
                                                        <input type="email" class="ti-email form-control" name="alterEmailid" id="alteremailid" placeholder="abc@gmail.com" value="{{$recruiterdetail->otheremailid}}">
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

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
                                                        <input type="radio"  name="gst" value="Yes" @if($recruiterdetail->gstregister=='Yes') checked="checked"@endif><strong> Yes</strong>&nbsp;&nbsp;
                                                        <input type="radio"  name="gst" value="No" @if($recruiterdetail->gstregister=='No') checked="checked"@endif><strong> No</strong>
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
                                                        <input type="text" class="form-control" placeholder="Ex.:abc private limited" name="companyName" id="companyname" value="{{$recruiterdetail->rcompanyname}}">
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
                                                        <input type="text" class="form-control" placeholder="Ex.:abc private limited" name="companyType" id="companyname" value="{{$recruiterdetail->rcompanytype}}">
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
                                                                <option value="IT-Hardware & Networking" @if($recruiterdetail->rindustrytype=='IT-Hardware & Networking') selected="selected"@endif>IT-Hardware & Networking</option>
                                                                <option value="Food Processing" @if($recruiterdetail->rindustrytype=='Food Processing') selected="selected"@endif>Food Processing</option>

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
                                                        <textarea class="form-control" name="companyAddress" placeholder="Ex.: 57,hari krushna street, harni" rows="4">{{$recruiterdetail->companyaddress}}</textarea>
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
                                                        <input type="text" class="form-control" placeholder="Ex.:abc private limited" name="referenceName" id="companyname" value="{{$recruiterdetail->rname}}">
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
                                                                <option value="Manager" @if($recruiterdetail->rdesignation=='Manager') selected="selected"@endif>Manager</option>
                                                                <option value="Assi. Manager" @if($recruiterdetail->rdesignation=='Assi. Manager') selected="selected"@endif>Assi. Manager</option>
                                                            </select>
                                                        </div>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br><br><br><br><br><br><br><br><br><br>
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
