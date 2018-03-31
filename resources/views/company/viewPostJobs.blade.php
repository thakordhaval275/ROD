@extends('mainlayout')

@section('pageheader')
    List of Jobs
@endsection

@section('contain')

    <section class="job-browse section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            @if(Auth::user()->usertype==1)
                                <a href="{{route('jobpost')}}"><div class="btn btn-common btn-rm">Add New Job</div></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    @foreach($JobPost as $viewJob)
                        <div class="job-list" style="width: 100%;">
                            <div class="thumb">
                                <a href="{{route('companyProfile')}}"><img src="@if($viewJob->logo=="") {{ asset('assets/img/company/default.png').'/'.$viewJob->logo}} @else {{ asset('assets/img/company/').'/'.$viewJob->logo}} @endif" height="100px" width="100px" class="img-circle" alt=""></a>
                            </div>
                            <div class="job-list-content">
                                <h4><a href="{{route('companyProfile')}}">{{$viewJob->companyname}}</a><span class="full-time">Full-time</span></h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <strong>{{$viewJob->jobtype}}</strong><br>
                                            <strong> @if($viewJob->experience=="Fresher"){{$viewJob->experience}} @else Minimum {{$viewJob->experience}} Years of experience @endif</strong>
                                        </div><!--/col-6-->
                                        <div class="col-md-6">
                                            <strong>{{$viewJob->department}}</strong><br>
                                            <strong>{{$viewJob->noofpositions}} vacancy</strong>
                                        </div><!--/col-6-->
                                    </div><!--/col-12-->
                                </div><!--/row-->
                                <div class="job-tag">
                                    <div class="pull-left">
                                        <div class="meta-tag">
                                            <span><a href="browse-categories.html"><i class="ti-desktop"></i>Technologies</a></span>
                                            <span><i class="ti-location-pin"></i>Vadodara, Gujarat, India</span>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        @if(Auth::user()->usertype==1)
                                            <div class="icon">
                                                <a href="{{route('jobpostEdit',['id'=>$viewJob->id])}}"><i class="ti-pencil"></i></a>
                                            </div>
                                            <div class="icon">
                                                <a href="{{route('destroyJob',['id'=>$viewJob->id])}}"><i class="ti-trash"></i></a>
                                            </div>
                                        @elseif(Auth::user()->usertype==2)
                                            <div class="icon">
                                                <a href="{{route('proposal',['id'=>$viewJob->id])}}"><i class="fa fa-paper-plane"></i></a>
                                            </div>
                                        @endif
                                        <a href="{{route('jobDetail',['id'=>$viewJob->id])}}"><div class="btn btn-common btn-rm">More Detail</div></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                    <br>
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