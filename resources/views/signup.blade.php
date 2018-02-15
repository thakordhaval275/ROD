@extends('mainlayout')
@section('pageheader')
    Sign Up
@endsection
@section('contain')
    <div class="container">
       <br><br>
        <div class="row">
            <form>
                <div class="col-md-3"></div>
                <div class=" form-group input-group col-md-6">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="email" type="text" class="form-control" name="userName" placeholder="User Name">
                </div><!--/form-group,input grp, col-4-->
                <div class="col-md-3"></div>
            </form>
        </div><!--/row main-->

        <div class="row">
            <form>
                <div class="col-md-3"></div>
                <div class=" form-group input-group col-md-6">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input id="email" type="email" class="form-control" name="email" placeholder="Email">
                </div><!--/form-group,input grp, col-4-->
                <div class="col-md-3"></div>
            </form>
        </div><!--/row main-->

        <div class="row">
            <form>
                <div class="col-md-3"></div>
                <div class=" form-group input-group col-md-6">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                </div><!--/form-group,input grp, col-4-->
                <div class="col-md-3"></div>
            </form>
        </div><!--/row main-->

        <div class="row">
            <form>
                <div class="col-md-3"></div>
                <div class=" form-group input-group col-md-6">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="cpassword" type="password" class="form-control" name="cpassword" placeholder="Conform Password">
                </div><!--/form-group,input grp, col-4-->
                <div class="col-md-3"></div>
            </form>
        </div><!--/row main-->
        <!-- Button (Double) -->
        <div class="row">
            <div class="col-md-3"></div>
            <div class="form-group">
                <div class="col-md-6 text-center">
                    <button type="submit" id="submit" class="btn btn-common">Sign Up</button>&nbsp;&nbsp;
                    <a id="cancel" name="cancel" class="btn btn-common" href="#">
                        Cancel</a>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div><!--/row-->
        <br><br>
    </div><!--/container-->

@endsection
