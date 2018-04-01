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
        <form method="post" action="{{route('recruiterupdate')}}" enctype="multipart/form-data">
            <input type="hidden" name="userType" id="userType" value="{{$recruiter->usertype}}">
            <input type="hidden" name="id" id="id" value="{{$recruiter->id}}">
            <input type="hidden" name="hiddenPhoto" id="hiddenPhoto" value="{{$recruiter->profilephoto}}">
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
                                                <img  class="img-responsive img-circle" src="{{ asset('assets/img/recruiter/'.$recruiter->profilephoto) }}" width="100" height="100">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12" @if($errors->first('firstName')) has-error @endif>
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="Ex.:Janki" name="firstName" id="firstName" value="{{$recruiter->firstname}}">
                                                @if($errors->first('firstName'))
                                                    <p class="text-danger"> {{$errors->first('firstName')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12" @if($errors->first('lastName')) has-error @endif>
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="Ex.:patel" name="lastName" id="lastName" value="{{$recruiter->lastname}}">
                                                @if($errors->first('lastName'))
                                                    <p class="text-danger"> {{$errors->first('lastName')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12" @if($errors->first('gender')) has-error @endif>
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
                                                @if($errors->first('gender'))
                                                    <p class="text-danger"> {{$errors->first('gender')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12" @if($errors->first('emailid')) has-error @endif>
                                            <div class="form-group">
                                                <label>Email ID</label>
                                                <input type="email" class="ti-email form-control" readonly name="emailid" id="emailid" placeholder="abc@gmail.com" value="{{$recruiter->emailid}}" readonly>
                                                @if($errors->first('emailid'))
                                                    <p class="text-danger"> {{$errors->first('emailid')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12" @if($errors->first('address')) has-error @endif>
                                            <div class="form-group">
                                                <label>Address</label>
                                                <textarea class="form-control" name="address" placeholder="Ex.: 57,hari krushna street, harni" rows="3">{{$recruiter->address}}</textarea>
                                                @if($errors->first('address'))
                                                    <p class="text-danger"> {{$errors->first('address')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6 box-body">
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12" @if($errors->first('contactNo')) has-error @endif>
                                            <div class="form-group">
                                                <label>Contact Number</label>
                                                <input type="tel" class="form-control" placeholder="8160626748" maxlength="15" name="contactNo" value="{{$recruiter->contactno}}">
                                                @if($errors->first('contactNo'))
                                                    <p class="text-danger"> {{$errors->first('contactNo')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12" @if($errors->first('city')) has-error @endif>
                                            <div class="form-group">
                                                <label>City</label>
                                                <select  id="city" name="city" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="Vadodara" @if($recruiter->city=='Vadodara')selected="selected"@endif>Vadodara</option>
                                                    <option value="Bharuch" @if($recruiter->city=='Bharuch')selected="selected"@endif>Bharuch</option>
                                                    <option value="Rajkot" @if($recruiter->city=='Rajkot')selected="selected"@endif>Rajkot</option>
                                                    <option value="Mumbai" @if($recruiter->city=='Mumbai')selected="selected"@endif>Mumbai</option>
                                                </select>
                                                @if($errors->first('city'))
                                                    <p class="text-danger"> {{$errors->first('city')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12" @if($errors->first('state')) has-error @endif>
                                            <div class="form-group">
                                                <label>state</label>
                                                <select  id="state" name="state" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="Gujarat" @if($recruiter->state=='Gujarat')selected="selected"@endif>Gujarat</option>
                                                    <option value="Maharastra" @if($recruiter->state=='Maharastra')selected="selected"@endif>Maharastra</option>
                                                    <option value="Rajasthan" @if($recruiter->state=='Rajasthan')selected="selected"@endif>Rajasthan</option>
                                                    <option value="Goa" @if($recruiter->state=='Goa')selected="selected"@endif>Goa</option>
                                                </select>
                                                @if($errors->first('state'))
                                                    <p class="text-danger"> {{$errors->first('state')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12" @if($errors->first('country')) has-error @endif>
                                            <div class="form-group">
                                                <label>Country</label>
                                                <select  id="country" name="country" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="India" @if($recruiter->country=='India')selected="selected"@endif>India</option>
                                                    <option value="USA" @if($recruiter->country=='USA')selected="selected"@endif>USA</option>
                                                    <option value="Dubai" @if($recruiter->country=='Dubai')selected="selected"@endif>Dubai</option>
                                                    <option value="Canda" @if($recruiter->country=='Canda')selected="selected"@endif>Canda</option>
                                                </select>
                                                @if($errors->first('country'))
                                                    <p class="text-danger"> {{$errors->first('country')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12" @if($errors->first('alterEmailid')) has-error @endif>
                                            <div class="form-group">
                                                <label>Alternative Email ID</label>
                                                <input type="email" class="ti-email form-control" name="alterEmailid" id="alteremailid" placeholder="abc@gmail.com"  value="{{$recruiter->otheremailid}}">
                                                @if($errors->first('alterEmailid'))
                                                    <p class="text-danger"> {{$errors->first('alterEmailid')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12" @if($errors->first('aboutMe')) has-error @endif>
                                            <div class="form-group">
                                                <label>About Recruiter</label>
                                                <textarea id="aboutMe" name="aboutMe" class="form-control" placeholder="About Yourself" rows="7">{{$recruiter->aboutself}}</textarea>
                                                @if($errors->first('aboutMe'))
                                                    <p class="text-danger"> {{$errors->first('aboutMe')}} </p>
                                                @endif
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
                                        <div class="col-md-12" @if($errors->first('companyName')) has-error @endif>
                                            <div class="form-group">
                                                <label>Company Name</label>
                                                <input type="text" class="form-control" placeholder="Ex.:abc private limited" name="companyName" id="companyname"  value="{{$recruiter->rcompanyname}}">
                                                @if($errors->first('companyName'))
                                                    <p class="text-danger"> {{$errors->first('companyName')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12" @if($errors->first('companyType')) has-error @endif>
                                            <div class="form-group">
                                                <label>Company Type</label>
                                                <input type="text" class="form-control" placeholder="Ex.:abc private limited" name="companyType" id="companyname" value="{{$recruiter->rcompanytype}}">
                                                @if($errors->first('companyType'))
                                                    <p class="text-danger"> {{$errors->first('companyType')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12" @if($errors->first('gst')) has-error @endif>
                                            <label>GST Register</label>
                                            <div class="form-group">
                                                <label>
                                                    <input type="radio" name="gst" value="Yes" class="minimal-red">&nbsp;&nbsp;Yes
                                                </label>
                                                &nbsp;&nbsp;&nbsp;
                                                <label>
                                                    <input type="radio" name="gst" value="No" class="minimal-red" checked="true">&nbsp;&nbsp;No
                                                </label>
                                            </div>
                                            @if($errors->first('gst'))
                                                <p class="text-danger"> {{$errors->first('gst')}} </p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12" @if($errors->first('industryType')) has-error @endif>
                                            <div class="form-group">
                                                <label>Industry Type</label>
                                                <select  id="industryType" name="industryType" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="IT-Hardware & Networking" @if($recruiter->rindustrytype=='IT-Hardware & Networking')selected="selected"@endif>IT-Hardware & Networking</option>
                                                    <option value="Food Processing" @if($recruiter->rindustrytype=='Food Processing')selected="selected"@endif>Food Processing</option>
                                                </select>
                                                @if($errors->first('industryType'))
                                                    <p class="text-danger"> {{$errors->first('industryType')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12" @if($errors->first('companyAddress')) has-error @endif>
                                            <div class="form-group">
                                                <label>Company Address</label>
                                                <textarea class="form-control" name="companyAddress" placeholder="Ex.: 57,hari krushna street, harni" rows="4">{{$recruiter->companyaddress}}</textarea>
                                                @if($errors->first('companyAddress'))
                                                    <p class="text-danger"> {{$errors->first('companyAddress')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 box-body">

                                    <div class="row">
                                        <div class="col-md-12" @if($errors->first('referenceName')) has-error @endif>
                                            <div class="form-group">
                                                <label>Reference Name</label>
                                                <input type="text" class="form-control"  value="{{$recruiter->rname}}" placeholder="Ex.:abc private limited" name="referenceName" id="companyname">
                                                @if($errors->first('referenceName'))
                                                    <p class="text-danger"> {{$errors->first('referenceName')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12" @if($errors->first('designation')) has-error @endif>
                                            <div class="form-group">
                                                <label>Reference's Designation</label>
                                                <select  id="designation" name="designation" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="Manager" @if($recruiter->rdesignation=='Manager')selected="selected"@endif>Manager</option>
                                                    <option value="Assi. Manager" @if($recruiter->rdesignation=='Assi. Manager')selected="selected"@endif>Assi. Manager</option>
                                                </select>
                                                @if($errors->first('designation'))
                                                    <p class="text-danger"> {{$errors->first('designation')}} </p>
                                                @endif
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
                        <a class="btn btn-primary" href="{{route('recruiterList')}}">Cancel</a>
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