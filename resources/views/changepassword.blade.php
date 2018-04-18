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
                        <form class="cd-form" method="post" action="{{route('updatePassword')}}">
                            {{csrf_field()}}
                            <input type="hidden" name="useremail" value="{{$useremail}}">
                            <div class="form-group is-empty">
                                <div class="input-icon  @if($errors->first('password')) has-error @endif">
                                    <i class="ti-lock"></i>
                                    <input type="password" id="password" class="form-control" name="password" placeholder="Enter Password">
                                    @if($errors->first('password'))
                                        <p class="text-danger"> {{$errors->first('password')}} </p>
                                    @endif
                                </div>
                                <br>
                                <div class="input-icon  @if($errors->first('password_confirmation')) has-error @endif">
                                    <i class="ti-lock"></i>
                                    <input type="password" id="conf_password" class="form-control" name="password_confirmation" placeholder=" Enter Confirm Password">
                                    @if($errors->first('password_confirmation'))
                                        <p class="text-danger"> {{$errors->first('password_confirmation')}} </p>
                                    @endif
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