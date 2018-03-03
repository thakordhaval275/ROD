<!-- Header Section Start -->
<div class="header">
    <!-- Start intro section -->
    <section id="intro" class="section-intro">
        <div class="logo-menu">
            <nav class="navbar navbar-default" role="navigation" data-spy="affix" data-offset-top="50">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo" href="{{route('index')}}"><img src="assets/img/logo.png" alt=""></a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbar">
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav">
                            <li>
                                <a class="active" href="{{route('index')}}">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="{{route('about')}}">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="#">Services <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="#">
                                            Add Job
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Manage Jobs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Manage Applications
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Browse Resumes
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{route('contactus')}}">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right float-right">
                            <li class="left"><a href="{{route('jobpost')}}"><i class="ti-pencil-alt"></i> Post A Job</a></li>
                            <li class="right"><a href="{{route('login')}}"><i class="ti-lock"></i>  Log In</a></li>
                            <li class="btn-m"><a href="{{route('signup')}}"><i class="ti-user"></i>  Sign Up</a></li>
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
                        <ul class="dropdown">
                            <li>
                                <a href="#">
                                    Add Job
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Manage Jobs
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Manage Applications
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Browse Resumes
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('contactus')}}">Contact Us</a>
                    </li>
                    <li class="btn-m"><a href="#"><i class="ti-pencil-alt"></i> Post A Job</a></li>
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
        <!-- Header Section End -->