@extends('mainlayout')

@section('pageheader')
    My Account
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
                                    <img src="assets/img/employee/christian.jpg" alt="Circle Image" class="img-circle img-responsive img-raised">
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
                    <br>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12 box box-primary">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="First Name ">
                            </div>
                            <div class="col-md-2">

                            </div>
                        </div><!--/col-12-->
                    </div><!--/row-->
                </div><!--/container-->
            </div>
        </div>
    </div>
    <br><br>

@endsection
