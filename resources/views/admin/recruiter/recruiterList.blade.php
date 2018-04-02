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
                    <a href="{{route('addRecruiter')}}"><button type="button" class="btn btn-block btn-danger">Add New Recruiter</button></a>
                </div>
            </div>
        </div>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Recruiters List
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('adminindex')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">list Of Recruiters</li>
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
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Email id</th>
                                    <th>City</th>
                                    <th>Country</th>
                                    <th>Gst Register</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($rlist as $list)
                                    <tr>
                                        <td>{{$list->id}}</td>
                                        <td>{{$list->firstname}} {{$list->lastname}}</td>
                                        <td>{{$list->gender}}</td>
                                        <td>{{$list->emailid}}</td>
                                        <td>{{$list->city}}</td>
                                        <td>{{$list->country}}</td>
                                        <td>{{$list->gstregister}}</td>
                                        <td class="text-center"><a href="{{route('viewRecruiter',['id'=>$list->id])}}"><i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="View"></i> </a>
                                            @if($list->usertype=="0")
                                            &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{route('editRecruiter',['id'=>$list->id])}}"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{route('destroyRecruiter',['id'=>$list->id])}}"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a></td>
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