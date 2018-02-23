@extends('mainlayout')

@section('pageheader')
    Edit Profile
@endsection

@section('contain')
    <div class="profile-page">
        <div class="wrapper">
            <br><br><br><br><br><br><br>
            <form method="get" action="#">
                <div class="main main-raised">
                    <div class="profile-content">
                        <div class="container">
                            <div class="row">
                                <div class="profile">
                                    <div class="avatar">
                                        <img src="assets/img/employee/christian.jpg" alt="Circle Image" class="img-circle img-responsive img-raised"><br>
                                        <input type="file" class="text-center center-block well well-sm">
                                    </div>
                                    <div class="name">
                                        <h3 class="title">Christian Louboutin</h3>
                                        <h6>Designer</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="description text-center">
                                <textarea id="aboutme" name="aboutme" class="form-control" placeholder="About Yourself" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <br><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <div class="panel panel-danger">
                                            <div class="panel-heading">Personal Information</div>
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
                                                            <input type="text" class="form-control" name="firstname" placeholder="ex. John" id="firstname">
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
                                                            <input type="text" class="form-control" name="lastname" placeholder="ex. Christian" id="lastname">
                                                        </div>
                                                    </div>
                                                </div>

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
                                                            <input type="tel" class="form-control" name="contectno" placeholder="ex. +912345248951" id="contectno" maxlength="15">
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
                                                            <input type="email" class="form-control" name="email" placeholder="ex. abc@gmail.com" id="email">
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
                                                                    <option value="">Vadodara</option>
                                                                    <option value="">Anand</option>
                                                                    <option value="">Ahemdabad</option>
                                                                    <option value="">Surat</option>
                                                                    <option value="">Bharuch</option>
                                                                    <option value="">other</option>
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
                                                                <option value="">Gujarat</option>
                                                                <option value="">Karnantaka</option>
                                                                <option value="">Tamilnadu</option>
                                                                <option value="">Maharastra</option>
                                                                <option value="">other</option>
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
                                                                <option value="">India</option>
                                                                <option value="">Dubai</option>
                                                                <option value="">USA</option>
                                                                <option value="">other</option>
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
                                                            <input type="text" class="form-control" name="hometown" placeholder="ex. Vadodara" id="hometown">
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
                                                            <select id="meritalstatus" name="meritalstatus" class="form-control dropdown-product selectpicker">
                                                                <option value="">Select</option>
                                                                <option value="">Single/Unmarrid</option>
                                                                <option value="">Married</option>
                                                                <option value="">Widowed</option>
                                                                <option value="">Divorced</option>
                                                                <option value="">Separated</option>
                                                                <option value="">other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><br>
                                            </div>
                                        </div><br>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="panel panel-danger">
                                            <div class="panel-heading">Education Information</div>
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
                                                        </div>
                                                    </div><br><br>

                                                    <div class="col-md-12">
                                                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                                            <h6>Post Graduate</h6>
                                                            <select id="postgraduate" name="postgraduate" class="form-control dropdown-product selectpicker">
                                                                <option value="">Select</option>
                                                                <option value="">MCA</option>
                                                                <option value="">MSc.IT</option>
                                                                <option value="">MBA</option>
                                                                <option value="">Other</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                                            <h6>Graduate</h6>
                                                            <select id="graduate" name="graduate" class="form-control dropdown-product selectpicker">
                                                                <option value="">Select</option>
                                                                <option value="">BCA</option>
                                                                <option value="">BBA</option>
                                                                <option value="">B.Com</option>
                                                                <option value="">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                                            <h6>Class XII</h6>
                                                            <select id="classxii" name="classxii" class="form-control dropdown-product selectpicker">
                                                                <option value="">Select</option>
                                                                <option value="">GSHEB</option>
                                                                <option value="">CBSC</option>
                                                                <option value="">Other</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                                            <h6>Class X</h6>
                                                            <select id="classx" name="classx" class="form-control dropdown-product selectpicker">
                                                                <option value="">Select</option>
                                                                <option value="">GSEB</option>
                                                                <option value="">CBSC</option>
                                                                <option value="">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                                            <h6>Other Qualification</h6>
                                                            <input type="text" id="otherque" name="otherque" class="form-control" placeholder="ex. additional Course">
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                                        </div>
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
                                                                <option value="">IT-Hardware & Networking</option>
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
                                                                <select id="preferredlocation" name="preferredlocation" class="form-control dropdown-product selectpicker">
                                                                    <option value="">Select</option>
                                                                    <option value="">Vadodara</option>
                                                                    <option value="">Anand</option>
                                                                    <option value="">Ahemdabad</option>
                                                                    <option value="">Surat</option>
                                                                    <option value="">Bharuch</option>
                                                                    <option value="">other</option>
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
                                                                <select id="experianceyear" name="experiance" class="form-control dropdown-product selectpicker">
                                                                    <option value="">Select</option>
                                                                    <option value="">Fresher</option>
                                                                    <option value="">Month</option>
                                                                    @for($i=1;$i<=15;$i++)
                                                                        <option>{{$i}} Year</option>
                                                                    @endfor
                                                                </select>
                                                            </div>

                                                            <div class="search-category-container">
                                                                <select id="experiancemonth" name="experiance" class="form-control dropdown-product selectpicker">
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
                                                            <input type="text" class="form-control" name="hometown" placeholder="ex. Android, .NET, PHP" id="hometown">
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
                        </div><br>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br><br>
@endsection
