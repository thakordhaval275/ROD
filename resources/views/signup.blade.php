@extends('mainlayout')
@section('pageheader')
    Sign Up
@endsection
@section('contain')
    <br><br>
<div class="container">
   <div class="row">
       <div class="col-md-12">
           <div class="col-md-3">
           </div>
           <div class="col-md-6 box box-primary">
               <form method="post" action="#">

                   <div class="row">
                       <div class="col-md-12">
                           <div class="form-group">
                               <input id="username" type="text" class="form-control" name="userName" placeholder="User Name">
                           </div>
                       </div>
                   </div>

                       <div class="row">
                           <div class="col-md-12">
                               <div class=" form-group">
                                   <input id="email" type="email" class="form-control" name="email" placeholder="Email">
                               </div>
                           </div>
                       </div>

                       <div class="row">
                           <div class="col-md-12">
                               <div class=" form-group">
                                   <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                               </div>
                           </div>
                       </div>

                       <div class="row">
                           <div class="col-md-12">
                               <div class=" form-group">
                                   <input id="cpassword" type="password" class="form-control" name="cpassword" placeholder="Conform Password">
                               </div>
                           </div>
                       </div>

                       <div class="row">
                           <div class="col-nd-12">
                               <div class="form-group text-center">
                                   <button type="submit" id="submit" class="btn btn-common">Sign Up</button>
                                   <a id="cancel" name="cancel" class="btn btn-common" href="#">Cancel</a>
                               </div>
                           </div>
                       </div>
                   </form>
               </div>
               <div class="col-md-3">
               </div>
           </div>
       </div>
   </div>
    <br><br>
@endsection
