@extends('admin.adminlayoute')

@section('contain')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4">
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               Sent Proposal List
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Sent Proposal List</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th> Recruiter's Email id</th>
                                    <th> Company Email id</th>
                                    <th>Company Name</th>
                                    <th>No.Of Employees</th>
                                    <th>Employee Qulification</th>
                                    <th> KeySkill</th>
                                    <th> Status</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($Proposal as $proposal)
                                    <tr>
                                        <td>{{$proposal->id}}</td>
                                        <td>{{$proposal->emailid}}</td>
                                        <td>{{$proposal->companyemail}}</td>
                                        <td>{{$proposal->companyname}}</td>
                                        <td>{{$proposal->noofemployee}}</td>
                                        <td>{{$proposal->employeequalification}}</td>
                                        <td>{{$proposal->keyskill}}</td>
                                        <td>@if($proposal->status!=""){{$proposal->status}}@else Pending @endif</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection