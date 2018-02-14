@extends('mainlayoute')

@section('contain')
    <div class="container">
        <div class="text-center">
            <BR>
            <h1 class="nice" style="color: red;">Post New Job</h1><br>
        </div>
        <form class="form-horizontal" method="post"
              action="#">
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Company Name</label>

                <div class="col-md-4">
                    <input id="name" name="name" type="text" placeholder="Name of Company" class="form-control input-md" required="">
                    <span class="help-block">Please type in your full name</span>
                </div>
            </div>

            <!-- Select Job Type-->
            <div class="row">
                <div class="form-group">
                    <label class="col-md-4 control-label" for="jobtype">Job Type</label>

                    <div class="col-md-2">
                        <select id="jobtype" name="jobtype" class="form-control">
                            <option value="ContractBase">ContractBase</option>
                            <option value="CompanyBase">CompanyBase</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Select Job Department-->
            <div class="row">
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Department</label>

                    <div class="col-md-2">
                        <select id="department" name="department" class="form-control">
                            <option value="IT solution">IT solution</option>
                            <option value="Finance">Finance</option>
                            <option value="Production">Production</option>
                            <option value="Accounting">Accounting</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Term Input -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="checkboxes">Term</label>

                <div class="col-md-4">
                    <div class="checkbox">
                        <label>
                            <input name="genderboxes" id="genderboxeslong" value="1" type="radio">
                            Long
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="genderboxes" id="genderboxesshort" value="2" type="radio">
                            Short
                        </label>
                    </div>
                    <span class="help-block">Please select term</span>

                </div>
            </div>
            <!-- term period input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="termPeriod">Term Period</label>

                <div class="col-md-4">
                    <input id="termPeriod" name="termPeriod" type="text" placeholder="Ex.:No of Weeks,No of Days..etc"
                           class="form-control input-md" required="">
                    <span class="help-block">Please type in term period</span>
                </div>
            </div>
            <!-- Experience input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="experience">Experience</label>

                <div class="col-md-4">
                    <input id="experience" name="experience" type="number" placeholder="experience"
                           class="form-control input-md" required="">
                    <span class="help-block">In year</span>
                </div>
            </div>
            <!-- Payment input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="Payment">Payment</label>

                <div class="col-md-4">
                    <input id="payment" name="payment" type="text" placeholder="Payment" class="form-control input-md"
                           required="">
                    <span class="help-block">Please type in your Payment that you Give</span>
                </div>
            </div>
            <!-- No of Positions input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Number of Positions</label>

                <div class="col-md-2">
                    <select class="form-control">
                        @for($i=0;$i<=200;$i=$i+5)
                            <option>{{$i}}</option>
                        @endfor
                    </select>
                    <span class="help-block">Please select number of position</span>
                </div>
            </div>
            <!-- description input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="description">Description</label>

                <div class="col-md-4">
                    <input id="description" name="description" type="text" placeholder="description"
                           class="form-control input-md" required="">
                    <span class="help-block">Please provide your brief Description</span>
                </div>
            </div>

            <!-- Button (Double) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="button1id"></label>

                <div class="col-md-8">
                    <button type="submit" class="btn btn-success">Save</button>
                    <a id="cancel" name="cancel" class="btn btn-danger" href="#">
                        Cancel</a>
                </div>
            </div>
        </form>
    </div>

@endsection
