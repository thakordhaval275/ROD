@extends('mainlayout')

@section('pageheader')
    Job Post
@endsection

@section('contain')
    <br><br>
    <div class="profile-page">
        <div class="wrapper">
            <br><br><br><br><br><br><br>
            <form method="get" action="#">
                <div class="main main-raised">
                    <div class="profile-content">
                        <div class="container">
                            <div class="row">
                                <div class="profile">
                                    <div class="avatar">
                                        <img src="assets/img/company/Mtaj.png" alt="Circle Image" class="img-circle img-responsive img-raised"><br></a>
                                    </div>
                                    <div class="name">
                                        <h3 class="title">MTAJ Solutions PVT LTD</h3>
                                        <h6>Software Company</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="description text-center">
                                <p>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <br><br>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="panel panel-danger">
                                            <div class="panel-heading">Post Job</div>
                                            <div class="panel-body">
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Company Name</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <input id="name" name="name" type="text" placeholder="Name of Company" class="form-control input-md">
                                                                    <span class="help-block">Please type in your full name</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Job Type</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <div class="search-category-container">
                                                                        <label class="styled-select">
                                                                            <select id="jobtype" name="jobtype" class="form-control dropdown-product selectpicker">
                                                                                <option value="">Select Job Type</option>
                                                                                <option value="Contract Base">Contract Base</option>
                                                                                <option value="Company Base">Company Base</option>
                                                                            </select>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Department</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <div class="search-category-container">
                                                                        <label class="styled-select">
                                                                            <select id="department" name="department" class="form-control dropdown-product selectpicker">
                                                                                <option value="">Select Department</option>
                                                                                <option value="IT solution">IT solution</option>
                                                                                <option value="Finance">Finance</option>
                                                                                <option value="Production">Production</option>
                                                                                <option value="Accounting">Accounting</option>
                                                                            </select>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Term</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <input id="term" type="radio" name="term" value="long">&nbsp;<strong>Long Term</strong>
                                                                    &nbsp;&nbsp;
                                                                    <input id="term" type="radio" name="term" value="short">&nbsp;<strong>Short Term</strong>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Term Period</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <input id="termPeriod" name="termPeriod" type="text" placeholder="Termperiod (Ex: No of Weeks,   No of Days..etc)" class="form-control input-md">
                                                                    <span class="help-block">Please type in term period</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Experience</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <input id="experience" name="experience" type="number" placeholder="Experience" class="form-control input-md">
                                                                    <span class="help-block">In year</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Payment</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <input id="payment" name="payment" type="number" placeholder="Payment" class="form-control input-md">
                                                                    <span class="help-block">Please type in your Payment that you Give</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>No. of Positions</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <div class="search-category-container">
                                                                        <label class="styled-select">
                                                                            <select class="form-control dropdown-product selectpicker">
                                                                                <option value="">No Of Positions</option>
                                                                                @for($i=0;$i<200;$i=$i+5)
                                                                                    <option>{{$i}}</option>
                                                                                @endfor
                                                                            </select>
                                                                            <span class="help-block">Please select number of position</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Job Description</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <!-- description input-->
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <input id="description" name="description" type="text" placeholder="Description" class="form-control input-md">
                                                                    <span class="help-block">Please provide brief job Description</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                    </div>
                                </div>
                            </div><br>
                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-common">Save</button>
                                    <a id="cancel" name="cancel" class="btn btn-common" href="{{route('companyProfile')}}">Cancel</a>
                                </div>
                            </div>
                        </div><br><br>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br><br>
@endsection
