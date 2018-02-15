@extends('mainlayout')
@section('pageheader')
    My Account
@endsection
@section('contain')
    <div class="container">
        <br>
        <div class="row">
            <div class="panel panel-info">
                <div class="panel-heading">Personal Details</div>
                <div class="panel-body">
                    <input type="text" name="fname" placeholder="name">
                </div>
            </div><!--/panel-->
        </div><!--/row-->

        <div class="row">
            <div class="panel panel-danger">
                <div class="panel-heading">Personal Details</div>
                <div class="panel-body">
                    <input type="text"  class="text-center" name="fname" placeholder="name">
                </div>
            </div><!--/panel-->
        </div><!--/row-->
        
    </div><!--/container-->

@endsection
