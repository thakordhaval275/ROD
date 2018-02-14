@extends('homelayout')

@section('contain')
<div class="search-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Find the job that fits your life</h1><br><h2>More than <strong>12,000</strong> jobs are waiting to Kickstart your career!</h2>
                    <div class="content">
                        <form method="" action="">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="job title / keywords / company name">
                                        <i class="ti-time"></i>
                                    </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" type="email" placeholder="city / province / zip code">
                                            <i class="ti-location-pin"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="search-category-container">
                                            <label class="styled-select">
                                                <select class="dropdown-product selectpicker">
                                                    <option>All Categories</option>
                                                    <option>Finance</option>
                                                    <option>IT & Engineering</option>
                                                    <option>Education/Training</option>
                                                    <option>Art/Design</option>
                                                    <option>Sale/Markting</option>
                                                    <option>Healthcare</option>
                                                    <option>Science</option>
                                                    <option>Food Services</option>
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-sm-6">
                                        <button type="button" class="btn btn-search-icon"><i class="ti-search"></i></button>
                                    </div>
                            </div>
                        </form>
                        </div>
                        <div class="popular-jobs">
                            <b>Popular Keywords: </b>
                            <a href="#">Web Design</a>
                            <a href="#">Manager</a>
                            <a href="#">Programming</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end intro section -->
</div>

<!-- Who We are ? Section Start -->
<section class="find-job section">
    <div class="container">
        <h2 class="section-title">Who We are ?</h2>
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-center">Who We are ? Add Text here</h4>
            </div>
        </div>
    </div>
</section>
<!-- Who We are ? Section End -->

<!-- Who can join us ? Section Start -->
<section class="featured-jobs section">
    <div class="container">
        <h2 class="section-title">Who can join us ?</h2>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="featured-item">
                    <div class="featured-wrap">
                        <div class="featured-inner">
                            <figure class="item-thumb">
                                <a class="hover-effect" href="#">
                                    <img src="assets/img/features/img-1.jpg" alt="">
                                </a>
                            </figure>
                            <div class="item-body">
                                <h3 class="job-title"><a href="#">Company</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="item-foot">
                        <div class="view-iocn">
                            <a href="#"><i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="featured-item">
                    <div class="featured-wrap">
                        <div class="featured-inner">
                            <figure class="item-thumb">
                                <a class="hover-effect" href="#">
                                    <img src="assets/img/features/img-2.jpg" alt="">
                                </a>
                            </figure>
                            <div class="item-body">
                                <h3 class="job-title"><a href="#">Recruiter</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="item-foot">
                        <div class="view-iocn">
                            <a href="#"><i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="featured-item">
                    <div class="featured-wrap">
                        <div class="featured-inner">
                            <figure class="item-thumb">
                                <a class="hover-effect" href="#">
                                    <img src="assets/img/features/img-3.jpg" alt="">
                                </a>
                            </figure>
                            <div class="item-body">
                                <h3 class="job-title"><a href="#">Employee</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="item-foot">
                        <div class="view-iocn">
                            <a href="#"><i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Who can join us ? End -->

<!-- Testimonial Section Start -->
<section id="testimonial" class="section">
    <div class="container">
        <div class="row">
            <div class="touch-slider" class="owl-carousel owl-theme">
                <div class="item active text-center">
                    <img class="img-member" src="assets/img/testimonial/img1.jpg" alt="">
                    <div class="client-info">
                        <h2 class="client-name">Jessica <span>(Senior Accountant)</span></h2>
                    </div>
                    <p><i class="fa fa-quote-left quote-left"></i> The team that was assigned to our project... were extremely professional <i class="fa fa-quote-right quote-right"></i><br> throughout the project and assured that the owner expectations were met and <br> often exceeded. </p>
                </div>
                <div class="item text-center">
                    <img class="img-member" src="assets/img/testimonial/img2.jpg" alt="">
                    <div class="client-info">
                        <h2 class="client-name">John Doe <span>(Project Menager)</span></h2>
                    </div>
                    <p><i class="fa fa-quote-left quote-left"></i> The team that was assigned to our project... were extremely professional <i class="fa fa-quote-right quote-right"></i><br> throughout the project and assured that the owner expectations were met and <br> often exceeded. </p>
                </div>
                <div class="item text-center">
                    <img class="img-member" src="assets/img/testimonial/img3.jpg" alt="">
                    <div class="client-info">
                        <h2 class="client-name">Helen <span>(Engineer)</span></h2>
                    </div>
                    <p><i class="fa fa-quote-left quote-left"></i> The team that was assigned to our project... were extremely professional <i class="fa fa-quote-right quote-right"></i><br> throughout the project and assured that the owner expectations were met and <br> often exceeded. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->

<!-- Our Top Team Section Start -->
<section class="find-job section">
    <div class="container">
        <h2 class="section-title">Our Top Team</h2>
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-center">Our Top Team Add Text here</h4>
            </div>
        </div>
    </div>
</section>
<!-- Our Top Team Section End -->

<!-- Our Top Companies Section Start -->
<section class="find-job section">
    <div class="container">
        <h2 class="section-title">Our Top Companies</h2>
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-center">Our Top Companies Add Text here</h4>
            </div>
        </div>
    </div>
</section>
<!-- Our Top Companies Section End -->

<!-- Our Happy Employees Section Start -->
<section class="find-job section">
    <div class="container">
        <h2 class="section-title">Our Happy Employees</h2>
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-center">Our Happy Employees Add Text here</h4>
            </div>
        </div>
    </div>
</section>
<!-- Our Happy Employees Section End -->

<!-- Counter Section Start -->
<section id="counter">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="counting">
                    <div class="icon">
                        <i class="ti-briefcase"></i>
                    </div>
                    <div class="desc">
                        <h2>Jobs</h2>
                        <h1 class="counter">12050</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="counting">
                    <div class="icon">
                        <i class="ti-user"></i>
                    </div>
                    <div class="desc">
                        <h2>Rrecruiter</h2>
                        <h1 class="counter">10890</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="counting">
                    <div class="icon">
                        <i class="ti-write"></i>
                    </div>
                    <div class="desc">
                        <h2>Resume</h2>
                        <h1 class="counter">700</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="counting">
                    <div class="icon">
                        <i class="ti-heart"></i>
                    </div>
                    <div class="desc">
                        <h2>Company</h2>
                        <h1 class="counter">9050</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter Section End -->

<!-- Clients Section -->
<section class="clients section">
    <div class="container">
        <h2 class="section-title">Our Top Companies</h2>
        <div class="row">
            <div class="touch-slider" class="owl-carousel owl-theme">
                <div class="item active text-center">
                    <img class="img-member" src="assets/img/clients/img1.png" alt="">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img class="img-member" src="assets/img/clients/img2.png" alt="">
                </div>
                <div class="item text-center">
                    <img class="img-member" src="assets/img/clients/img3.png" alt="">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img class="img-member" src="assets/img/clients/img4.png" alt="">
                </div>
                <div class="item text-center">
                    <img class="img-member" src="assets/img/clients/img5.png" alt="">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img class="img-member" src="assets/img/clients/img6.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Client Section End -->
@endsection