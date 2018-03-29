@extends('mainlayout')

@section('pageheader')
    My Employees
@endsection

@section('contain')

<section class="job-browse section">
    <div class="container">
        <div class="row">
            <div class="pull-right">
                <a href="{{route('employeeEdit')}}"><div class="btn btn-common btn-rm">Add New Employee</div></a>
            </div><br><br><br>
            <div class="col-md-9 col-sm-8">
                @foreach($myemp as $myemp)
                    <div class="job-list" style="width: 100%;">
                        <div class="thumb">
                            <a href="{{route('employeeProfile')}}"><img src="{{asset('assets/img/employee/christian.jpg')}}" height="100px" width="100px" class="img-circle" alt=""></a>
                        </div>
                        <div class="job-list-content">
                            <h4><a href="{{route('employeeProfile')}}">{{$myemp->firstname}}&nbsp;&nbsp;{{$myemp->lastname}}</a><span class="full-time">Avalible</span></h4>
                            <p>{{$myemp->aboutself}}</p>
                            <div class="job-tag">
                                <div class="pull-left">
                                    <div class="meta-tag">
                                        <span><a href="browse-categories.html"><i class="ti-desktop"></i>{{$myemp->keyskill}}</a></span>
                                        <span><i class="ti-location-pin"></i>{{$myemp->city}},{{$myemp->state}},{{$myemp->country}}</span>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <a href="{{route('employeeProfile',['id'=>$myemp->id])}}"><div class="btn btn-common btn-rm">More Detail</div></a>
                                </div>
                            </div>
                        </div>
                    </div>

                 @endforeach

                <!-- Start Pagination -->
                <ul class="pagination">
                    <li class="active"><a href="#" class="btn btn-common" ><i class="ti-angle-left"></i> prev</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li class="active"><a href="#" class="btn btn-common">Next <i class="ti-angle-right"></i></a></li>
                </ul>
                <!-- End Pagination -->
            </div>
            <div class="col-md-3 col-sm-4">
                <aside>
                    <div class="sidebar">
                        <div class="inner-box">
                            <h3>Categories</h3>
                            <ul class="cat-list">
                                <li>
                                    <a href="#">Finance <span class="num-posts">4,287 Jobs</span></a>
                                </li>
                                <li>
                                    <a href="#">Techonologies <span class="num-posts">4,256 Jobs</span></a>
                                </li>
                                <li>
                                    <a href="#">Art/Design<span class="num-posts">3,245 Jobs</span></a>
                                </li>
                                <li>
                                    <a href="#">Science <span class="num-posts">4,256 Jobs</span></a>
                                </li>
                                <li>
                                    <a href="#">Education Training <span class="num-posts">4,560 Jobs</span></a>
                                </li>
                                <li>
                                    <a href="#">Logistics <span class="num-posts">3,256 Jobs</span></a>
                                </li>
                                <li>
                                    <a href="#">Food Services <span class="num-posts">1,256 Jobs</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="inner-box">
                            <h3>Job Status</h3>
                            <ul class="cat-list">
                                <li>
                                    <a href="#">Full Time <span class="num-posts">12,256 Jobs</span></a>
                                </li>
                                <li>
                                    <a href="#">Part Time <span class="num-posts">6,510 Jobs</span></a>
                                </li>
                                <li>
                                    <a href="#">Freelancer <span class="num-posts">1,171 Jobs</span></a>
                                </li>
                                <li>
                                    <a href="#">Internship <span class="num-posts">876 Jobs</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="inner-box">
                            <h3>Locations</h3>
                            <ul class="cat-list">
                                <li>
                                    <a href="#">New York <span class="num-posts">4,197 Jobs</span></a>
                                </li>
                                <li>
                                    <a href="#">San Francisco <span class="num-posts">2,256 Jobs</span></a>
                                </li>
                                <li>
                                    <a href="#">San Diego <span class="num-posts">3,278 Jobs</span></a>
                                </li>
                                <li>
                                    <a href="#">Los Angeles <span class="num-posts">5,294 Jobs</span></a>
                                </li>
                                <li>
                                    <a href="#">Chicago <span class="num-posts">1,746 Jobs</span></a>
                                </li>
                                <li>
                                    <a href="#">Houston <span class="num-posts">871 Jobs</span></a>
                                </li>
                                <li>
                                    <a href="#">New Orleans <span class="num-posts">2,163 Jobs</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection