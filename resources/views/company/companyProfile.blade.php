@extends('mainlayout')

@section('pageheader')
    Company Profile
@endsection

@section('contain')
    <br><br>
    <div class="profile-page">
        <div class="wrapper">
            <br><br><br><br><br>
            <div class="main main-raised">
                <div class="profile-content">
                    <div class="container">
                        @foreach($ProfileData as $profiledata)
                        @endforeach
                        <div class="row">
                            <div class="profile">
                                <div class="avatar">
                                    <img src="@if($profiledata->logo==""){{ asset('assets/img/company/default.png').'/'.$profiledata->logo}} @else {{ asset('assets/img/company/').'/'.$profiledata->logo}} @endif" alt="Circle Image" class="img-circle img-responsive img-raised"><br><a href="{{route('companyEdit',['id'=>$profiledata->id])}}"><i class="ti-pencil" data-toggle="tooltip" data-placement="bottom" title="Edit"> Edit</i></a>
                                </div>
                                <div class="name">
                                    <h3 class="title">@if($profiledata->companyname==""){{Auth::user()->email}}@else {{$profiledata->companyname}} @endif</h3>
                                    <h6>{{$profiledata->companytype}}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="description text-center">
                            <p>{{$profiledata->aboutcompany}}</p>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <br><br>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                <div class="col-md-2">

                                </div>
                                <div class="col-md-8">
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">Company Details<a href="{{route('companyEdit',['id'=>$profiledata->id])}}" style="float: right;color: white;"><i class="ti-pencil" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></div>
                                        <div class="panel-body">
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Company Name</h4>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div>
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <h5>{{$profiledata->companyname}}</h5>
                                                    </div>
                                                </div>
                                            </div><br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Location</h4>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div>
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <h5>{{$profiledata->location}}</h5>
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
                                                        <h5>{{$profiledata->address}}</h5>
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
                                                        <h5>{{$profiledata->emailid}}</h5>
                                                    </div>
                                                </div>
                                            </div><br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Website</h4>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div>
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <h5>{{$profiledata->website}}</h5>
                                                    </div>
                                                </div>
                                            </div><br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Type</h4>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div>
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <h5>{{$profiledata->companytype}}</h5>
                                                    </div>
                                                </div>
                                            </div><br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Year of Found</h4>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div>
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <h5>{{$profiledata->foundyear}}</h5>
                                                    </div>
                                                </div>
                                            </div><br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>No. Of Employees</h4>
                                                    </div>
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div>
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <h5>{{$profiledata->noofemployee}}</h5>
                                                    </div>
                                                </div>
                                            </div><br>

                                        </div>
                                    </div>
                                 </div>
                                <div class="col-md-2">
                                </div>
                            </div>
                        </div><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection
