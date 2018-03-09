@extends('admin.adminlayoute')

@section('contain')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4">
                </div>
                <div class="col-md-6">
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-block btn-danger">Add Company</button>
                </div>
            </div>
        </div>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Companeis List
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">list Of Companeis</a></li>
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
                                    <th>Logo</th>
                                    <th>About Company</th>
                                    <th>Company Name</th>
                                    <th>Location</th>
                                    <th>Address</th>
                                    <th>Email id</th>
                                    <th>Website</th>
                                    <th>Company Type</th>
                                    <th>Found Year</th>
                                    <th>No.of Employee</th>
                                    <th>Password</th>
                                    <th>Security Que</th>
                                    <th>Security Ans</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($clist as $list)
                                    <tr>
                                        <td>{{$list->logo}}</td>
                                        <td>{{$list->aboutcompany}}</td>
                                        <td>{{$list->companyname}}</td>
                                        <td>{{$list->location}}</td>
                                        <td>{{$list->address}}</td>
                                        <td>{{$list->emailid}}</td>
                                        <td>{{$list->website}}</td>
                                        <td>{{$list->companytype}}</td>
                                        <td>{{$list->foundyear}}</td>
                                        <td>{{$list->noofemployee}}</td>
                                        <td>{{$list->password}}</td>
                                        <td>{{$list->securityque}}</td>
                                        <td>{{$list->securityans}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Logo</th>
                                    <th>About Company</th>
                                    <th>Company Name</th>
                                    <th>Location</th>
                                    <th>Address</th>
                                    <th>Email id</th>
                                    <th>Website</th>
                                    <th>Company Type</th>
                                    <th>Found Year</th>
                                    <th>No.of Employee</th>
                                    <th>Password</th>
                                    <th>Security Que</th>
                                    <th>Security Ans</th>
                                </tr>
                                </tfoot>
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