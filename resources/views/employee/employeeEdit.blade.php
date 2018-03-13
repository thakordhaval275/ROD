@extends('mainlayout')

@section('pageheader')
    Edit Profile
@endsection

@section('contain')
    <div class="profile-page">
        <div class="wrapper">
            <br><br><br><br><br><br><br>
            <form method="post" action="{{route('employeeprofilestore')}}">
                <input type="hidden" name="userType" id="userType" value="{{Auth::user()->usertype}}">
                {{csrf_field()}}
                <div class="main main-raised">
                    <div class="profile-content">
                        <div class="container">
                            <div class="row">
                                <div class="profile">
                                    <div class="avatar">
                                        <img src="{{asset('assets/img/employee/christian.jpg')}}" alt="Circle Image" class="img-circle img-responsive img-raised"><br>
                                        <input type="file" class="text-center center-block well well-sm" name="empProfile">
                                    </div>
                                    <div class="name">
                                        <h3 class="title">Christian Louboutin</h3>
                                        <h6>Designer</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="description text-center">
                                <textarea id="aboutMe" name="aboutMe" class="form-control" placeholder="About Yourself" rows="4"></textarea>
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
                                                        <div class="col-md-12">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>First Name</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <input type="text" class="form-control" name="firstName" placeholder="ex. John" id="firstName">

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Last Name</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <input type="text" class="form-control" name="lastName" placeholder="ex. Christian" id="lastName">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Address</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <textarea type="text" class="form-control" name="address" placeholder="ex. B/20 Shivam Tenament, Nr. Air Force" id="address"></textarea>
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Pincode</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <input type="text" class="form-control" name="pincode" placeholder="ex. 390010" id="pincode">
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Gender</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <div class="form-group">
                                                                    <input type="radio" name="gender" value="Male">&nbsp;<strong>Male</strong>
                                                                    &nbsp;&nbsp;
                                                                    <input type="radio" name="gender" value="Female">&nbsp;<strong>Female</strong>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Birthdate</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <input type="date" class="form-control" name="birthdate" id="birthdate">
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Contect No.</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <input type="tel" class="form-control" name="contectNo" placeholder="ex. +912345248951" id="contectno" maxlength="15">
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
                                                                <input type="email" class="form-control" name="email" placeholder="ex. abc@gmail.com" id="email" value="{{Auth::user()->email}}">
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12">
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
                                                                        <option value="Vadodara">Vadodara</option>
                                                                        <option value="Anand">Anand</option>
                                                                        <option value="Ahemdabad">Ahemdabad</option>
                                                                        <option value="Surat">Surat</option>
                                                                        <option value="Bharuch">Bharuch</option>
                                                                        <option value="other">other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>State</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <select id="state" name="state" class="form-control dropdown-product selectpicker">
                                                                    <option value="">Select</option>
                                                                    <option value="Gujarat">Gujarat</option>
                                                                    <option value="Karnantaka">Karnantaka</option>
                                                                    <option value="Tamilnadu">Tamilnadu</option>
                                                                    <option value="Maharastra">Maharastra</option>
                                                                    <option value="other">other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Country</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <select id="country" name="country" class="form-control dropdown-product selectpicker">
                                                                    <option value="">Select</option>
                                                                    <option value="India">India</option>
                                                                    <option value="Dubai">Dubai</option>
                                                                    <option value="USA">USA</option>
                                                                    <option value="other">other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Home Town</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <input type="text" class="form-control" name="homeTown" placeholder="ex. Vadodara" id="homeTown">
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Merital Status</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <select id="meritalStatus" name="meritalStatus" class="form-control dropdown-product selectpicker">
                                                                    <option value="">Select</option>
                                                                    <option value="Single/Unmarrid">Single/Unmarrid</option>
                                                                    <option value="Married">Married</option>
                                                                    <option value="Widowed">Widowed</option>
                                                                    <option value="Divorced">Divorced</option>
                                                                    <option value="Separated">Separated</option>
                                                                    <option value="other">other</option>
                                                                </select>
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
                                                        <div class="col-md-12">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Qualification</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <h6>Post Graduate</h6>
                                                                        <select id="postGraduate" name="postGraduate" class="form-control dropdown-product selectpicker">
                                                                            <option value="Not Mention">Select</option>
                                                                            <option value="MCA">MCA</option>
                                                                            <option value="MSc.IT">MSc.IT</option>
                                                                            <option value="MBA">MBA</option>
                                                                            <option value="Other">Other</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <h6>Graduate</h6>
                                                                        <select id="graduate" name="graduate" class="form-control dropdown-product selectpicker">
                                                                            <option value="Not Mention">Select</option>
                                                                            <option value="BCA">BCA</option>
                                                                            <option value="BBA">BBA</option>
                                                                            <option value="B.Com">B.Com</option>
                                                                            <option value="Other">Other</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <h6>Class XII</h6>
                                                                        <select id="classXII" name="classXII" class="form-control dropdown-product selectpicker">
                                                                            <option value="Not Mention">Select</option>
                                                                            <option value="GSHEB">GSHEB</option>
                                                                            <option value="CBSC">CBSC</option>
                                                                            <option value="Other">Other</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <h6>Class X</h6>
                                                                        <select id="classx" name="classX" class="form-control dropdown-product selectpicker">
                                                                            <option value="Not Mention">Select</option>
                                                                            <option value="GSEB">GSEB</option>
                                                                            <option value="CBSC">CBSC</option>
                                                                            <option value="Other">Other</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <h6>Other Qualification</h6>
                                                                        <input type="text" id="otherquli" name="otherquli" class="form-control" placeholder="ex. additional Course">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><br><br>
                                                    </div>
                                                </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Industry</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <select id="industry" name="industry" class="form-control dropdown-product selectpicker">
                                                                    <option value="">Select</option>
                                                                    <option value="IT-Hardware & Networking">IT-Hardware & Networking</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12">
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
                                                                        <option value="Vadodara">Vadodara</option>
                                                                        <option value="Anand">Anand</option>
                                                                        <option value="Ahemdabad">Ahemdabad</option>
                                                                        <option value="Surat">Surat</option>
                                                                        <option value="Bharuch">Bharuch</option>
                                                                        <option value="other">other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>


                                                    <div class="row">
                                                        <div class="col-md-12">
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
                                                                        <option value="Fresher">Fresher</option>
                                                                        <option value="Month">Month</option>
                                                                        @for($i=1;$i<=15;$i++)
                                                                            <option>{{$i}} Year</option>
                                                                        @endfor
                                                                    </select>
                                                                </div>

                                                                <div class="search-category-container">
                                                                    <select id="experianceMonth" name="experianceMonth" class="form-control dropdown-product selectpicker">
                                                                        <option value="">Select</option>
                                                                        @for($i=1;$i<=12;$i++)
                                                                            <option>{{$i}} Month</option>
                                                                        @endfor
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                                <h4>Key-Skill</h4>
                                                            </div>
                                                            <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                                <h4>:</h4>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                                <input type="text" class="form-control" name="keySkill" placeholder="ex. Android, .NET, PHP" id="keySkill">
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
                                    <a id="cancel" name="cancel" class="btn btn-common" href="{{route('employeeProfile')}}">Cancel</a>
                                </div>
                            </div>
                        </div><br><br><br>
                    </div>
                </form>
            </div>
        </div>
    <br><br>
@endsection
