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
                    <a href="{{route('addMyEmp')}}"><button type="button" class="btn btn-block btn-danger">Add New Employee</button></a>
                </div>
            </div>
        </div>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Recruiters's Employee List
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">list Of Recruiters's Employee</li>
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
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email id</th>
                                    <th>PG</th>
                                    <th>UG</th>
                                    <th>Skill</th>
                                    <th>Contact No.</th>
                                    <th>Experience</th>
                                    <th>Location</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($myemplist as $mylist)
                                    <tr>
                                        <td>{{$mylist->id}}</td>
                                        <td>{{$mylist->firstname}}</td>
                                        <td>{{$mylist->lastname}}</td>
                                        <td>{{$mylist->emailid}}</td>
                                        <td>{{$mylist->postgraduate}}</td>
                                        <td>{{$mylist->graduate}}</td>
                                        <td>{{$mylist->keyskill}}</td>
                                        <td>{{$mylist->contectno}}</td>
                                        <td>{{$mylist->expirienceyear}}</td>
                                        <td>{{$mylist->city}}</td>
                                        <td><a href="{{route('viewMyEmp',['id'=>$mylist->id])}}"><i class="fa fa-eye"></i> </a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="fa fa-pencil"></i></a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{route('destroyMyEmp',['id'=>$mylist->id])}}"><i class="fa fa-trash"></i></a></td>
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