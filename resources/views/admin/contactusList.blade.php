@extends('admin.adminlayoute')

@section('contain')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Contect Us List
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('adminindex')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">list Of Contect Us</li>
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
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Email id</th>
                                    <th>Relation to Rod</th>
                                    <th>Company</th>
                                    <th>Other</th>
                                    <th>Country</th>
                                    <th>Contact No</th>
                                    <th>How can we help</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($contact as $list)
                                    <tr>
                                        <td>{{$list->id}}</td>
                                        <td>{{$list->firstname}} {{$list->lastname}}</td>
                                        <td>{{$list->emailid}}</td>
                                        <td>{{$list->relationtorod}}</td>
                                        <td>{{$list->company}}</td>
                                        <td>{{$list->other}}</td>
                                        <td>{{$list->country}}</td>
                                        <td>{{$list->contactno}}</td>
                                        <td>{{$list->howcanwehelp}}</td>
                                        <td class="text-center"><a href="{{route('destroyContact',['id'=>$list->id])}}"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a></td>
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