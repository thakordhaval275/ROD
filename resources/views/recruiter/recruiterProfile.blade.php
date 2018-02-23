@extends('mainlayout')

@section('pageheader')
    Profile
@endsection

@section('contain')

    <div class="profile-page">
        <div class="wrapper">
            <div class="header header-filter" style="background-image: url('assets/img/employee/city.jpg');"></div>

            <div class="main main-raised">
                <div class="profile-content">
                    <div class="container">
                        <div class="row">
                            <div class="profile">
                                <div class="avatar">
                                    <img src="assets/img/employee/christian.jpg" alt="Circle Image" class="img-circle img-responsive img-raised"><br><a href="{{route('recruiterEdit')}}"><i class="ti-pencil"> Edit</i></a>
                                </div>
                                <div class="name">
                                    <h3 class="title">Christian Louboutin</h3>
                                    <h6>Designer</h6>
                                </div>
                            </div>
                        </div>
                        <div class="description text-center">
                            <p>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
                        </div>
                    </div><br>
                    </div><br>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                <div class="col-md-6">
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">Personal Details<a href="{{route('recruiterEdit')}}" style="float: right;color: white;"><i class="ti-pencil"></i></a></div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>First Name</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <h5>Louboutin</h5>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>last Name</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <h5>Christian</h5>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Gender</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <h5>Male</h5>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Email ID</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <h5>Louboutin@yahoo.com</h5>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Contact Number</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <h5>8160625047</h5>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Address</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <h5>47, comman street, new bagan, new york</h5>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>City</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <h5>New Jearsy</h5>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>State</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <h5>new York</h5>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Country</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <h5>USA</h5>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Alternative Email ID</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <h5>Louboutin123@hotmail.com</h5>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br>

                                        </div><!--/panel-body-->
                                    </div><!--/panel-->
                                </div><!--/col-6-->
                                <div class="col-md-6">
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">Other Details<a href="{{route('recruiterEdit')}}" style="float: right;color: white;"><i class="ti-pencil"></i></a></div>
                                        <div class="panel-body">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>GST Register</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <h5>YES</h5>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Company Name</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <h5>Herly's limited</h5>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Company Type</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <h5>Limited</h5>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Industry Type</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <h5>Agriculture</h5>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Company Address</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <h5>67,stambos housy,new bagan</h5>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Reference Name</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <h5>Atul</h5>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Reference's Designation</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <h5>Manager</h5>
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br>
                                        </div><!--/panel-body-->
                                    </div>
                                </div><!--/col-6-->
                            </div><!--/col-12-->
                        </div><!--/row-->
                    </div><!--/container--><br>
                </div>
            </div>
        </div>
    </div>
    <br><br>

@endsection
