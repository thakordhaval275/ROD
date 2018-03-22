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
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email id</th>
                                    <th>Relation to Rod</th>
                                    <th>Company</th>
                                    <th>Other</th>
                                    <th>Country</th>
                                    <th>Contact No</th>
                                    <th>How can we help</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($contact as $list)
                                    <tr>
                                        <td>{{$list->id}}</td>
                                        <td>{{$list->firstname}}</td>
                                        <td>{{$list->lastname}}</td>
                                        <td>{{$list->city}}</td>
                                        <td>{{$list->gender}}</td>
                                        <td>{{$list->emailid}}</td>
                                        <td>{{$list->postgraduate}}</td>
                                        <td>{{$list->graduate}}</td>
                                        <td>{{$list->expirienceyear}}</td>
                                        <td>{{$list->keyskill}}</td>
                                        <td><a href="{{route('viewEmployee',['id'=>$list->id])}}"><i class="fa fa-eye"></i> </a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{route('editEmployee',['id'=>$list->id])}}"><i class="fa fa-pencil"></i></a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{route('destroyEmployee',['id'=>$list->id])}}"><i class="fa fa-trash"></i></a></td>
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