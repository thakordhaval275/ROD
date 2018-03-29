<!-- Header Section Start -->
<div class="header">
    <div class="logo-menu">
        <nav class="navbar navbar-default main-navigation" role="navigation" data-spy="affix" data-offset-top="50">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo" href="{{route('index')}}"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
                </div>

                <div class="collapse navbar-collapse" id="navbar">
                    <!-- Start Navigation List -->
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="active" href="{{route('index')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{route('about')}}">About Us</a>
                        </li>
                        <li>
                            <a href="{{route('contactus')}}">Contact Us</a>
                        </li>
                        <li>
                            <a href="#">Services <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown">
                                <li>
                                    <a href="">My Employee</a>
                                </li>
                                <li>
                                    <a href="">Employees</a>
                                </li>
                                <li>
                                    <a href="">View Jobs</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right float-right">
                        @if(!Auth::user())
                            <li class="right"><a href="{{route('login')}}"><i class="ti-lock"></i>Log In</a></li>
                            <li class="btn-m"><a href="{{route('signup')}}"><i class="ti-user"></i>Sign Up</a></li>
                        @else
                            @if(Auth::user()->usertype=="1")
                                <li class="left"><a href="{{route('companyProfile')}}"><i class="ti-user"></i>Profile</a></li>
                                <li class="left"><a href="{{route('jobpost')}}"><i class="ti-pencil-alt"></i>Post Job</a></li>
                                <li class="left"><a href="#"><i class="ti-list"></i>Proposal</a></li>
                            @elseif(Auth::user()->usertype=="2")
                                <li class="left"><a href="{{route('recruiterProfile')}}"><i class="ti-user"></i>Profile</a></li>
                                <li class="left"><a href="{{route('myEmployee')}}"><i class="fa fa-users"></i>Employee</a></li>
                                <li class="left"><a href="{{route('viewJobs')}}"><i class="fa ti-list"></i>Jobs</a></li>
                            @elseif(Auth::user()->usertype=="3")
                            @endif
                            <li class="right"><a href="{{route('userLogout')}}"><i class="ti-lock"></i>Log out</a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <!-- Mobile Menu Start -->
            <ul class="wpb-mobile-menu">
                <li>
                    <a class="active" href="{{route('index')}}">Home</a>
                </li>
                <li>
                    <a href="{{route('about')}}">About Us</a>
                </li>
                <li>
                    <a href="#">Services</a>
                    <ul>
                        <li><a href="">Add Job</a></li>
                        <li><a href="">Manage Jobs</a></li>
                        <li><a href="">Manage Applications</a></li>
                        <li><a href="">Browse Resumes</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('contactus')}}">Contact Us</a>
                </li>
                <li class="btn-m"><a href="{{route('jobpost')}}"><i class="ti-pencil-alt"></i> Post A Job</a></li>
                <li class="btn-m"><a href="{{route('login')}}"><i class="ti-lock"></i>  Log In</a></li>
                <li class="btn-m"><a href="{{route('signup')}}"><i class="ti-user"></i>  Sign Up</a></li>
            </ul>
            <!-- Mobile Menu End -->
        </nav>

        <!-- Off Canvas Navigation -->
        <div class="navmenu navmenu-default navmenu-fixed-left offcanvas">
            <!--- Off Canvas Side Menu -->
            <div class="close" data-toggle="offcanvas" data-target=".navmenu">
                <i class="ti-close"></i>
            </div>
            <h3 class="title-menu">All Pages</h3>
            <ul class="nav navmenu-nav">
                <li><a href="{{route('index')}}">Home</a></li>
                <li><a href="{{route('companyProfile')}}">Compnay Profile</a></li>
                <li><a href="{{route('recruiterProfile')}}">Recruiter Profile</a></li>
                <li><a href="{{route('employeeProfile')}}">Employee Profile</a></li>
                <li><a href="{{route('about')}}">About us</a></li>
                <li><a href="{{route('jobpost')}}">Job post</a></li>
                <li><a href="manage-jobs.html">Manage Jobs</a></li>
                <li><a href="manage-applications.html">Manage Applications</a></li>
                <li><a href="browse-resumes.html">Browse Resumes</a></li>
                <li><a href="{{route('contactus')}}">Contact</a></li>
                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="{{route('signup')}}">Sign Up</a></li>
            </ul><!--- End Menu -->
        </div> <!--- End Off Canvas Side Menu -->
        <div class="tbtn wow pulse" id="menu" data-wow-iteration="infinite" data-wow-duration="500ms" data-toggle="offcanvas" data-target=".navmenu">
            <p><i class="ti-files"></i> All Pages</p>
        </div>
    </div>
</div>

<!-- Page Header Start -->
<div class="page-header" style="background: url({{asset('assets/img/banner1.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <h2 class="product-title">@yield('pageheader')</h2>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="ti-home"></i> Home</a></li>
                        <li class="current">@yield('pageheader')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Google Maps -->
<style>
    #google-map,
    body,
    html {
        padding: 0;
        height: 460px;
    }
</style>
<!-- Header Section End -->