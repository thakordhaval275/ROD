@extends('mainlayout')

@section('pageheader')
    Employee Profile
@endsection

@section('contain')
    <div class="profile-page">
        <div class="wrapper">
            <br><br><br><br><br><br><br>
            <div class="main main-raised">
                <div class="profile-content">

                    @foreach($viewprofile as $viewprofile)
                    <div class="container">

                        {{--<input type="hidden" name="userType" id="userType" value="{{Auth::user()->usertype}}">--}}
                        <div class="row">
                            <div class="profile">
                                <div class="avatar">
                                    <img src="@if($viewprofile->logo!="") {{ asset('assets/img/employee/').'/'.$viewprofile->logo}} @else {{ asset('assets/img/employee/default.png')}} @endif" alt="Circle Image" class="img-circle img-responsive img-raised"><br>@if(Auth::user()->usertype=="3")<a href="{{route('employeeEdit',['id'=>$viewprofile->id])}}"><i class="ti-pencil" data-toggle="tooltip" data-placement="top" title="Edit"> Edit</i></a>@endif
                                </div>
                                <div class="name">
                                    <h3 class="title">@if($viewprofile->firstname!="" && $viewprofile->lastname!="") {{$viewprofile->firstname}} {{$viewprofile->lastname}} @else {{$viewprofile->emailid}} @endif</h3>
                                    <h6>{{$viewprofile->keyskill}}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="description text-center">
                            <p>{{$viewprofile->aboutself}}</p>
                        </div>
                    </div>


                    <div class="container-fluid">
                        <br><br>
                        <div class="row">
                            <div class="col-md-12">
                                <form method="get" action="#">
                                    <div class="col-md-6">
                                        <div class="panel panel-danger">
                                            <div class="panel-heading">Personal Details @if(Auth::user()->usertype=="3")<a href="{{route('employeeEdit',['id'=>$viewprofile->id])}}" style="float: right;color: white;"><i class="ti-pencil" data-toggle="tooltip" data-placement="top" title="Edit"></i></a> @endif</div>
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
                                                            <h5>{{$viewprofile->firstname}}</h5>
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Last Name</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <h5>{{$viewprofile->lastname}}</h5>
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
                                                            <h5>{{$viewprofile->address}}</h5>
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
                                                            <h5>{{$viewprofile->pincode}}</h5>
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
                                                            <h5>{{$viewprofile->gender}}</h5>
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
                                                            <h5>{{$viewprofile->bdate}}</h5>
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
                                                            <h5>{{$viewprofile->contectno}}</h5>
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
                                                            <h5>{{$viewprofile->emailid}}</h5>
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
                                                            <h5>{{$viewprofile->city}}</h5>
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
                                                            <h5>{{$viewprofile->state}}</h5>
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
                                                            <h5>{{$viewprofile->country}}</h5>
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
                                                            <h5>{{$viewprofile->hometown}}</h5>
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
                                                            <h5>{{$viewprofile->maritalstatus}}</h5>
                                                        </div>
                                                    </div>
                                                </div><br>

                                            </div>
                                        </div><br>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="panel panel-danger">
                                            <div class="panel-heading">Education Details @if(Auth::user()->usertype=="3") <a href="{{route('employeeEdit',['id'=>$viewprofile->id])}}" style="float: right;color: white;"><i class="ti-pencil" data-toggle="tooltip" data-placement="top" title="Edit"></i></a> @endif</div>
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
                                                            <ul>
                                                                <li><h6>Post Graduate :</h6>{{$viewprofile->postgraduate}}</li><br>
                                                                <li><h6>Graduate :</h6>{{$viewprofile->graduate}}</li><br>
                                                                <li><h6>Class XII :</h6>{{$viewprofile->classxii}}</li><br>
                                                                <li><h6>Class X :</h6>{{$viewprofile->classx}}</li><br>
                                                                <li><h6>Other Qualification :</h6>{{$viewprofile->otherque}}</li><br>
                                                            </ul>
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
                                                            <h5>{{$viewprofile->industry}}</h5>
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
                                                            <h5>{{$viewprofile->preferredlocation}}</h5>
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
                                                            <h5>@if($viewprofile->expirienceyear=="Fresher")
                                                                    {{$viewprofile->expirienceyear}}
                                                                @elseif($viewprofile->expirienceyear=="Month")
                                                                    {{$viewprofile->expiriencemonth}} Month
                                                                @else
                                                                    {{$viewprofile->expirienceyear}} Year
                                                                @endif
                                                            </h5>
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
                                                            <h5>{{$viewprofile->keyskill}}</h5>
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Resume</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <h5><a href="{{asset('assets/pdf/resume').'/'.$viewprofile->resume}}" target="_blank"><u>Click to show</u></a></h5>
                                                        </div>
                                                    </div>
                                                </div><br><br><br>
                                            </div>
                                        </div><br>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12 text-center">
                                            @if(Auth::user()->usertype=="2")
                                                @if($viewprofile->usertype==2)
                                                    <a id="Back" name="Back" class="btn btn-common" href="{{route('myEmployee')}}">Back</a>
                                                @elseif($viewprofile->usertype==3)
                                                    <a id="Back" name="Back" class="btn btn-common" href="{{route('addmyEmployee')}}">Back</a>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><br><br>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection
