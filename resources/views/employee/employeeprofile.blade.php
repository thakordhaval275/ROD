@extends('mainlayout')

@section('pageheader')
    Edit Profile
@endsection

@section('contain')
    <div class="profile-page">
        <div class="wrapper">
            <br><br><br><br><br><br><br>
            <div class="main main-raised">
                <div class="profile-content">
                    <div class="container">
                        <div class="row">
                            <div class="profile">
                                <div class="avatar">
                                    <img src="assets/img/employee/christian.jpg" alt="Circle Image" class="img-circle img-responsive img-raised"><br>
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
                    </div>
                    <div class="container-fluid">
                        <br><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">Personal Information</div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                   <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                       <h4>First Name</h4>
                                                   </div>
                                                   <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                       <h4>:</h4>
                                                   </div>
                                                   <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                       <h5>Christian Louboutin</h5>
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
                                                        <h5>Louboutin</h5>
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
                                                        <h5>B/14 Jalaram Nagar, Alkapuri Road, Vadodara-390010</h5>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">Education Information</div>
                                        <div class="panel-body">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection
