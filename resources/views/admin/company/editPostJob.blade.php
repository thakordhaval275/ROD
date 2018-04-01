@extends('admin.adminlayoute')

@section('contain')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Job
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('adminindex')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{route('postJobList')}}"><i class="fa fa-industry"></i> List of Posted Job</a></li>
                <li class="active">Edit Job</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Post Job</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <form method="post" action="{{route('jobpostUpdate')}}" enctype="multipart/form-data">
                    <input type="hidden" name="userType" id="userType" value="{{$job->usertype}}">
                    <input type="hidden" name="id" id="id" value="{{$job->id}}">
                    <input type="hidden" name="hiddenLogo" id="hiddenLogo" value="{{$job->logo}}">
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-6 box-body">

                                    <div class="row">
                                        <div class="col-md-12  @if($errors->first('compnayName')) has-error @endif">
                                            <div class="form-group">
                                                <label>Company Name</label>
                                                <input id="name" name="compnayName" type="text" placeholder="Name of Company" class="form-control input-md" value="{{$job->companyname}}">
                                                @if($errors->first('compnayName'))
                                                    <p class="text-danger"> {{$errors->first('compnayName')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('department')) has-error @endif">
                                            <div class="form-group">
                                                <label>Department</label>
                                                <select id="department" name="department" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select Department</option>
                                                    <option value="IT solution" @if($job->department=='IT solution')selected="selected"@endif>IT solution</option>
                                                    <option value="Finance" @if($job->department=='Finance')selected="selected"@endif>Finance</option>
                                                    <option value="Production" @if($job->department=='Production')selected="selected"@endif>Production</option>
                                                    <option value="Accounting" @if($job->department=='Accounting')selected="selected"@endif>Accounting</option>
                                                </select>
                                                @if($errors->first('department'))
                                                    <p class="text-danger"> {{$errors->first('department')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('jobType')) has-error @endif">
                                            <div class="form-group">
                                                <label>Job Type</label>
                                                <select id="jobtype" name="jobType" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select Job Type</option>
                                                    <option value="Contract Base" @if($job->jobtype=='Contract Base')selected="selected"@endif>Contract Base</option>
                                                    <option value="Company Base" @if($job->jobtype=='Company Base')selected="selected"@endif>Company Base</option>
                                                </select>
                                                @if($errors->first('jobType'))
                                                    <p class="text-danger"> {{$errors->first('jobType')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('term')) has-error @endif">
                                            <div class="form-group">
                                                <label>Term</label>
                                                <div class="form-group">
                                                    <label>
                                                        <input id="term" type="radio" name="term" value="Long Term" class="minimal-red" @if($job->term=='Long Term')checked="checked"@endif>&nbsp;&nbsp;Long Term
                                                    </label>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <label>
                                                        <input id="term" type="radio" name="term" value="Sort Term" class="minimal-red" @if($job->term=='Sort Term')checked="checked"@endif>&nbsp;&nbsp;Short Term
                                                    </label>
                                                </div>
                                                @if($errors->first('term'))
                                                    <p class="text-danger"> {{$errors->first('term')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Company Logo</label>
                                                <input type="file" name="companylogo" id="companylogo">
                                                <p class="help-block">Change Company Logo here.</p>
                                                <img class="img-responsive img-circle" src="{{ asset('assets/img/company/'.$job->logo) }}" width="150" height="150">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 box-body">

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('termPeriod')) has-error @endif">
                                            <div class="form-group">
                                                <label>Term Period</label>
                                                <input id="termPeriod" name="termPeriod" type="text" placeholder="Termperiod (Ex: No of Weeks,   No of Days..etc)" class="form-control input-md" value="{{$job->termperiod}}">
                                                @if($errors->first('termPeriod'))
                                                    <p class="text-danger"> {{$errors->first('termPeriod')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('experience')) has-error @endif">
                                            <div class="form-group">
                                                <label>Experience</label>
                                                <select  id="experience" name="experience" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="Fresher" @if($job->experience=='Fresher')selected="selected"@endif>Fresher</option>
                                                    @for($i=1;$i<=15;$i++)
                                                        <option value="{{$i}}" @if($job->experience==$i)selected="selected"@endif>{{$i}} Year</option>
                                                    @endfor
                                                </select>
                                                @if($errors->first('experience'))
                                                    <p class="text-danger"> {{$errors->first('experience')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('payment')) has-error @endif">
                                            <div class="form-group">
                                                <label>Payment</label>
                                                <input id="payment" name="payment" type="number" placeholder="Payment" class="form-control input-md" value="{{$job->payment}}">
                                                @if($errors->first('payment'))
                                                    <p class="text-danger"> {{$errors->first('payment')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 @if($errors->first('noOfPostion')) has-error @endif">
                                            <div class="form-group">
                                                <label>No. of Positions</label>
                                                <select  id="noOfPostion"  name="noOfPostion" class="form-control select2" style="width: 100%;">
                                                    <option value="">No Of Positions</option>
                                                    @for($i=0;$i<200;$i=$i+5)
                                                        <option value="{{$i}}" @if($job->experiance=='')selected="selected"@endif>{{$i}}</option>
                                                    @endfor
                                                </select>
                                                @if($errors->first('noOfPostion'))
                                                    <p class="text-danger"> {{$errors->first('noOfPostion')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row @if($errors->first('description')) has-error @endif">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Job Description</label>
                                                <textarea id="description" name="description" placeholder="Description" class="form-control input-md" rows="7">{{$job->jobdescription}}</textarea>
                                                @if($errors->first('description'))
                                                    <p class="text-danger"> {{$errors->first('description')}} </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('postJobList')}}"><button type="button" class="btn btn-primary">Cancel</button></a>
                    </div>
                    <!-- /.box-footer-->
                </form>
            </div>
            <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection