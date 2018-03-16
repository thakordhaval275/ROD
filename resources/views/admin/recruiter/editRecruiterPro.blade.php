@extends('admin.adminlayoute')

@section('contain')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Recruiter
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('adminindex')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{route('recruiterList')}}"><i class="fa fa-users"></i> List of Recruiter</a></li>
                <li class="active">Edit Recruiter</li>
            </ol>
        </section>

        <!-- Main content -->
        <form method="post" action="{{route('recruiterprofilestore')}}" enctype="multipart/form-data">
            <input type="hidden" name="userType" id="userType" value="{{Auth::user()->usertype}}">
            <input type="hidden" name="id" id="id" value="{{$recruiter->id}}">
            {{csrf_field()}}
            <section class="content">

                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Personal Details</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-6 box-body">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Profile Image</label>
                                                <input type="file" name="profilePhoto" id="profilePhoto">
                                                <p class="help-block">Upload Recruiter Image here.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="Ex.:Janki" name="firstName" id="firstName" value="{{$recruiter->firstname}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="Ex.:patel" name="lastName" id="lastName" value="{{$recruiter->lastname}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <div class="form-group">
                                                    <label>
                                                        <input type="radio" name="gender" value="Male" @if($recruiter->gender=='Male')checked="checked"@endif class="minimal-red" checked="true" >&nbsp;&nbsp;Male
                                                    </label>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <label>
                                                        <input type="radio" name="gender" value="Female" @if($recruiter->gender=='Female')checked="checked"@endif class="minimal-red">&nbsp;&nbsp;Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email ID</label>
                                                <input type="email" class="ti-email form-control" name="emailid" id="emailid" placeholder="abc@gmail.com" value="{{$recruiter->emailid}}" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <textarea class="form-control" name="address" placeholder="Ex.: 57,hari krushna street, harni" rows="3">{{$recruiter->address}}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6 box-body">
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Contact Number</label>
                                                <input type="tel" class="form-control" placeholder="8160626748" maxlength="15" name="contactNo" value="{{$recruiter->contactno}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>City</label>
                                                <select  id="city" name="city" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="Vadodara" @if($recruiter->city=='Vadodara')selected="selected"@endif>Vadodara</option>
                                                    <option value="Bharuch" @if($recruiter->city=='Bharuch')selected="selected"@endif>Bharuch</option>
                                                    <option value="Rajkot" @if($recruiter->city=='Rajkot')selected="selected"@endif>Rajkot</option>
                                                    <option value="Mumbai" @if($recruiter->city=='Mumbai')selected="selected"@endif>Mumbai</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>state</label>
                                                <select  id="state" name="state" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="Gujarat" @if($recruiter->state=='Gujarat')selected="selected"@endif>Gujarat</option>
                                                    <option value="Maharastra" @if($recruiter->state=='Maharastra')selected="selected"@endif>Maharastra</option>
                                                    <option value="Rajasthan" @if($recruiter->state=='Rajasthan')selected="selected"@endif>Rajasthan</option>
                                                    <option value="Goa" @if($recruiter->state=='Goa')selected="selected"@endif>Goa</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <select  id="country" name="country" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="India" @if($recruiter->country=='India')selected="selected"@endif>India</option>
                                                    <option value="USA" @if($recruiter->country=='USA')selected="selected"@endif>USA</option>
                                                    <option value="Dubai" @if($recruiter->country=='Dubai')selected="selected"@endif>Dubai</option>
                                                    <option value="Canda" @if($recruiter->country=='Canda')selected="selected"@endif>Canda</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Alternative Email ID</label>
                                                <input type="email" class="ti-email form-control" name="alterEmailid" id="alteremailid" placeholder="abc@gmail.com"  value="{{$recruiter->otheremailid}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Recruiter</label>
                                                <textarea id="aboutMe" name="aboutMe" class="form-control" placeholder="About Yourself" rows="3">{{$recruiter->aboutself}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Other Details</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-6 box-body">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Company Name</label>
                                                <input type="text" class="form-control" placeholder="Ex.:abc private limited" name="companyName" id="companyname"  value="{{$recruiter->rcompanyname}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Company Type</label>
                                                <input type="text" class="form-control" placeholder="Ex.:abc private limited" name="companyType" id="companyname" value="{{$recruiter->rcompanytype}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>GST Register</label>
                                            <div class="form-group">
                                                <label>
                                                    <input type="radio" name="gst" value="yes" class="minimal-red">&nbsp;&nbsp;Yes
                                                </label>
                                                &nbsp;&nbsp;&nbsp;
                                                <label>
                                                    <input type="radio" name="gst" value="no" class="minimal-red" checked="true">&nbsp;&nbsp;No
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Industry Type</label>
                                                <select  id="industryType" name="industryType" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="IT-Hardware & Networking" @if($recruiter->rindustrytype=='IT-Hardware & Networking')selected="selected"@endif>IT-Hardware & Networking</option>
                                                    <option value="Food Processing" @if($recruiter->rindustrytype=='Food Processing')selected="selected"@endif>Food Processing</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Company Address</label>
                                                <textarea class="form-control" name="companyAddress" placeholder="Ex.: 57,hari krushna street, harni" rows="4">{{$recruiter->companyaddress}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 box-body">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Reference Name</label>
                                                <input type="text" class="form-control"  value="{{$recruiter->rname}}" placeholder="Ex.:abc private limited" name="referenceName" id="companyname">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Reference's Designation</label>
                                                <select  id="designation" name="designation" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="Manager" @if($recruiter->rdesignation=='Manager')selected="selected"@endif>Manager</option>
                                                    <option value="Assi. Manager" @if($recruiter->rdesignation=='Assi. Manager')selected="selected"@endif>Assi. Manager</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('recruiterList')}}"><button type="submit" class="btn btn-primary">Cancel</button></a>
                    </div>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box -->

            </section>
        </form>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection