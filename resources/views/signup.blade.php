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
               <form method="post" action="{{route('userSignup')}}" class="login-form">
{{csrf_field()}}
                   <div class="row">
                       <div class="col-md-12">
                           <div style="background-color:#FF4F57; color: white; padding:10px;" class="col-md-12 text-center">
                               <h2>Registration</h2>
                           </div>
                       </div>
                   </div>
                   <br>

                   <div class="row">
                       <div class="col-md-12 @if($errors->first('userName')) has-error @endif">
                           <div class="form-group">
                               <div class="input-icon">
                                   <i class="ti-user"></i>
                                   <input id="username" type="text" class="form-control" name="userName" placeholder="Username" value="{{old('userName')}}">
                               </div>
                               <span class="material-input"></span>
                               @if($errors->first('userName'))
                                   <p class="text-danger"> {{$errors->first('userName')}} </p>
                               @endif
                           </div>
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-md-12 @if($errors->first('email')) has-error @endif">
                           <div class=" form-group">
                               <div class="input-icon">
                                   <i class="ti-email"></i>
                                   <input id="email" type="email" class="form-control" name="email" placeholder="Email">
                               </div>
                               <span class="material-input"></span>
                               @if($errors->first('email'))
                               <p class="text-danger"> {{$errors->first('email')}} </p>
                               @endif
                           </div>
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-md-12 @if($errors->first('password')) has-error @endif">
                           <div class=" form-group">
                               <div class="input-icon">
                                   <i class="ti-lock"></i>
                                   <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                               </div>
                               <span class="material-input"></span>
                               @if($errors->first('password'))
                                   <p class="text-danger"> {{$errors->first('password')}} </p>
                               @endif
                           </div>
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-md-12 @if($errors->first('password_confirmation')) has-error @endif">
                           <div class=" form-group">
                               <div class="input-icon">
                                   <i class="ti-lock"></i>
                                   <input id="cpassword" type="password" class="form-control" name="password_confirmation" placeholder="Conform Password">
                               </div>
                               <span class="material-input"></span>
                               @if($errors->first('password_confirmation'))
                                   <p class="text-danger"> {{$errors->first('password_confirmation')}} </p>
                               @endif
                           </div>
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-md-12 @if($errors->first('userType')) has-error @endif">
                           <div class="form-group">
                               <div class="search-category-container">
                                   <select id="userType" name="userType" class="form-control dropdown-product selectpicker">
                                       <option value="">Select UserType</option>
                                       <option value="1">Company</option>
                                       <option value="2">Recruiter</option>
                                       <option value="3">Employee</option>
                                   </select>
                               </div>
                               <span class="material-input"></span>
                               @if($errors->first('userType'))
                                   <p class="text-danger"> {{$errors->first('userType')}} </p>
                               @endif
                           </div>
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-md-12  @if($errors->first('securityQue')) has-error @endif">
                           <div class="form-group">
                               <div class="search-category-container">
                                   <select id="securityQue" name="securityQue" class="form-control dropdown-product selectpicker">
                                       <option value="">Select Security Question</option>
                                       <option value="In what city were you born?">In what city were you born?</option>
                                       <option value="What is the name of your first school?">What is the name of your first school?</option>
                                       <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
                                       <option value="Who is your favorite actor, musician, or artist?">Who is your favorite actor, musician, or artist?</option>
                                   </select>
                               </div>
                               <span class="material-input"></span>
                               @if($errors->first('securityQue'))
                                   <p class="text-danger"> {{$errors->first('securityQue')}} </p>
                               @endif
                           </div>
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-md-12  @if($errors->first('securityAns')) has-error @endif">
                           <div class="form-group">
                               <div class="input-icon">
                                   <i class="ti-key"></i>
                                   <input id="securityAns" type="text" class="form-control" name="securityAns" placeholder="Security Ans">
                               </div>
                               <span class="material-input"></span>
                               @if($errors->first('securityAns'))
                                   <p class="text-danger"> {{$errors->first('securityAns')}} </p>
                               @endif
                           </div>
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-nd-12">
                           <div class="form-group text-center">
                               <button type="submit" class="btn btn-common log-btn">Sign Up</button>
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
