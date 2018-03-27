@extends('mainlayout')

@section('pageheader')
    Profile
@endsection

@section('contain')
    <br><br>
    <div class="profile-page">
        <div class="wrapper">
            <br><br><br><br><br><br><br>
            <div class="main main-raised">
                <div class="profile-content">
                    <div class="container">
                        {{--@foreach($jobdetaildata as $jobdetail)--}}
                        {{--@endforeach--}}
                        <div class="row">
                            <div class="profile">
                                <div class="avatar">
                                    <img src="{{ asset('assets/img/company/').'/'.$jobdetail->logo}}" alt="Circle Image" class="img-circle img-responsive img-raised"><br>
                                </div>
                                <div class="name">
                                    <h3 class="title">{{$jobdetail->companyname}}</h3>
                                    <h6>Software Company</h6>
                                </div>
                            </div>
                        </div>
                        <div class="description text-center">
                            <p>{{$jobdetail->jobdescription}}</p>
                        </div>
                    </div>
					
                    <div class="container-fluid">
                        <br><br>
                            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-8">
                                    <div class="box box-primary">
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
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <h5>{{$jobdetail->companyname}}</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>
							
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Job Type</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <h5>{{$jobdetail->jobtype}}</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Department</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <h5>{{$jobdetail->department}}</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Term</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <h5>{{$jobdetail->term}}</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Term Period</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <h5>{{$jobdetail->termperiod}}</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Experience</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
																	<h5>{{$jobdetail->experience}}</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Payment</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <h5>{{$jobdetail->payment}}</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>No. of Positions</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
																	<h5>{{$jobdetail->noofpositions}}</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Job Description</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <!-- description input-->
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <p><h5>{{$jobdetail->jobdescription}}</h5></p>
																</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br><br>

                                                <div class="form-group">
                                                    <div class="col-md-12 text-center">
                                                        <a id="cancel" name="cancel" class="btn btn-common" href="{{route('viewJobs')}}">Back to List</a>
                                                        <a id="cancel" name="cancel" class="btn btn-common" href="{{route('proposal')}}">Send proposal</a>
                                                    </div>
                                                </div><br><br>
                                        </div>
                                 </div>
                                <div class="col-md-2">
                                </div>
                            </div>

                        </div><br><br><br>
					</div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection
