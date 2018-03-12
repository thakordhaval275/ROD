@extends('admin.adminlayoute')

@section('contain')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Add New Job
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{route('postJobList')}}"><i class="fa fa-industry"></i> List of Posted Job</a></li>
                <li class="active">Add New Job</li>
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
                <form method="post" action="#">
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-6 box-body">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Company Name</label>
                                                <input id="name" name="compnayName" type="text" placeholder="Name of Company" class="form-control input-md">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Department</label>
                                                <select id="department" name="department" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select Department</option>
                                                    <option value="IT solution">IT solution</option>
                                                    <option value="Finance">Finance</option>
                                                    <option value="Production">Production</option>
                                                    <option value="Accounting">Accounting</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Job Type</label>
                                                <select id="jobtype" name="jobType" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select Job Type</option>
                                                    <option value="Contract Base">Contract Base</option>
                                                    <option value="Company Base">Company Base</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Term</label>
                                                <div class="form-group">
                                                    <label>
                                                        <input id="term" type="radio" name="term" value="long" class="minimal-red" checked="true">&nbsp;&nbsp;Long Term
                                                    </label>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <label>
                                                        <input id="term" type="radio" name="term" value="short" class="minimal-red">&nbsp;&nbsp;Short Term
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Company Logo</label>
                                                <input type="file" name="companylogo" id="companylogo">
                                                <p class="help-block">Upload Company Logo here.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 box-body">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Term Period</label>
                                                <input id="termPeriod" name="termPeriod" type="text" placeholder="Termperiod (Ex: No of Weeks,   No of Days..etc)" class="form-control input-md">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Experience</label>
                                                <select  id="experiance" name="experiance" class="form-control select2" style="width: 100%;">
                                                    <option value="">Select</option>
                                                    <option value="">Fresher</option>
                                                    @for($i=1;$i<=15;$i++)
                                                        <option>{{$i}} Year</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Payment</label>
                                                <input id="payment" name="payment" type="number" placeholder="Payment" class="form-control input-md">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>No. of Positions</label>
                                                <select  id="noOfPostion"  name="noOfPostion" class="form-control select2" style="width: 100%;">
                                                    <option value="">No Of Positions</option>
                                                    @for($i=0;$i<200;$i=$i+5)
                                                        <option>{{$i}}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Job Description</label>
                                                <textarea id="description" name="description" placeholder="Description" class="form-control input-md"></textarea>
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