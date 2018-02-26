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
                        <div class="row">
                            <div class="profile">
                                <div class="avatar">
                                    <img src="assets/img/employee/christian.jpg" alt="Circle Image" class="img-circle img-responsive img-raised"><br><a href="{{route('companyEdit')}}"><i class="ti-pencil"> Edit</i></a>
                                </div>
                                <div class="name">
                                    <h3 class="title">MTAJ Solutions PVT LTD</h3>
                                    <h6>Software Company</h6>
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
                            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                <div class="col-md-12">
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">Personal Details</div>
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
