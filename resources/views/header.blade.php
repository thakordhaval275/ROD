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
                            <a href="#">
                                Services
                            </a>
                        </li>
                        <li>
                            <a href="{{route('contactus')}}">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right float-right">
                        <li class="left"><a href="#"><i class="ti-pencil-alt"></i> Post A Job</a></li>
                        <li class="right"><a href="#"><i class="ti-lock"></i>  Log In</a></li>
                        <li class="btn-m"><a href="#Who can join us"><i class="ti-user"></i>  Sign Up</a></li>
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
                </li>
                <li>
                    <a href="{{route('contactus')}}">Contact Us</a>
                </li>
                <li class="btn-m"><a href="#"><i class="ti-pencil-alt"></i> Post A Job</a></li>
                <li class="btn-m"><a href="#"><i class="ti-lock"></i>  Log In</a></li>
                <li class="btn-m"><a href="#"><i class="ti-user"></i>  Sign Up</a></li>
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
                <li><a href="index.html">Home</a></li>
                <li><a href="index-02.html">Home Page 2</a></li>
                <li><a href="index-03.html">Home Page 3</a></li>
                <li><a href="index-04.html">Home Page 4</a></li>
                <li><a href="about.html">About us</a></li>
                <li><a href="job-page.html">Job Page</a></li>
                <li><a href="job-details.html">Job Details</a></li>
                <li><a href="resume.html">Resume Page</a></li>
                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                <li><a href="pricing.html">Pricing Tables</a></li>
                <li><a href="browse-jobs.html">Browse Jobs</a></li>
                <li><a href="browse-categories.html">Browse Categories</a></li>
                <li><a href="add-resume.html">Add Resume</a></li>
                <li><a href="manage-resumes.html">Manage Resumes</a></li>
                <li><a href="job-alerts.html">Job Alerts</a></li>
                <li><a href="post-job.html">Add Job</a></li>
                <li><a href="manage-jobs.html">Manage Jobs</a></li>
                <li><a href="manage-applications.html">Manage Applications</a></li>
                <li><a href="browse-resumes.html">Browse Resumes</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="faq.html">Faq</a></li>
                <li><a href="my-account.html">Login</a></li>
            </ul><!--- End Menu -->
        </div> <!--- End Off Canvas Side Menu -->
        <div class="tbtn wow pulse" id="menu" data-wow-iteration="infinite" data-wow-duration="500ms" data-toggle="offcanvas" data-target=".navmenu">
            <p><i class="ti-files"></i> All Pages</p>
        </div>
    </div>
</div>

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