@extends('mainlayout')

@section('pageheader')
    My Account
@endsection

@section('contain')
    <br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3">
            </div>
            <div class="col-md-6 box box-primary">
                <form class="form" method="get" action="#">

                    <!-- Text input-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input id="name" name="name" type="text" placeholder="Name of Company" class="form-control input-md">
                                <span class="help-block">Please type in your full name</span>
                            </div>
                        </div>
                    </div>

                    <!-- Select company head office location-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="search-category-container">
                                        <select id="location" name="location" class="form-control dropdown-product selectpicker">
                                            <option value="">Select Location</option>
                                            <option value="India">India</option>
                                            <option value="USA">USA</option>
                                            <option value="New York">New York</option>
                                        </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Select address-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea  class="form-control" name="companyaddress" id="companyaddress" placeholder="Address of company"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- company Website Input -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="website" id="website" placeholder="Company's Website" class="form-control">
                                <span class="help-block">Please Enter Company's official Website</span>
                            </div>
                        </div>
                    </div>

                    <!-- company's Type input-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input id="companytype" name="companytype" type="text" placeholder="Ex.:PVT limited, limited...etc" class="form-control input-md">
                                <span class="help-block">Please Enter Type of Company</span>
                            </div>
                        </div>
                    </div>

                    <!-- year of founded input-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input id="yearoffound" name="yearoffound" type="number" placeholder="year of found"
                                       class="form-control input-md">
                                <span class="help-block"> year</span>
                            </div>
                        </div>
                    </div>

                    <!-- No of Employees input-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input id="noofemp" name="noofemp" type="text" placeholder="No Of Employees working..." class="form-control input-md">
                                <span class="help-block">Please type No of Employees are working in Company</span>
                            </div>
                        </div>
                    </div>

                    <!-- Description input-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea id="about" name="about" class="form-control" placeholder="Short Description About Company"></textarea>
                                <span class="help-block">Please type short description about Company</span>
                            </div>
                        </div>
                    </div>

                    <!-- Upload Comapny Logo input-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input id="companylogo" name="companylogo" type="file"
                                       class="input-md" multiple>
                                <span class="help-block">Please provide your logo and cover photo</span>
                            </div>
                        </div>
                    </div>

                    <!-- Upload Comapny's Photos input-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input id="companyphoto" name="companyphoto" type="file"
                                       class="input-md" multiple>
                                <span class="help-block">Please provide your photo</span>
                            </div>
                        </div>
                    </div>

                    <!-- Button (Double) -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="form-group">
                                <button type="submit" class="btn btn-common">Save</button>
                                <a id="cancel" name="cancel" class="btn btn-common" href="#">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
</div>
    <br><br>
@endsection
