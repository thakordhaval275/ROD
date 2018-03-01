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
                                    <img src="assets/img/company/Mtaj.png" alt="Circle Image" class="img-circle img-responsive img-raised"><br><a href="{{route('companyEdit')}}"><i class="ti-pencil"> Edit</i></a>
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
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-8">
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">Company Details<a href="{{route('companyEdit')}}" style="float: right;color: white;"><i class="ti-pencil"></i></a></div>
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
                                                        <h5>Louboutin</h5>
                                                    </div>
                                                </div>
                                            </div><br>
                                        </div>
                                    </div>
                                 </div>
                                <div class="col-md-2">
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
