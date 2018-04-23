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
                                                                            <option value="CA" @if(Auth::user()->usertype==3) value="CA" @if($editemp->postgraduate=='CA')selected="selected" @endif @endif>CA</option>
                                                                            <option value="CS" @if(Auth::user()->usertype==3) value="CS" @if($editemp->postgraduate=='CS')selected="selected" @endif @endif>CS</option>
                                                                            <option value="ICWA (CMA)" @if(Auth::user()->usertype==3) value="ICWA (CMA)" @if($editemp->postgraduate=='ICWA (CMA)')selected="selected" @endif @endif>ICWA (CMA)</option>
                                                                            <option value="Integrated PG" @if(Auth::user()->usertype==3) value="Integrated PG" @if($editemp->postgraduate=='Integrated PG')selected="selected" @endif @endif>Integrated PG</option>
                                                                            <option value="LLM" @if(Auth::user()->usertype==3) value="LLM" @if($editemp->postgraduate=='LLM')selected="selected" @endif @endif>LLM</option>
                                                                            <option value="M.A" @if(Auth::user()->usertype==3) value="M.A" @if($editemp->postgraduate=='M.A')selected="selected" @endif @endif>M.A</option>
                                                                            <option value="M.Arch" @if(Auth::user()->usertype==3) value="M.Arch" @if($editemp->postgraduate=='M.Arch')selected="selected" @endif @endif>M.Arch</option>
                                                                            <option value="M.Com" @if(Auth::user()->usertype==3) value="M.Com" @if($editemp->postgraduate=='M.Com')selected="selected" @endif @endif>M.Com</option>
                                                                            <option value="M.Ed" @if(Auth::user()->usertype==3) value="M.Ed" @if($editemp->postgraduate=='M.Ed')selected="selected" @endif @endif>M.Ed</option>
                                                                            <option value="M.Pharma" @if(Auth::user()->usertype==3) value="M.Pharma" @if($editemp->postgraduate=='M.Pharma')selected="selected" @endif @endif>M.Pharma</option>
                                                                            <option value="MS / M.Sc(Science)" @if(Auth::user()->usertype==3) value="MS / M.Sc(Science)" @if($editemp->postgraduate=='MS / M.Sc(Science)')selected="selected" @endif @endif>MS / M.Sc(Science)</option>
                                                                            <option value="M.Tech" @if(Auth::user()->usertype==3) value="M.Tech" @if($editemp->postgraduate=='M.Tech')selected="selected" @endif @endif>M.Tech</option>
                                                                            <option value="MBA / PGDM" @if(Auth::user()->usertype==3) value="MBA / PGDM" @if($editemp->postgraduate=='MBA / PGDM')selected="selected" @endif @endif>MBA / PGDM</option>
                                                                            <option value="MBA / PGDM" @if(Auth::user()->usertype==3) value="MBA / PGDM" @if($editemp->postgraduate=='MBA / PGDM')selected="selected" @endif @endif>MBA / PGDM</option>
                                                                            <option value="MCA" @if(Auth::user()->usertype==3) value="MCA" @if($editemp->postgraduate=='MCA')selected="selected" @endif @endif>MCA</option>
                                                                            <option value="Medical-MS / MD" @if(Auth::user()->usertype==3) value="Medical-MS / MD" @if($editemp->postgraduate=='Medical-MS / MD')selected="selected" @endif @endif>Medical-MS / MD</option>
                                                                            <option value="PG Diploma" @if(Auth::user()->usertype==3) value="PG Diploma" @if($editemp->postgraduate=='PG Diploma')selected="selected" @endif @endif>PG Diploma</option>
                                                                            <option value="MVSC" @if(Auth::user()->usertype==3) value="MVSC" @if($editemp->postgraduate=='MVSC')selected="selected" @endif @endif>MVSC</option>
                                                                            <option value="MCM" @if(Auth::user()->usertype==3) value="MCM" @if($editemp->postgraduate=='MCM')selected="selected" @endif @endif>MCM</option>
                                                                            <option value="MDS" @if(Auth::user()->usertype==3) value="MDS" @if($editemp->postgraduate=='MDS')selected="selected" @endif @endif>MDS</option>
                                                                            <option value="MFA" @if(Auth::user()->usertype==3) value="MFA" @if($editemp->postgraduate=='MFA')selected="selected" @endif @endif>MFA</option>
                                                                            <option value="M.Des." @if(Auth::user()->usertype==3) value="M.Des." @if($editemp->postgraduate=='M.Des.')selected="selected" @endif @endif>M.Des.</option>
                                                                            <option value="DM" @if(Auth::user()->usertype==3) value="DM" @if($editemp->postgraduate=='DM')selected="selected" @endif @endif>DM</option>
                                                                            <option value="M.Ch" @if(Auth::user()->usertype==3) value="M.Ch" @if($editemp->postgraduate=='M.Ch')selected="selected" @endif @endif>M.Ch</option>
                                                                            <option value="M.Ch" @if(Auth::user()->usertype==3) value="M.Ch" @if($editemp->postgraduate=='M.Ch')selected="selected" @endif @endif>M.Ch</option>
                                                                            <option value="MSc.IT" @if(Auth::user()->usertype==3) value="MSc.IT" @if($editemp->postgraduate=='MSc.IT')selected="selected" @endif @endif>MSc.IT</option>
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
                                                                            <option value="B.A"@if(Auth::user()->usertype==3) value="B.A" @if($editemp->graduate=='B.A')selected="selected" @endif @endif>B.A</option>
                                                                            <option value="B.Arch"@if(Auth::user()->usertype==3) value="B.Arch" @if($editemp->graduate=='B.Arch')selected="selected" @endif @endif>B.Arch</option>
                                                                            <option value="BCA"@if(Auth::user()->usertype==3) value="BCA" @if($editemp->graduate=='BCA')selected="selected" @endif @endif>BCA</option>
                                                                            <option value="B.B.A /  B.M.S" @if(Auth::user()->usertype==3) value="B.B.A /  B.M.S" @if($editemp->graduate=='B.B.A /  B.M.S')selected="selected" @endif @endif>B.B.A /  B.M.S</option>
                                                                            <option value="B.Com" @if(Auth::user()->usertype==3) value="B.Com" @if($editemp->graduate=='B.Com')selected="selected" @endif @endif>B.Com</option>
                                                                            <option value="B.Ed" @if(Auth::user()->usertype==3) value="B.Ed" @if($editemp->graduate=='B.Ed')selected="selected" @endif @endif>B.Ed</option>
                                                                            <option value="BDS" @if(Auth::user()->usertype==3) value="BDS" @if($editemp->graduate=='BDS')selected="selected" @endif @endif>BDS</option>
                                                                            <option value="BHM" @if(Auth::user()->usertype==3) value="BHM" @if($editemp->graduate=='BHM')selected="selected" @endif @endif>BHM</option>
                                                                            <option value="B.Pharma" @if(Auth::user()->usertype==3) value="B.Pharma" @if($editemp->graduate=='B.Pharma')selected="selected" @endif @endif>B.Pharma</option>
                                                                            <option value="B.Sc" @if(Auth::user()->usertype==3) value="B.Sc" @if($editemp->graduate=='B.Sc')selected="selected" @endif @endif>B.Sc</option>
                                                                            <option value="B.Tech / B.E." @if(Auth::user()->usertype==3) value="B.Tech / B.E." @if($editemp->graduate=='B.Tech / B.E.')selected="selected" @endif @endif>B.Tech / B.E.</option>
                                                                            <option value="LLB" @if(Auth::user()->usertype==3) value="LLB" @if($editemp->graduate=='LLB')selected="selected" @endif @endif>LLB</option>
                                                                            <option value="MBBS" @if(Auth::user()->usertype==3) value="MBBS" @if($editemp->graduate=='MBBS')selected="selected" @endif @endif>MBBS</option>
                                                                            <option value="Diploma" @if(Auth::user()->usertype==3) value="Diploma" @if($editemp->graduate=='Diploma')selected="selected" @endif @endif>Diploma</option>
                                                                            <option value="BVSC" @if(Auth::user()->usertype==3) value="BVSC" @if($editemp->graduate=='BVSC')selected="selected" @endif @endif>BVSC</option>
                                                                            <option value="BAMS" @if(Auth::user()->usertype==3) value="BAMS" @if($editemp->graduate=='BAMS')selected="selected" @endif @endif>BAMS</option>
                                                                            <option value="BHMS" @if(Auth::user()->usertype==3) value="BHMS" @if($editemp->graduate=='BHMS')selected="selected" @endif @endif>BHMS</option>
                                                                            <option value="B.El.Ed" @if(Auth::user()->usertype==3) value="B.El.Ed" @if($editemp->graduate=='B.El.Ed')selected="selected" @endif @endif>B.El.Ed</option>
                                                                            <option value="B.P.Ed" @if(Auth::user()->usertype==3) value="B.P.Ed" @if($editemp->graduate=='B.P.Ed')selected="selected" @endif @endif>B.P.Ed</option>
                                                                            <option value="B.Des." @if(Auth::user()->usertype==3) value="B.Des." @if($editemp->graduate=='B.Des.')selected="selected" @endif @endif>B.Des.</option>
                                                                            <option value="BFA" @if(Auth::user()->usertype==3) value="BFA" @if($editemp->graduate=='BFA')selected="selected" @endif @endif>BFA</option>
                                                                            <option value="B.U.M.S" @if(Auth::user()->usertype==3) value="B.U.M.S" @if($editemp->graduate=='B.U.M.S')selected="selected" @endif @endif>B.U.M.S</option>
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
                                                                            <option value="">--- All India ---</option>
                                                                            <option value="CBSE" @if(Auth::user()->usertype==3) value="CBSE" @if($editemp->classxii=='CBSE')selected="selected" @endif @endif>CBSE</option>
                                                                            <option value="CISCE(ICSE / ISC)" @if(Auth::user()->usertype==3) value="CISCE(ICSE / ISC)" @if($editemp->classxii=='CISCE(ICSE / ISC)')selected="selected" @endif @endif>CISCE(ICSE / ISC)</option>
                                                                            <option value="Diploma" @if(Auth::user()->usertype==3) value="Diploma" @if($editemp->classxii=='Diploma')selected="selected" @endif @endif>Diploma</option>
                                                                            <option value="National Open School" @if(Auth::user()->usertype==3) value="National Open School" @if($editemp->classxii=='National Open School')selected="selected" @endif @endif>National Open School</option>
                                                                            <option value="">--- State Boards ---</option>
                                                                            <option value="Andhra Pradesh" @if(Auth::user()->usertype==3) value="Andhra Pradesh" @if($editemp->classxii=='Andhra Pradesh')selected="selected" @endif @endif>Andhra Pradesh</option>
                                                                            <option value="Assam" @if(Auth::user()->usertype==3) value="Assam" @if($editemp->classxii=='Assam')selected="selected" @endif @endif>Assam</option>
                                                                            <option value="Bihar" @if(Auth::user()->usertype==3) value="Bihar" @if($editemp->classxii=='Bihar')selected="selected" @endif @endif>Bihar</option>
                                                                            <option value="Goa" @if(Auth::user()->usertype==3) value="Goa" @if($editemp->classxii=='Goa')selected="selected" @endif @endif>Goa</option>
                                                                            <option value="Gujarat" @if(Auth::user()->usertype==3) value="Gujarat" @if($editemp->classxii=='Gujarat')selected="selected" @endif @endif>Gujarat</option>
                                                                            <option value="Haryana" @if(Auth::user()->usertype==3) value="Haryana" @if($editemp->classxii=='Haryana')selected="selected" @endif @endif>Haryana</option>
                                                                            <option value="Himachal Pradesh" @if(Auth::user()->usertype==3) value="Himachal Pradesh" @if($editemp->classxii=='Himachal Pradesh')selected="selected" @endif @endif>Himachal Pradesh</option>
                                                                            <option value="Karnataka" @if(Auth::user()->usertype==3) value="Karnataka" @if($editemp->classxii=='Karnataka')selected="selected" @endif @endif>Karnataka</option>
                                                                            <option value="Kerala" @if(Auth::user()->usertype==3) value="Kerala" @if($editemp->classxii=='Kerala')selected="selected" @endif @endif>Kerala</option>
                                                                            <option value="Maharashtra" @if(Auth::user()->usertype==3) value="Maharashtra" @if($editemp->classxii=='Maharashtra')selected="selected" @endif @endif>Maharashtra</option>
                                                                            <option value="Madhya Pradesh" @if(Auth::user()->usertype==3) value="Madhya Pradesh" @if($editemp->classxii=='Madhya Pradesh')selected="selected" @endif @endif>Madhya Pradesh</option>
                                                                            <option value="Manipur" @if(Auth::user()->usertype==3) value="Manipur" @if($editemp->classxii=='Manipur')selected="selected" @endif @endif>Manipur</option>
                                                                            <option value="Meghalaya" @if(Auth::user()->usertype==3) value="Meghalaya" @if($editemp->classxii=='Meghalaya')selected="selected" @endif @endif>Meghalaya</option>
                                                                            <option value="Mizoram" @if(Auth::user()->usertype==3) value="Mizoram" @if($editemp->classxii=='Mizoram')selected="selected" @endif @endif>Mizoram</option>
                                                                            <option value="Nagaland" @if(Auth::user()->usertype==3) value="Nagaland" @if($editemp->classxii=='Nagaland')selected="selected" @endif @endif>Nagaland</option>
                                                                            <option value="Orissa" @if(Auth::user()->usertype==3) value="Orissa" @if($editemp->classxii=='Orissa')selected="selected" @endif @endif>Orissa</option>
                                                                            <option value="Punjab" @if(Auth::user()->usertype==3) value="Punjab" @if($editemp->classxii=='Punjab')selected="selected" @endif @endif>Punjab</option>
                                                                            <option value="Rajasthan" @if(Auth::user()->usertype==3) value="Rajasthan" @if($editemp->classxii=='Rajasthan')selected="selected" @endif @endif>Rajasthan</option>
                                                                            <option value="Tripura" @if(Auth::user()->usertype==3) value="Tripura" @if($editemp->classxii=='Tripura')selected="selected" @endif @endif>Tripura</option>
                                                                            <option value="Uttar Pradesh" @if(Auth::user()->usertype==3) value="Uttar Pradesh" @if($editemp->classxii=='Uttar Pradesh')selected="selected" @endif @endif>Uttar Pradesh</option>
                                                                            <option value="West Bengal" @if(Auth::user()->usertype==3) value="West Bengal" @if($editemp->classxii=='West Bengal')selected="selected" @endif @endif>West Bengal</option>
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
                                                                            <option value="">--- All India ---</option>
                                                                            <option value="CBSE" @if(Auth::user()->usertype==3) value="CBSE" @if($editemp->classxii=='CBSE')selected="selected" @endif @endif>CBSE</option>
                                                                            <option value="CISCE(ICSE / ISC)" @if(Auth::user()->usertype==3) value="CISCE(ICSE / ISC)" @if($editemp->classxii=='CISCE(ICSE / ISC)')selected="selected" @endif @endif>CISCE(ICSE / ISC)</option>
                                                                            <option value="Diploma" @if(Auth::user()->usertype==3) value="Diploma" @if($editemp->classxii=='Diploma')selected="selected" @endif @endif>Diploma</option>
                                                                            <option value="National Open School" @if(Auth::user()->usertype==3) value="National Open School" @if($editemp->classxii=='National Open School')selected="selected" @endif @endif>National Open School</option>
                                                                            <option value="">--- State Boards ---</option>
                                                                            <option value="Andhra Pradesh" @if(Auth::user()->usertype==3) value="Andhra Pradesh" @if($editemp->classxii=='Andhra Pradesh')selected="selected" @endif @endif>Andhra Pradesh</option>
                                                                            <option value="Assam" @if(Auth::user()->usertype==3) value="Assam" @if($editemp->classxii=='Assam')selected="selected" @endif @endif>Assam</option>
                                                                            <option value="Bihar" @if(Auth::user()->usertype==3) value="Bihar" @if($editemp->classxii=='Bihar')selected="selected" @endif @endif>Bihar</option>
                                                                            <option value="Goa" @if(Auth::user()->usertype==3) value="Goa" @if($editemp->classxii=='Goa')selected="selected" @endif @endif>Goa</option>
                                                                            <option value="Gujarat" @if(Auth::user()->usertype==3) value="Gujarat" @if($editemp->classxii=='Gujarat')selected="selected" @endif @endif>Gujarat</option>
                                                                            <option value="Haryana" @if(Auth::user()->usertype==3) value="Haryana" @if($editemp->classxii=='Haryana')selected="selected" @endif @endif>Haryana</option>
                                                                            <option value="Himachal Pradesh" @if(Auth::user()->usertype==3) value="Himachal Pradesh" @if($editemp->classxii=='Himachal Pradesh')selected="selected" @endif @endif>Himachal Pradesh</option>
                                                                            <option value="Karnataka" @if(Auth::user()->usertype==3) value="Karnataka" @if($editemp->classxii=='Karnataka')selected="selected" @endif @endif>Karnataka</option>
                                                                            <option value="Kerala" @if(Auth::user()->usertype==3) value="Kerala" @if($editemp->classxii=='Kerala')selected="selected" @endif @endif>Kerala</option>
                                                                            <option value="Maharashtra" @if(Auth::user()->usertype==3) value="Maharashtra" @if($editemp->classxii=='Maharashtra')selected="selected" @endif @endif>Maharashtra</option>
                                                                            <option value="Madhya Pradesh" @if(Auth::user()->usertype==3) value="Madhya Pradesh" @if($editemp->classxii=='Madhya Pradesh')selected="selected" @endif @endif>Madhya Pradesh</option>
                                                                            <option value="Manipur" @if(Auth::user()->usertype==3) value="Manipur" @if($editemp->classxii=='Manipur')selected="selected" @endif @endif>Manipur</option>
                                                                            <option value="Meghalaya" @if(Auth::user()->usertype==3) value="Meghalaya" @if($editemp->classxii=='Meghalaya')selected="selected" @endif @endif>Meghalaya</option>
                                                                            <option value="Mizoram" @if(Auth::user()->usertype==3) value="Mizoram" @if($editemp->classxii=='Mizoram')selected="selected" @endif @endif>Mizoram</option>
                                                                            <option value="Nagaland" @if(Auth::user()->usertype==3) value="Nagaland" @if($editemp->classxii=='Nagaland')selected="selected" @endif @endif>Nagaland</option>
                                                                            <option value="Orissa" @if(Auth::user()->usertype==3) value="Orissa" @if($editemp->classxii=='Orissa')selected="selected" @endif @endif>Orissa</option>
                                                                            <option value="Punjab" @if(Auth::user()->usertype==3) value="Punjab" @if($editemp->classxii=='Punjab')selected="selected" @endif @endif>Punjab</option>
                                                                            <option value="Rajasthan" @if(Auth::user()->usertype==3) value="Rajasthan" @if($editemp->classxii=='Rajasthan')selected="selected" @endif @endif>Rajasthan</option>
                                                                            <option value="Tripura" @if(Auth::user()->usertype==3) value="Tripura" @if($editemp->classxii=='Tripura')selected="selected" @endif @endif>Tripura</option>
                                                                            <option value="Uttar Pradesh" @if(Auth::user()->usertype==3) value="Uttar Pradesh" @if($editemp->classxii=='Uttar Pradesh')selected="selected" @endif @endif>Uttar Pradesh</option>
                                                                            <option value="West Bengal" @if(Auth::user()->usertype==3) value="West Bengal" @if($editemp->classxii=='West Bengal')selected="selected" @endif @endif>West Bengal</option>
                                                                            <option value="Other" @if(Auth::user()->usertype==3) value="Other" @if($editemp->classxii=='Other')selected="selected" @endif @endif>Other</option>
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
                                                                    <option value="Accounting / Finance" @if(Auth::user()->usertype==3)value="Accounting / Finance" @if($editemp->industry=='Accounting / Finance')selected="selected" @endif @endif>Accounting / Finance</option>
                                                                    <option value="Advertising / PR / MR / Events" @if(Auth::user()->usertype==3)value="Advertising / PR / MR / Events" @if($editemp->industry=='Advertising / PR / MR / Events')selected="selected" @endif @endif>Advertising / PR / MR / Events</option>
                                                                    <option value="Agriculture / Dairy" @if(Auth::user()->usertype==3)value="Agriculture / Dairy" @if($editemp->industry=='Agriculture / Dairy')selected="selected" @endif @endif>Agriculture / Dairy</option>
                                                                    <option value="Animation" @if(Auth::user()->usertype==3)value="Animation" @if($editemp->industry=='Animation')selected="selected" @endif @endif>Animation</option>
                                                                    <option value="Architecture / Interior Designing" @if(Auth::user()->usertype==3)value="Architecture / Interior Designing" @if($editemp->industry=='Architecture / Interior Designing')selected="selected" @endif @endif>Architecture / Interior Designing</option>
                                                                    <option value="Auto / Auto Ancillary" @if(Auth::user()->usertype==3)value="Auto / Auto Ancillary" @if($editemp->industry=='Auto / Auto Ancillary')selected="selected" @endif @endif>Auto / Auto Ancillary</option>
                                                                    <option value="Aviation / Aerospace Firms" @if(Auth::user()->usertype==3)value="Aviation / Aerospace Firms" @if($editemp->industry=='Aviation / Aerospace Firms')selected="selected" @endif @endif>Aviation / Aerospace Firms</option>
                                                                    <option value="Banking / Financial Services / Broking" @if(Auth::user()->usertype==3)value="Banking / Financial Services / Broking" @if($editemp->industry=='Banking / Financial Services / Broking')selected="selected" @endif @endif>Banking / Financial Services / Broking</option>
                                                                    <option value="BPO / ITES" @if(Auth::user()->usertype==3)value="BPO / ITES" @if($editemp->industry=='BPO / ITES')selected="selected" @endif @endif>BPO / ITES</option>
                                                                    <option value="Brewery / Distillery" @if(Auth::user()->usertype==3)value="Brewery / Distillery" @if($editemp->industry=='Brewery / Distillery')selected="selected" @endif @endif>Brewery / Distillery</option>
                                                                    <option value="Broadcasting" @if(Auth::user()->usertype==3)value="Broadcasting" @if($editemp->industry=='Broadcasting')selected="selected" @endif @endif>Broadcasting</option>
                                                                    <option value="Ceramics  / Sanitary ware" @if(Auth::user()->usertype==3)value="Ceramics  / Sanitary ware" @if($editemp->industry=='Ceramics  / Sanitary ware')selected="selected" @endif @endif>Ceramics  / Sanitary ware</option>
                                                                    <option value="Chemicals / PetroChemical / Plastic / Rubber" @if(Auth::user()->usertype==3)value="Chemicals / PetroChemical / Plastic / Rubber" @if($editemp->industry=='Chemicals / PetroChemical / Plastic / Rubber')selected="selected" @endif @endif>Chemicals / PetroChemical / Plastic / Rubber</option>
                                                                    <option value="Construction / Engineering / Cement / Metals" @if(Auth::user()->usertype==3)value="Construction / Engineering / Cement / Metals" @if($editemp->industry=='Construction / Engineering / Cement / Metals')selected="selected" @endif @endif>Construction / Engineering / Cement / Metals</option>
                                                                    <option value="Consumer Durables" @if(Auth::user()->usertype==3)value="Consumer Durables" @if($editemp->industry=='Consumer Durables')selected="selected" @endif @endif>Consumer Durables</option>
                                                                    <option value="Courier / Transportation / Freight" @if(Auth::user()->usertype==3)value="Courier / Transportation / Freight" @if($editemp->industry=='Courier / Transportation / Freight')selected="selected" @endif @endif>Courier / Transportation / Freight</option>
                                                                    <option value="Defence / Government" @if(Auth::user()->usertype==3)value="Defence / Government" @if($editemp->industry=='Defence / Government')selected="selected" @endif @endif>Defence / Government</option>
                                                                    <option value="Education / Teaching / Training" @if(Auth::user()->usertype==3)value="Education / Teaching / Training" @if($editemp->industry=='Education / Teaching / Training')selected="selected" @endif @endif>Education / Teaching / Training</option>
                                                                    <option value="Electricals / Switchgears" @if(Auth::user()->usertype==3)value="Electricals / Switchgears" @if($editemp->industry=='Electricals / Switchgears')selected="selected" @endif @endif>Electricals / Switchgears</option>
                                                                    <option value="Export / Import" @if(Auth::user()->usertype==3)value="Export / Import" @if($editemp->industry=='Export / Import')selected="selected" @endif @endif>Export / Import</option>
                                                                    <option value="Facility Management" @if(Auth::user()->usertype==3)value="Facility Management" @if($editemp->industry=='Facility Management')selected="selected" @endif @endif>Facility Management</option>
                                                                    <option value="Fertilizers / Pesticides" @if(Auth::user()->usertype==3)value="Fertilizers / Pesticides" @if($editemp->industry=='Fertilizers / Pesticides')selected="selected" @endif @endif>Fertilizers / Pesticides</option>
                                                                    <option value="FMCG / Foods / Beverage" @if(Auth::user()->usertype==3)value="FMCG / Foods / Beverage" @if($editemp->industry=='FMCG / Foods / Beverage')selected="selected" @endif @endif>FMCG / Foods / Beverage</option>
                                                                    <option value="Food Processing" @if(Auth::user()->usertype==3)value="Food Processing" @if($editemp->industry=='Food Processing')selected="selected" @endif @endif>Food Processing</option>
                                                                    <option value="Fresher / Trainee" @if(Auth::user()->usertype==3)value="Fresher / Trainee" @if($editemp->industry=='Fresher / Trainee')selected="selected" @endif @endif>Fresher / Trainee</option>
                                                                    <option value="Gems &amp; Jewellery" @if(Auth::user()->usertype==3)value="Gems &amp; Jewellery" @if($editemp->industry=='Gems &amp; Jewellery')selected="selected" @endif @endif>Gems &amp; Jewellery</option>
                                                                    <option value="Glass" @if(Auth::user()->usertype==3)value="Glass" @if($editemp->industry=='Glass')selected="selected" @endif @endif>Glass</option>
                                                                    <option value="Heat Ventilation Air Conditioning" @if(Auth::user()->usertype==3)value="Heat Ventilation Air Conditioning" @if($editemp->industry=='Heat Ventilation Air Conditioning')selected="selected" @endif @endif>Heat Ventilation Air Conditioning</option>
                                                                    <option value="Hotels / Restaurants / Airlines / Travel" @if(Auth::user()->usertype==3)value="Hotels / Restaurants / Airlines / Travel" @if($editemp->industry=='Hotels / Restaurants / Airlines / Travel')selected="selected" @endif @endif>Hotels / Restaurants / Airlines / Travel</option>
                                                                    <option value="Industrial Products / Heavy Machinery" @if(Auth::user()->usertype==3)value="Industrial Products / Heavy Machinery" @if($editemp->industry=='Industrial Products / Heavy Machinery')selected="selected" @endif @endif>Industrial Products / Heavy Machinery</option>
                                                                    <option value="Insurance" @if(Auth::user()->usertype==3)value="Insurance" @if($editemp->industry=='Insurance')selected="selected" @endif @endif>Insurance</option>
                                                                    <option value="Internet / Ecommerce" @if(Auth::user()->usertype==3)value="Internet / Ecommerce" @if($editemp->industry=='Internet / Ecommerce')selected="selected" @endif @endif>Internet / Ecommerce</option>
                                                                    <option value="IT-Hardware &amp; Networking" @if(Auth::user()->usertype==3)value="IT-Hardware &amp; Networking" @if($editemp->industry=='IT-Hardware &amp; Networking')selected="selected" @endif @endif>IT-Hardware &amp; Networking</option>
                                                                    <option value="IT-Software / Software Services" @if(Auth::user()->usertype==3)value="IT-Software / Software Services" @if($editemp->industry=='IT-Software / Software Services')selected="selected" @endif @endif>IT-Software / Software Services</option>
                                                                    <option value="KPO / Research  / Analytics" @if(Auth::user()->usertype==3)value="KPO / Research  / Analytics" @if($editemp->industry=='KPO / Research  / Analytics')selected="selected" @endif @endif>KPO / Research  / Analytics</option>
                                                                    <option value="Leather" @if(Auth::user()->usertype==3)value="Leather" @if($editemp->industry=='Leather')selected="selected" @endif @endif>Leather</option>
                                                                    <option value="Legal" @if(Auth::user()->usertype==3)value="Legal" @if($editemp->industry=='Legal')selected="selected" @endif @endif>Legal</option>
                                                                    <option value="Media / Dotcom / Entertainment" @if(Auth::user()->usertype==3)value="Media / Dotcom / Entertainment" @if($editemp->industry=='Media / Dotcom / Entertainment')selected="selected" @endif @endif>Media / Dotcom / Entertainment</option>
                                                                    <option value="Medical / Healthcare / Hospital" @if(Auth::user()->usertype==3)value="Medical / Healthcare / Hospital" @if($editemp->industry=='Medical / Healthcare / Hospital')selected="selected" @endif @endif>Medical / Healthcare / Hospital</option>
                                                                    <option value="Medical Devices / Equipments" @if(Auth::user()->usertype==3)value="Medical Devices / Equipments" @if($editemp->industry=='Medical Devices / Equipments')selected="selected" @endif @endif>Medical Devices / Equipments</option>
                                                                    <option value="Mining" @if(Auth::user()->usertype==3)value="Mining" @if($editemp->industry=='Mining')selected="selected" @endif @endif>Mining</option>
                                                                    <option value="NGO / Social Services" @if(Auth::user()->usertype==3)value="NGO / Social Services" @if($editemp->industry=='NGO / Social Services')selected="selected" @endif @endif>NGO / Social Services</option>
                                                                    <option value="Office Equipment / Automation" @if(Auth::user()->usertype==3)value="Office Equipment / Automation" @if($editemp->industry=='Office Equipment / Automation')selected="selected" @endif @endif>Office Equipment / Automation</option>
                                                                    <option value="Oil and Gas / Power / Infrastructure / Energy" @if(Auth::user()->usertype==3)value="Oil and Gas / Power / Infrastructure / Energy" @if($editemp->industry=='Oil and Gas / Power / Infrastructure / Energy')selected="selected" @endif @endif>Oil and Gas / Power / Infrastructure / Energy</option>
                                                                    <option value="Paper" @if(Auth::user()->usertype==3)value="Paper" @if($editemp->industry=='Paper')selected="selected" @endif @endif>Paper</option>
                                                                    <option value="Pharma / Biotech / Clinical Research" @if(Auth::user()->usertype==3)value="Pharma / Biotech / Clinical Research" @if($editemp->industry=='Pharma / Biotech / Clinical Research')selected="selected" @endif @endif>Pharma / Biotech / Clinical Research</option>
                                                                    <option value="Printing / Packaging" @if(Auth::user()->usertype==3)value="Printing / Packaging" @if($editemp->industry=='Printing / Packaging')selected="selected" @endif @endif>Printing / Packaging</option>
                                                                    <option value="Publishing" @if(Auth::user()->usertype==3)value="Publishing" @if($editemp->industry=='Publishing')selected="selected" @endif @endif>Publishing</option>
                                                                    <option value="Real Estate / Property" @if(Auth::user()->usertype==3)value="Real Estate / Property" @if($editemp->industry=='Real Estate / Property')selected="selected" @endif @endif>Real Estate / Property</option>
                                                                    <option value="Recruitment" @if(Auth::user()->usertype==3)value="Recruitment" @if($editemp->industry=='Recruitment')selected="selected" @endif @endif>Recruitment</option>
                                                                    <option value="Retail" @if(Auth::user()->usertype==3)value="Retail" @if($editemp->industry=='Retail')selected="selected" @endif @endif>Retail</option>
                                                                    <option value="Security / Law Enforcement" @if(Auth::user()->usertype==3)value="Security / Law Enforcement" @if($editemp->industry=='Security / Law Enforcement')selected="selected" @endif @endif>Security / Law Enforcement</option>
                                                                    <option value="Semiconductors / Electronics" @if(Auth::user()->usertype==3)value="Semiconductors / Electronics" @if($editemp->industry=='Semiconductors / Electronics')selected="selected" @endif @endif>Semiconductors / Electronics</option>
                                                                    <option value="Shipping / Marine" @if(Auth::user()->usertype==3)value="Shipping / Marine" @if($editemp->industry=='Shipping / Marine')selected="selected" @endif @endif>Shipping / Marine</option>
                                                                    <option value="Steel" @if(Auth::user()->usertype==3)value="Steel" @if($editemp->industry=='Steel')selected="selected" @endif @endif>Steel</option>
                                                                    <option value="Strategy  / Management Consulting Firms" @if(Auth::user()->usertype==3)value="Strategy  / Management Consulting Firms" @if($editemp->industry=='Strategy  / Management Consulting Firms')selected="selected" @endif @endif>Strategy  / Management Consulting Firms</option>
                                                                    <option value="Sugar" @if(Auth::user()->usertype==3)value="Sugar" @if($editemp->industry=='Sugar')selected="selected" @endif @endif>Sugar</option>
                                                                    <option value="Telcom / ISP" @if(Auth::user()->usertype==3)value="Telcom / ISP" @if($editemp->industry=='Telcom / ISP')selected="selected" @endif @endif>Telcom / ISP</option>
                                                                    <option value="Textiles / Garments / Accessories" @if(Auth::user()->usertype==3)value="Textiles / Garments / Accessories" @if($editemp->industry=='Textiles / Garments / Accessories')selected="selected" @endif @endif>Textiles / Garments / Accessories</option>
                                                                    <option value="Tyres" @if(Auth::user()->usertype==3)value="Tyres" @if($editemp->industry=='Tyres')selected="selected" @endif @endif>Tyres</option>
                                                                    <option value="Water Treatment / Waste Management" @if(Auth::user()->usertype==3)value="Water Treatment / Waste Management" @if($editemp->industry=='Water Treatment / Waste Management')selected="selected" @endif @endif>Water Treatment / Waste Management</option>
                                                                    <option value="Wellness / Fitness / Sports / Beauty" @if(Auth::user()->usertype==3)value="Wellness / Fitness / Sports / Beauty" @if($editemp->industry=='Wellness / Fitness / Sports / Beauty')selected="selected" @endif @endif>Wellness / Fitness / Sports / Beauty</option>
                                                                    <option value="Other" @if(Auth::user()->usertype==3)value="Other" @if($editemp->industry=='Other')selected="selected" @endif @endif>Other</option>
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
