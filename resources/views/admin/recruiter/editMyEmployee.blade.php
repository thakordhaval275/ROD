@extends('admin.adminlayoute')

@section('contain')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Employee
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('adminindex')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{route('myEmployeeList')}}">list Of Recruiters's Employee</a></li>
                <li class="active">Edit Employee</li>
            </ol>
        </section>

        <!-- Main content -->
        <form method="post" action="{{route('myempupdate')}}" enctype="multipart/form-data">
            <input type="hidden" name="userType" id="userType" value="{{$myempedit->usertype}}">
            <input type="hidden" name="id" id="id" value="{{$myempedit->id}}">
            <input type="hidden" name="hiddenLogo" id="hiddenLogo" value="{{$myempedit->logo}}">
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
                                                <input type="file" name="empProfile">
                                                <p class="help-block">Upload Employee Image here.</p>
                                                <img class="img-responsive img-circle" src="{{ asset('assets/img/employee/'.$myempedit->logo) }}" width="100" height="100">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('firstName')) has-error @endif">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" name="firstName" placeholder="ex. John" id="firstName" value="{{$myempedit->firstname}}">
                                                @if($errors->first('firstName'))
                                                    <p class="text-danger"> {{$errors->first('firstName')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('lastName')) has-error @endif">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" name="lastName" placeholder="ex. Christian" id="lastName" value="{{$myempedit->lastname}}">
                                                @if($errors->first('lastName'))
                                                    <p class="text-danger"> {{$errors->first('lastName')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('gender')) has-error @endif">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <div class="form-group">
                                                    <label>
                                                        <input type="radio" name="gender" value="Male" class="minimal-red" @if($myempedit->gender=='Male')checked="checked"@endif>&nbsp;&nbsp;Male
                                                    </label>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <label>
                                                        <input type="radio" name="gender" value="Female" class="minimal-red" @if($myempedit->gender=='Female')checked="checked"@endif>&nbsp;&nbsp;Female
                                                    </label>
                                                </div>
                                                @if($errors->first('gender'))
                                                    <p class="text-danger"> {{$errors->first('gender')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('address')) has-error @endif">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <textarea type="text" class="form-control" name="address" placeholder="ex. B/20 Shivam Tenament, Nr. Air Force" id="address">{{$myempedit->address}}</textarea>
                                                @if($errors->first('address'))
                                                    <p class="text-danger"> {{$errors->first('address')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('pincode')) has-error @endif">
                                            <div class="form-group">
                                                <label>Pincode</label>
                                                <input type="text" class="form-control" name="pincode" placeholder="ex. 390010" id="pincode" value="{{$myempedit->pincode}}">
                                                @if($errors->first('pincode'))
                                                    <p class="text-danger"> {{$errors->first('pincode')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('birthdate')) has-error @endif">
                                            <div class="form-group">
                                                <label>Birthdate</label>
                                                <input type="date" class="form-control" name="birthdate" id="birthdate"  value="{{$myempedit->bdate}}">
                                                @if($errors->first('birthdate'))
                                                    <p class="text-danger"> {{$errors->first('birthdate')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6 box-body">
                                    <br>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('aboutMe')) has-error @endif">
                                            <div class="form-group">
                                                <label>About Self</label>
                                                <textarea id="aboutMe" name="aboutMe" class="form-control" placeholder="About Yourself" rows="3">{{$myempedit->aboutself}}</textarea>
                                                @if($errors->first('aboutMe'))
                                                    <p class="text-danger"> {{$errors->first('aboutMe')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('contectNo')) has-error @endif">
                                            <div class="form-group">
                                                <label>Contect No.</label>
                                                <input type="tel" class="form-control" name="contectNo" placeholder="ex. +912345248951" id="contectno" maxlength="15" value="{{$myempedit->contectno}}">
                                                @if($errors->first('contectNo'))
                                                    <p class="text-danger"> {{$errors->first('contectNo')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('email')) has-error @endif">
                                            <div class="form-group">
                                                <label>Email Id</label>
                                                <input type="email" class="form-control" name="email" placeholder="ex. abc@gmail.com" id="email" value="{{$myempedit->emailid}}" readonly>
                                                @if($errors->first('email'))
                                                    <p class="text-danger"> {{$errors->first('email')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('city')) has-error @endif">
                                            <div class="form-group">
                                                <label>City</label>
                                                <select  id="city" name="city" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="Vadodara" @if($myempedit->city=='Vadodara')selected="selected"@endif>Vadodara</option>
                                                    <option value="Anand" @if($myempedit->city=='Anand')selected="selected"@endif>Anand</option>
                                                    <option value="Ahemdabad" @if($myempedit->city=='Ahemdabad')selected="selected"@endif>Ahemdabad</option>
                                                    <option value="Surat" @if($myempedit->city=='Surat')selected="selected"@endif>Surat</option>
                                                    <option value="Bharuch" @if($myempedit->city=='Bharuch')selected="selected"@endif>Bharuch</option>
                                                    <option value="other" @if($myempedit->city=='other')selected="selected"@endif>other</option>
                                                </select>
                                                @if($errors->first('city'))
                                                    <p class="text-danger"> {{$errors->first('city')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('state')) has-error @endif">
                                            <div class="form-group">
                                                <label>State</label>
                                                <select  id="state" name="state" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="Gujarat" @if($myempedit->state=='Gujarat')selected="selected"@endif>Gujarat</option>
                                                    <option value="Karnantaka" @if($myempedit->state=='Karnantaka')selected="selected"@endif>Karnantaka</option>
                                                    <option value="Tamilnadu" @if($myempedit->state=='Tamilnadu')selected="selected"@endif>Tamilnadu</option>
                                                    <option value="Maharastra" @if($myempedit->state=='Maharastra')selected="selected"@endif>Maharastra</option>
                                                    <option value="other" @if($myempedit->state=='other')selected="selected"@endif>other</option>
                                                </select>
                                                @if($errors->first('state'))
                                                    <p class="text-danger"> {{$errors->first('state')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('country')) has-error @endif">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <select  id="country" name="country" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="India" @if($myempedit->country=='India')selected="selected"@endif>India</option>
                                                    <option value="Dubai" @if($myempedit->country=='Dubai')selected="selected"@endif>Dubai</option>
                                                    <option value="USA" @if($myempedit->country=='USA')selected="selected"@endif>USA</option>
                                                    <option value="other" @if($myempedit->country=='other')selected="selected"@endif>other</option>
                                                </select>
                                                @if($errors->first('country'))
                                                    <p class="text-danger"> {{$errors->first('country')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('homeTown')) has-error @endif">
                                            <div class="form-group">
                                                <label>Home Town</label>
                                                <input type="text" class="form-control" name="homeTown" placeholder="ex. Vadodara" id="homeTown"  value="{{$myempedit->hometown}}">
                                                @if($errors->first('homeTown'))
                                                    <p class="text-danger"> {{$errors->first('homeTown')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('meritalStatus')) has-error @endif">
                                            <div class="form-group">
                                                <label>Marital Status</label>
                                                <select  id="meritalStatus" name="meritalStatus" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="Single/Unmarrid" @if($myempedit->maritalstatus=='Single/Unmarrid')selected="selected"@endif>Single/Unmarrid</option>
                                                    <option value="Married" @if($myempedit->maritalstatus=='Married')selected="selected"@endif>Married</option>
                                                    <option value="Widowed" @if($myempedit->maritalstatus=='Widowed')selected="selected"@endif>Widowed</option>
                                                    <option value="Divorced" @if($myempedit->maritalstatus=='Divorced')selected="selected"@endif>Divorced</option>
                                                    <option value="Separated" @if($myempedit->maritalstatus=='Separated')selected="selected"@endif>Separated</option>
                                                    <option value="other" @if($myempedit->maritalstatus=='other')selected="selected"@endif>other</option>
                                                </select>
                                                @if($errors->first('meritalStatus'))
                                                    <p class="text-danger"> {{$errors->first('meritalStatus')}} </p>
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
                        <h3 class="box-title">Education Details</h3>
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
                                        <div class="col-md-12 @if($errors->first('postGraduate')) has-error @endif">
                                            <div class="form-group">
                                                <label>Post Graduate</label>
                                                <select  id="postGraduate" name="postGraduate" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="MCA" @if($myempedit->postgraduate=='MCA')selected="selected"@endif>MCA</option>
                                                    <option value="MSc.IT" @if($myempedit->postgraduate=='MSc.IT')selected="selected"@endif>MSc.IT</option>
                                                    <option value="MBA" @if($myempedit->postgraduate=='MBA')selected="selected"@endif>MBA</option>
                                                    <option value="Other" @if($myempedit->postgraduate=='Other')selected="selected"@endif>Other</option>
                                                </select>
                                                @if($errors->first('postGraduate'))
                                                    <p class="text-danger"> {{$errors->first('postGraduate')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('graduate')) has-error @endif">
                                            <div class="form-group">
                                                <label>Graduate</label>
                                                <select  id="graduate" name="graduate" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="BCA" @if($myempedit->graduate=='BCA')selected="selected"@endif>BCA</option>
                                                    <option value="BBA" @if($myempedit->graduate=='BBA')selected="selected"@endif>BBA</option>
                                                    <option value="B.Com" @if($myempedit->graduate=='B.Com')selected="selected"@endif>B.Com</option>
                                                    <option value="Other" @if($myempedit->graduate=='Other')selected="selected"@endif>Other</option>
                                                </select>
                                                @if($errors->first('graduate'))
                                                    <p class="text-danger"> {{$errors->first('graduate')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('classXII')) has-error @endif">
                                            <div class="form-group">
                                                <label>Class XII</label>
                                                <select id="classXII" name="classXII" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="GSHEB" @if($myempedit->classxii=='GSHEB')selected="selected"@endif>GSHEB</option>
                                                    <option value="CBSC" @if($myempedit->classxii=='CBSC')selected="selected"@endif>CBSC</option>
                                                    <option value="Other" @if($myempedit->classxii=='Other')selected="selected"@endif>Other</option>
                                                </select>
                                                @if($errors->first('classXII'))
                                                    <p class="text-danger"> {{$errors->first('classXII')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('classX')) has-error @endif">
                                            <div class="form-group">
                                                <label>Class X</label>
                                                <select  id="classx" name="classX" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="GSEB" @if($myempedit->classx=='GSEB')selected="selected"@endif>GSEB</option>
                                                    <option value="CBSC" @if($myempedit->classx=='CBSC')selected="selected"@endif>CBSC</option>
                                                    <option value="Other" @if($myempedit->classx=='Other')selected="selected"@endif>Other</option>
                                                </select>
                                                @if($errors->first('classX'))
                                                    <p class="text-danger"> {{$errors->first('classX')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('otherquli')) has-error @endif">
                                            <div class="form-group">
                                                <label>Other Qualification</label>
                                                {{$myempedit->otherque}}
                                                <input type="text" id="otherquli" name="otherquli" class="form-control" placeholder="ex. additional Course"  value="{{$myempedit->otherque}}">
                                                @if($errors->first('otherquli'))
                                                    <p class="text-danger"> {{$errors->first('otherquli')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 box-body">

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('industry')) has-error @endif">
                                            <div class="form-group">
                                                <label>Industry</label>
                                                <select  id="industry" name="industry" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="IT-Hardware & Networking" @if($myempedit->industry=='IT-Hardware & Networking')selected="selected"@endif>IT-Hardware & Networking</option>
                                                </select>
                                                @if($errors->first('industry'))
                                                    <p class="text-danger"> {{$errors->first('industry')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('preferredLocation')) has-error @endif">
                                            <div class="form-group">
                                                <label>Preferred Location</label>
                                                <select  id="preferredLocation" name="preferredLocation" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="Vadodara" @if($myempedit->preferredlocation=='Vadodara')selected="selected"@endif>Vadodara</option>
                                                    <option value="Anand" @if($myempedit->preferredlocation=='Anand')selected="selected"@endif>Anand</option>
                                                    <option value="Ahemdabad" @if($myempedit->preferredlocation=='Ahemdabad')selected="selected"@endif>Ahemdabad</option>
                                                    <option value="Surat" @if($myempedit->preferredlocation=='Surat')selected="selected"@endif>Surat</option>
                                                    <option value="Bharuch" @if($myempedit->preferredlocation=='Bharuch')selected="selected"@endif>Bharuch</option>
                                                    <option value="other" @if($myempedit->preferredlocation=='other')selected="selected"@endif>other</option>
                                                </select>
                                                @if($errors->first('preferredLocation'))
                                                    <p class="text-danger"> {{$errors->first('preferredLocation')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('experianceYear')) has-error @endif">
                                            <div class="form-group">
                                                <label>Total Expirience</label>
                                                <select  id="experianceYear" name="experianceYear" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="Fresher" @if($myempedit->expirienceyear=='Fresher')selected="selected"@endif>Fresher</option>
                                                    <option value="Month" @if($myempedit->expirienceyear=='Month')selected="selected"@endif>Month</option>
                                                    @for($i=1;$i<=15;$i++)
                                                        <option value="{{$i}}" @if($myempedit->expirienceyear==$i)selected="selected"@endif>{{$i}} Year</option>
                                                    @endfor
                                                </select>
                                                @if($errors->first('experianceYear'))
                                                    <p class="text-danger"> {{$errors->first('experianceYear')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('experianceMonth')) has-error @endif">
                                            <div class="form-group">
                                                <label>Expirience in Month</label>
                                                <select  id="experianceMonth" name="experianceMonth" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    @for($i=1;$i<=12;$i++)
                                                        <option value="{{$i}}" @if($myempedit->expiriencemonth==$i)selected="selected"@endif>{{$i}} Month</option>
                                                    @endfor
                                                </select>
                                                @if($errors->first('experianceMonth'))
                                                    <p class="text-danger"> {{$errors->first('experianceMonth')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('keySkill')) has-error @endif">
                                            <div class="form-group">
                                                <label>Key-Skill</label>
                                                <input type="text" class="form-control" name="keySkill" placeholder="ex. Android, .NET, PHP" id="keySkill" value="{{$myempedit->keyskill}}">
                                                @if($errors->first('keySkill'))
                                                    <p class="text-danger"> {{$errors->first('keySkill')}} </p>
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
                        <a href="{{route('employeeList')}}"><button type="submit" class="btn btn-primary">Cancel</button></a>
                    </div>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box -->

            </section>
            <!-- /.content -->
        </form>
    </div>
    <!-- /.content-wrapper -->
@endsection