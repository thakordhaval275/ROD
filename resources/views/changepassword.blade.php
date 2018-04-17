@extends('mainlayout')

@section('pageheader')
    Change Password
@endsection

@section('contain')
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 box box-primary">
                    <div class="page-login-form is-selected" id="cd-reset-password">
                        <form class="cd-form" method="post" action="#">
                            {{csrf_field()}}
                            <div class="form-group is-empty">
                                <div class="input-icon">
                                    <i class="ti-lock"></i>
                                    <input type="text" id="password" class="form-control" name="password" placeholder="Enter Password">
                                </div>
                                <br>
                                <div class="input-icon">
                                    <i class="ti-lock"></i>
                                    <input type="text" id="conf_password" class="form-control" name="conf_password" placeholder=" Enter Confirm Password">
                                </div>
                                <span class="material-input"></span></div>
                            <p class="fieldset">
                                <button class="btn btn-common log-btn" type="submit">Change password</button>
                            </p>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection