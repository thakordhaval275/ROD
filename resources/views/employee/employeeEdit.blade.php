@extends('mainlayout')

@section('pageheader')
    Edit Profile
@endsection

@section('contain')
    <div class="profile-page">
        <div class="wrapper">
            <br><br><br><br><br><br><br>
            @if(Auth::user()->usertype==3)
                @foreach($editemp as $editemp)@endforeach
            @endif
            <form method="post" action="{{route('employeeUpdate')}}" enctype="multipart/form-data">
                <input type="hidden" name="userType" id="userType" value="{{Auth::user()->usertype}}">
                <input type="hidden" name="id" id="id"  @if(Auth::user()->usertype==3) value="{{$editemp->id}}" @endif>
                <input type="hidden" name="hiddenLogo" id="hiddenLogo" value="{{$editemp->logo}}">
                <input type="hidden" name="hiddenpdf" id="hiddenpdf" value="{{$editemp->resume}}">
                {{csrf_field()}}
                <div class="main main-raised">
                    <div class="profile-content">
                        <div class="container">
                            <div class="row">
                                <div class="profile">
                                    <div class="avatar">
                                        <img src="@if(Auth::user()->usertype==3)@if($editemp->logo==""){{ asset('assets/img/employee/default.png').'/'.$editemp->logo}} @else {{ asset('assets/img/employee/').'/'.$editemp->logo}} @endif @endif"  alt="Circle Image" class="img-circle img-responsive img-raised"><br>
                                        <input type="file" class="text-center center-block well well-sm" name="empProfile">
                                    </div>
                                    <div class="name">
                                        <h3 class="title">@if($editemp->firstname!="" && $editemp->lastname!="") {{$editemp->firstname}} {{$editemp->lastname}} @else {{$editemp->emailid}} @endif</h3>
                                        <h6>{{$editemp->keyskill}}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="description text-center @if($errors->first('aboutMe')) has-error @endif">
                                <textarea id="aboutMe" name="aboutMe" class="form-control" placeholder="About Yourself" rows="4">@if(Auth::user()->usertype==3) {{$editemp->aboutself}} @endif</textarea>
                                @if($errors->first('aboutMe'))
                                    <p class="text-danger"> {{$errors->first('aboutMe')}} </p>
                                @endif
                            </div>
                        </div>
                        <div class="container-fluid">
                            <br><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <div class="panel panel-danger">
                                            <div class="panel-heading">Personal Details</div>
                                                <div class="panel-body">
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-12 @if($errors->first('firstName')) has-error @endif">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>First Name</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <input type="text" class="form-control" name="firstName" placeholder="ex. John" id="firstName" @if(Auth::user()->usertype==3) value="{{$editemp->firstname}}" @endif>
                                                                @if($errors->first('firstName'))
                                                                    <p class="text-danger"> {{$errors->first('firstName')}} </p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12 @if($errors->first('lastName')) has-error @endif">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Last Name</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <input type="text" class="form-control" name="lastName" placeholder="ex. Christian" id="lastName"  @if(Auth::user()->usertype==3) value="{{$editemp->lastname}}"@endif>
                                                                @if($errors->first('lastName'))
                                                                    <p class="text-danger"> {{$errors->first('lastName')}} </p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12 @if($errors->first('address')) has-error @endif">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Address</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <textarea type="text" class="form-control" name="address" placeholder="ex. B/20 Shivam Tenament, Nr. Air Force" id="address">@if(Auth::user()->usertype==3){{$editemp->address}}@endif</textarea>
                                                                @if($errors->first('address'))
                                                                    <p class="text-danger"> {{$errors->first('address')}} </p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12 @if($errors->first('pincode')) has-error @endif">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Pincode</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <input type="text" class="form-control" name="pincode" placeholder="ex. 390010" id="pincode" @if(Auth::user()->usertype==3)  value="{{$editemp->pincode}}"@endif>
                                                                @if($errors->first('pincode'))
                                                                    <p class="text-danger"> {{$errors->first('pincode')}} </p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12 @if($errors->first('gender')) has-error @endif">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Gender</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <div class="form-group">
                                                                    <input type="radio" name="gender" value="Male" @if(Auth::user()->usertype==3) value="Male" @if($editemp->gender=='Male')checked="checked" @endif @endif>&nbsp;<strong>Male</strong>
                                                                    &nbsp;&nbsp;
                                                                    <input type="radio" name="gender" value="Female" @if(Auth::user()->usertype==3) value="Female" @if($editemp->gender=='Female')checked="checked" @endif @endif>&nbsp;<strong>Female</strong>
                                                                </div>
                                                                @if($errors->first('gender'))
                                                                    <p class="text-danger"> {{$errors->first('gender')}} </p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12 @if($errors->first('birthdate')) has-error @endif">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Birthdate</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <input type="date" class="form-control" name="birthdate" id="birthdate" @if(Auth::user()->usertype==3) value="{{$editemp->bdate}}"@endif>
                                                                @if($errors->first('birthdate'))
                                                                    <p class="text-danger"> {{$errors->first('birthdate')}} </p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12 @if($errors->first('contectNo')) has-error @endif">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Contect No.</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <input type="tel" class="form-control" name="contectNo" placeholder="ex. +912345248951" id="contectno" maxlength="15"  @if(Auth::user()->usertype==3) value="{{$editemp->contectno}}"@endif>
                                                                @if($errors->first('contectNo'))
                                                                    <p class="text-danger"> {{$errors->first('contectNo')}} </p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12 @if($errors->first('email')) has-error @endif">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Email Id</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <input type="email" class="form-control" name="email" placeholder="ex. abc@gmail.com" id="email" value="{{Auth::user()->email}}" readonly>
                                                                @if($errors->first('email'))
                                                                    <p class="text-danger"> {{$errors->first('email')}} </p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12 @if($errors->first('city')) has-error @endif">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>City</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <div class="search-category-container">
                                                                    <select id="city" name="city" class="form-control dropdown-product selectpicker">
                                                                        <option value="">Select</option>
                                                                        <option value="Vadodara" @if(Auth::user()->usertype==3) value="Vadodara" @if($editemp->city=='Vadodara')selected="selected" @endif @endif>Vadodara</option>
                                                                        <option value="Anand" @if(Auth::user()->usertype==3) value="Anand" @if($editemp->city=='Anand')selected="selected" @endif @endif>Anand</option>
                                                                        <option value="Ahemdabad" @if(Auth::user()->usertype==3) value="Ahemdabad" @if($editemp->city=='Ahemdabad')selected="selected" @endif @endif>Ahemdabad</option>
                                                                        <option value="Surat" @if(Auth::user()->usertype==3) value="Surat" @if($editemp->city=='Surat')selected="selected" @endif @endif>Surat</option>
                                                                        <option value="Bharuch" @if(Auth::user()->usertype==3) value="Bharuch" @if($editemp->city=='Bharuch')selected="selected" @endif @endif>Bharuch</option>
                                                                        <option value="other" @if(Auth::user()->usertype==3) value="other" @if($editemp->city=='other')selected="selected" @endif @endif>other</option>
                                                                    </select>
                                                                </div>
                                                                @if($errors->first('city'))
                                                                    <p class="text-danger"> {{$errors->first('city')}} </p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12 @if($errors->first('state')) has-error @endif">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>State</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <select id="state" name="state" class="form-control dropdown-product selectpicker">
                                                                    <option value="">Select</option>
                                                                    <option value="Gujarat" @if(Auth::user()->usertype==3) value="Gujarat" @if($editemp->state=='Gujarat')selected="selected" @endif @endif>Gujarat</option>
                                                                    <option value="Karnantaka" @if(Auth::user()->usertype==3) value="Karnantaka" @if($editemp->state=='Karnantaka')selected="selected" @endif @endif>Karnantaka</option>
                                                                    <option value="Tamilnadu" @if(Auth::user()->usertype==3) value="Tamilnadu" @if($editemp->state=='Tamilnadu')selected="selected" @endif @endif>Tamilnadu</option>
                                                                    <option value="Maharastra" @if(Auth::user()->usertype==3) value="Maharastra" @if($editemp->state=='Maharastra')selected="selected" @endif @endif>Maharastra</option>
                                                                    <option value="other" @if(Auth::user()->usertype==3) value="other" @if($editemp->state=='other')selected="selected" @endif @endif>other</option>
                                                                </select>
                                                                @if($errors->first('state'))
                                                                    <p class="text-danger"> {{$errors->first('state')}} </p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12 @if($errors->first('country')) has-error @endif">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Country</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <select id="country" name="country" class="form-control dropdown-product selectpicker">
                                                                    <option value="">Select</option>
                                                                    <option value="India" @if(Auth::user()->usertype==3) value="India" @if($editemp->country=='India')selected="selected" @endif @endif>India</option>
                                                                    <option value="Dubai"@if(Auth::user()->usertype==3) value="Dubai" @if($editemp->country=='Dubai')selected="selected" @endif @endif>Dubai</option>
                                                                    <option value="USA" @if(Auth::user()->usertype==3) value="USA" @if($editemp->country=='USA')selected="selected" @endif @endif>USA</option>
                                                                    <option value="other" @if(Auth::user()->usertype==3) value="other" @if($editemp->country=='other')selected="selected" @endif @endif>other</option>
                                                                </select>
                                                                @if($errors->first('country'))
                                                                    <p class="text-danger"> {{$errors->first('country')}} </p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12 @if($errors->first('homeTown')) has-error @endif">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Home Town</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <input type="text" class="form-control" name="homeTown" placeholder="ex. Vadodara" id="homeTown" @if(Auth::user()->usertype==3)value="{{$editemp->hometown}}" @endif>
                                                                @if($errors->first('homeTown'))
                                                                    <p class="text-danger"> {{$errors->first('homeTown')}} </p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12 @if($errors->first('meritalStatus')) has-error @endif">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Merital Status</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <select id="meritalStatus" name="meritalStatus" class="form-control dropdown-product selectpicker">
                                                                    <option value="">Select</option>
                                                                    <option value="Single/Unmarrid" @if(Auth::user()->usertype==3)value="Single/Unmarrid" @if($editemp->maritalstatus=='Single/Unmarrid')selected="selected" @endif @endif>Single/Unmarrid</option>
                                                                    <option value="Married" @if(Auth::user()->usertype==3) value="Married" @if($editemp->maritalstatus=='Married')selected="selected" @endif @endif>Married</option>
                                                                    <option value="Widowed" @if(Auth::user()->usertype==3) value="Widowed" @if($editemp->maritalstatus=='Widowed')selected="selected" @endif @endif>Widowed</option>
                                                                    <option value="Divorced" @if(Auth::user()->usertype==3) value="Divorced" @if($editemp->maritalstatus=='Divorced')selected="selected" @endif @endif>Divorced</option>
                                                                    <option value="Separated" @if(Auth::user()->usertype==3) value="Separated" @if($editemp->maritalstatus=='Separated')selected="selected" @endif @endif>Separated</option>
                                                                    <option value="other" @if(Auth::user()->usertype==3) value="other" @if($editemp->maritalstatus=='other')selected="selected" @endif @endif>other</option>
                                                                </select>
                                                                @if($errors->first('meritalStatus'))
                                                                    <p class="text-danger"> {{$errors->first('meritalStatus')}} </p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                </div>
                                            </div><br>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="panel panel-danger">
                                                <div class="panel-heading">Education Details</div>
                                                <div class="panel-body">
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-12 ">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Qualification</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <div class="row">
                                                                    <div class="col-md-12 @if($errors->first('postGraduate')) has-error @endif">
                                                                        <h6>Post Graduate</h6>
                                                                        <select id="postGraduate" name="postGraduate" class="form-control dropdown-product selectpicker">
                                                                            <option value="">Select</option>
                                                                            <option value="MCA" @if(Auth::user()->usertype==3) value="MCA" @if($editemp->postgraduate=='MCA')selected="selected" @endif @endif>MCA</option>
                                                                            <option value="MSc.IT" @if(Auth::user()->usertype==3) value="MSc.IT" @if($editemp->postgraduate=='MSc.IT')selected="selected" @endif @endif>MSc.IT</option>
                                                                            <option value="MBA" @if(Auth::user()->usertype==3) value="MBA" @if($editemp->postgraduate=='MBA')selected="selected" @endif @endif>MBA</option>
                                                                            <option value="Other"@if(Auth::user()->usertype==3) value="Other" @if($editemp->postgraduate=='Other')selected="selected" @endif @endif>Other</option>
                                                                        </select>
                                                                        @if($errors->first('postGraduate'))
                                                                            <p class="text-danger"> {{$errors->first('postGraduate')}} </p>
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12 @if($errors->first('graduate')) has-error @endif">
                                                                        <h6>Graduate</h6>
                                                                        <select id="graduate" name="graduate" class="form-control dropdown-product selectpicker">
                                                                            <option value="">Select</option>
                                                                            <option value="BCA"@if(Auth::user()->usertype==3) value="BCA" @if($editemp->graduate=='BCA')selected="selected" @endif @endif>BCA</option>
                                                                            <option value="BBA" @if(Auth::user()->usertype==3) value="BBA" @if($editemp->graduate=='BBA')selected="selected" @endif @endif>BBA</option>
                                                                            <option value="B.Com" @if(Auth::user()->usertype==3) value="B.Com" @if($editemp->graduate=='B.Com')selected="selected" @endif @endif>B.Com</option>
                                                                            <option value="Other" @if(Auth::user()->usertype==3) value="Other" @if($editemp->graduate=='Other')selected="selected" @endif @endif>Other</option>
                                                                        </select>
                                                                        @if($errors->first('graduate'))
                                                                            <p class="text-danger"> {{$errors->first('graduate')}} </p>
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12 @if($errors->first('classXII')) has-error @endif">
                                                                        <h6>Class XII</h6>
                                                                        <select id="classXII" name="classXII" class="form-control dropdown-product selectpicker">
                                                                            <option value="">Select</option>
                                                                            <option value="GSHEB" @if(Auth::user()->usertype==3) value="GSHEB" @if($editemp->classxii=='GSHEB')selected="selected" @endif @endif>GSHEB</option>
                                                                            <option value="CBSC" @if(Auth::user()->usertype==3) value="CBSC" @if($editemp->classxii=='CBSC')selected="selected" @endif @endif>CBSC</option>
                                                                            <option value="Other" @if(Auth::user()->usertype==3) value="Other" @if($editemp->classxii=='Other')selected="selected" @endif @endif>Other</option>
                                                                        </select>
                                                                        @if($errors->first('classXII'))
                                                                            <p class="text-danger"> {{$errors->first('classXII')}} </p>
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12 @if($errors->first('classX')) has-error @endif">
                                                                        <h6>Class X</h6>
                                                                        <select id="classx" name="classX" class="form-control dropdown-product selectpicker">
                                                                            <option value="">Select</option>
                                                                            <option value="GSEB" @if(Auth::user()->usertype==3)value="GSEB" @if($editemp->classx=='GSEB')selected="selected" @endif @endif>GSEB</option>
                                                                            <option value="CBSC" @if(Auth::user()->usertype==3) value="CBSC" @if($editemp->classx=='CBSC')selected="selected" @endif @endif>CBSC</option>
                                                                            <option value="Other" @if(Auth::user()->usertype==3) value="Other" @if($editemp->classx=='Other')selected="selected" @endif @endif>Other</option>
                                                                        </select>
                                                                        @if($errors->first('classX'))
                                                                            <p class="text-danger"> {{$errors->first('classX')}} </p>
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <h6>Other Qualification</h6>
                                                                        <input type="text" id="otherquli" name="otherquli" class="form-control" placeholder="ex. additional Course"  @if(Auth::user()->usertype==3) value="{{$editemp->otherque}}"@endif>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><br><br>
                                                    </div>
                                                </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12 @if($errors->first('industry')) has-error @endif">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Industry</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <select id="industry" name="industry" class="form-control dropdown-product selectpicker">
                                                                    <option value="">Select</option>
                                                                    <option value="IT-Hardware & Networking" @if(Auth::user()->usertype==3)value="IT-Hardware & Networking" @if($editemp->industry=='IT-Hardware & Networking')selected="selected" @endif @endif>IT-Hardware & Networking</option>
                                                                </select>
                                                                @if($errors->first('industry'))
                                                                    <p class="text-danger"> {{$errors->first('industry')}} </p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12 @if($errors->first('preferredLocation')) has-error @endif">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Preferred Location</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <div class="search-category-container">
                                                                    <select id="preferredLocation" name="preferredLocation" class="form-control dropdown-product selectpicker">
                                                                        <option value="">Select</option>
                                                                        <option value="Vadodara" @if(Auth::user()->usertype==3) value="Vadodara" @if($editemp->preferredlocation=='Vadodara')selected="selected" @endif @endif>Vadodara</option>
                                                                        <option value="Anand" @if(Auth::user()->usertype==3) value="Anand" @if($editemp->preferredlocation=='Anand')selected="selected" @endif @endif>Anand</option>
                                                                        <option value="Ahemdabad" @if(Auth::user()->usertype==3) value="Ahemdabad" @if($editemp->preferredlocation=='Ahemdabad')selected="selected" @endif @endif>Ahemdabad</option>
                                                                        <option value="Surat" @if(Auth::user()->usertype==3) value="Surat" @if($editemp->preferredlocation=='Surat')selected="selected" @endif @endif>Surat</option>
                                                                        <option value="Bharuch" @if(Auth::user()->usertype==3) value="Bharuch" @if($editemp->preferredlocation=='Bharuch')selected="selected" @endif @endif>Bharuch</option>
                                                                        <option value="other" @if(Auth::user()->usertype==3) value="other" @if($editemp->preferredlocation=='other')selected="selected" @endif @endif>other</option>
                                                                    </select>
                                                                    @if($errors->first('preferredLocation'))
                                                                        <p class="text-danger"> {{$errors->first('preferredLocation')}} </p>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>


                                                    <div class="row">
                                                        <div class="col-md-12 @if($errors->first('experianceYear')) has-error @endif">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Total Expirience</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <div class="search-category-container">
                                                                    <select id="experianceYear" name="experianceYear" class="form-control dropdown-product selectpicker">
                                                                        <option value="">Select</option>
                                                                        <option value="Fresher" @if(Auth::user()->usertype==3) value="Fresher" @if($editemp->expirienceyear=='Fresher')selected="selected" @endif @endif>Fresher</option>
                                                                        <option value="Month" @if(Auth::user()->usertype==3) value="Month" @if($editemp->expirienceyear=='Month')selected="selected" @endif @endif>Month</option>
                                                                        @for($i=1;$i<=15;$i++)
                                                                            <option value="{{$i}}" @if(Auth::user()->usertype==3) value="{{$i}}" @if($editemp->expirienceyear==$i)selected="selected" @endif @endif>{{$i}} Year</option>
                                                                        @endfor
                                                                    </select>
                                                                </div>
                                                                @if($errors->first('experianceYear'))
                                                                    <p class="text-danger"> {{$errors->first('experianceYear')}} </p>
                                                                @endif

                                                                <div class="search-category-container">
                                                                    <select id="experianceMonth" name="experianceMonth" class="form-control dropdown-product selectpicker">
                                                                        <option value="">Select</option>
                                                                        @for($i=1;$i<=12;$i++)
                                                                            <option value="{{$i}}" @if(Auth::user()->usertype==3) value="{{$i}}" @if($editemp->expiriencemonth==$i)selected="selected" @endif @endif>{{$i}} Month</option>
                                                                        @endfor
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12 @if($errors->first('keySkill')) has-error @endif">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Key-Skill</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <input type="text" class="form-control" name="keySkill" placeholder="ex. Android, .NET, PHP" id="keySkill"  @if(Auth::user()->usertype==3) value="{{$editemp->keyskill}}"@endif>
                                                                @if($errors->first('keySkill'))
                                                                    <p class="text-danger"> {{$errors->first('keySkill')}} </p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                @if($editemp->resume!="")
                                                                    <h4>Resume</h4><br>
                                                                @endif
                                                                <h4>Upload Resume</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                @if($editemp->resume!="")
                                                                    <h4>:</h4><br>
                                                                @endif
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                @if($editemp->resume!="")
                                                                    <a href="{{asset('assets/pdf/resume').'/'.$editemp->resume}}" target="_blank"><u> Open File!</u></a><br><br>
                                                                @endif
                                                                <input type="file" class="text-left well well-sm" name="resume" @if(Auth::user()->usertype==3) value="{{$editemp->resume}}"@endif>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                </div>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-common">Save</button>
                                    <a id="cancel" name="cancel" class="btn btn-common" href="{{route('employeeProfile')}}">Back</a>
                                </div>
                            </div>
                        </div><br><br><br>
                    </div>
                </form>
            </div>
        </div>
    <br><br>
@endsection
