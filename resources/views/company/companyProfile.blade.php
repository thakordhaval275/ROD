@extends('mainlayout')

@section('pageheader')
    My Account
@endsection

@section('contain')
    <div class="container">
        <br>
        <form class="form-horizontal" method="get" action="#" enctype="multipart/form-data">
            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Company Name</label>
                <div class="col-md-4">
                    <input id="name" name="name" type="text" placeholder="Name of Company" class="form-control input-md">
                    <span class="help-block">Please type in your full name</span>
                </div>
            </div>

            <!-- Select company head office location-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="companylcation">Company Location</label>
                <div class="col-md-2">
                    <select id="location" name="location" class="form-control">
                        <option value="India">India</option>
                        <option value="USA">USA</option>
                        <option value="New York">New York</option>
                    </select>
                </div>
            </div>

            <!-- Select address-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Company Address</label>
                <div class="col-md-4">
                    <textarea  class="form-control" name="companyaddress" id="companyaddress" placeholder="Address of company"></textarea>
                </div>
            </div>

            <!-- company Website Input -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="website">Company Website</label>
                <div class="col-md-4">
                    <input type="text" name="website" id="website" placeholder="Company's Website" class="form-control">
                    <span class="help-block">Please Enter Company's official Website</span>

                </div>
            </div>
            <!-- company's Type input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="termPeriod">Company Type</label>
                <div class="col-md-4">
                    <input id="companytype" name="companytype" type="text" placeholder="Ex.:PVT limited, limited...etc" class="form-control input-md">
                    <span class="help-block">Please Enter Type of Company</span>
                </div>
            </div>

            <!-- year of founded input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="found"> Year of Found</label>
                <div class="col-md-4">
                    <input id="yearoffound" name="yearoffound" type="number" placeholder="year of found"
                           class="form-control input-md">
                    <span class="help-block"> year</span>
                </div>
            </div>
            <!-- No of Employees input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="noofemp">No Of Employees</label>
                <div class="col-md-4">
                    <input id="noofemp" name="noofemp" type="text" placeholder="No Of Employees working..." class="form-control input-md">
                    <span class="help-block">Please type No of Employees are working in Company</span>
                </div>
            </div>

            <!-- Description input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">About your company</label>
                <div class="col-md-4">
                    <textarea id="about" name="about" class="form-control" placeholder="Short Description About Company"></textarea>
                    <span class="help-block">Please type short description about Company</span>
                </div>
            </div>

            <!-- Upload Comapny Logo input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="description">Upload Company's Logo</label>
                <div class="col-md-4">
                    <input id="companylogo" name="companylogo" type="file"
                           class="input-md" multiple>
                    <span class="help-block">Please provide your logo and cover photo</span>
                </div>
            </div>

            <!-- Upload Comapny's Photos input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="description">Upload Company's Photos</label>
                <div class="col-md-4">
                    <input id="companyphoto" name="companyphoto" type="file"
                           class="input-md" multiple>
                    <span class="help-block">Please provide your photo</span>
                </div>
            </div>

            <!-- Button (Double) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="button1id"></label>
                <div class="col-md-8">
                    <button type="submit" class="btn btn-common">Save</button>
                    <a id="cancel" name="cancel" class="btn btn-common" href="#">Cancel</a>
                </div>
            </div>
        </form>
    </div>

@endsection
