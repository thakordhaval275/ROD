@extends('mainlayout')

@section('pageheader')
        Login
@endsection

@section('contain')
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4 box box-primary">
                        <form method="get" action="#" class="login-form">

                            <div class="row">
                                <div class="col-md-12">
                                    <div style="background-color:#FF4F57; color: white; padding:10px;" class="col-md-12 text-center">
                                        <h2>Login</h2>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-icon">
                                            <i class="ti-user"></i>
                                            <input id="username" type="text" class="form-control" name="userName" placeholder="Username">
                                        </div>
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class=" form-group">
                                        <div class="input-icon">
                                            <i class="ti-lock"></i>
                                            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                        </div>
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-nd-12">
                                    <div class="form-group text-center">
                                        <button class="btn btn-common log-btn">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </div>
        </div>
        <br><br>
@endsection