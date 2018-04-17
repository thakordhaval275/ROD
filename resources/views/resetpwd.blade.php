@extends('mainlayout')

@section('pageheader')
    Reset Password
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
                        <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>
                        <form class="cd-form" method="post" action="{{route('resetLink')}}">
                            {{csrf_field()}}
                            <div class="form-group is-empty">
                                <div class="input-icon">
                                    <i class="ti-email"></i>
                                    <input type="text" id="sender-email" class="form-control" name="email" placeholder="Email">
                                </div>
                                <span class="material-input"></span></div>
                            <p class="fieldset">
                                <button class="btn btn-common log-btn" type="submit" onclick="mail()">Reset password</button>
                            </p>
                        </form>
                        <p class="cd-form-bottom-message"><a href="{{route('login')}}">Back to log-in</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <script>
        function mail() {
            alert("please check your mail.");
        }
    </script>
@endsection