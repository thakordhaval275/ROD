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
                <div class="col-md-2">
                    <a href="{{route('addJob')}}"><button type="button" class="btn btn-block btn-danger">Add New Job</button></a>
                </div>
            </div>
        </div>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               List Of Posted Job
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('adminindex')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">List Of Posted Job</li>
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
                                    <th>Company Name</th>
                                    <th>Job Type</th>
                                    <th>Department</th>
                                    <th>Term</th>
                                    <th>Term Period</th>
                                    <th>Experience</th>
                                    <th>Payment</th>
                                    <th>noofpositions</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($joblist as $list)
                                    <tr>
                                        <td>{{$list->id}}</td>
                                        <td>{{$list->companyname}}</td>
                                        <td>{{$list->jobtype}}</td>
                                        <td>{{$list->department}}</td>
                                        <td>{{$list->term}}</td>
                                        <td>{{$list->termperiod}}</td>
                                        <td>{{$list->experience}}</td>
                                        <td>{{$list->payment}}</td>
                                        <td>{{$list->noofpositions}}</td>
                                        <td class="text-center"><a href="{{route('viewJob',['id'=>$list->id])}}"><i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="View"></i> </a>
                                            @if($list->usertype=="0")
                                            &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{route('editPostJob',['id'=>$list->id])}}"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{route('destroyJob',['id'=>$list->id])}}"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a></td>
                                            @endif
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