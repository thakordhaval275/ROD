@extends('admin.adminlayoute')

@section('contain')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <br>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Recruiters's Employee List
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('adminindex')}}"><i class="fa fa-dashboard"></i> Home</a></li>
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
                                    <th>Recruiter Email</th>
                                    <th>Employee Email</th>
                                    <th>Gender</th>
                                    <th>Birthdate</th>
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
                                        <td>{{$mylist->useremail}}</td>
                                        <td>{{$mylist->emailid}}</td>
                                        <td>{{$mylist->gender}}</td>
                                        <td>{{$mylist->bdate}}</td>
                                        <td>{{$mylist->keyskill}}</td>
                                        <td>{{$mylist->contectno}}</td>
                                        <td>{{$mylist->expirienceyear}}</td>
                                        <td>{{$mylist->city}}</td>
                                        <td class="text-center"><a href="{{route('viewMyEmp',['id'=>$mylist->id])}}"><i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="View"></i> </a>
                                            @if($mylist->usertype=="0")
                                            &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{route('editMyEmp',['id'=>$mylist->id])}}"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{route('destroyMyEmp',['id'=>$mylist->id])}}"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a></td>
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