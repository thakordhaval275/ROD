@extends('mainlayout')
@section('pageheader')
    Job Post
@endsection
@section('contain')
    <br><br>
    <div class="container">
        <br>
        <form class="form-horizontal" method="get" action="#">
            <!-- Text input-->
            <div class="form-group">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <input id="name" name="name" type="text" placeholder="Name of Company" class="form-control input-md">
                    <span class="help-block">Please type in your full name</span>
                </div>
                <div class="col-md-3">
                </div>
            </div>

            <!-- Select Job Type-->
            <div class="form-group">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <select id="jobtype" name="jobtype" class="form-control">
                        <option value="ContractBase">ContractBase</option>
                        <option value="CompanyBase">CompanyBase</option>
                    </select>
                </div>
                <div class="col-md-3">
                </div>
            </div>

            <!-- Select Job Department-->
            <div class="form-group">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <select id="department" name="department" class="form-control">
                        <option value="IT solution">IT solution</option>
                        <option value="Finance">Finance</option>
                        <option value="Production">Production</option>
                        <option value="Accounting">Accounting</option>
                    </select>
                </div>
                <div class="col-md-3">
                </div>
            </div>

            <!-- Term Input -->
            <div class="form-group">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <div class="checkbox">
                        <label><input name="genderboxes" class="" id="genderboxeslong" value="1" type="radio"><b> Long Term</b></label>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <label><input name="genderboxes" id="genderboxesshort" value="2" type="radio"><b> Short Term</b></label>
                    </div>
                    <span class="help-block">Please select term</span>
                </div>
                <div class="col-md-3">
                </div>
            </div>

            <!-- term period input-->
            <div class="form-group">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <input id="termPeriod" name="termPeriod" type="text" placeholder="Termperiod (Ex: No of Weeks,   No of Days..etc)" class="form-control input-md">
                    <span class="help-block">Please type in term period</span>
                </div>
                <div class="col-md-3">
                </div>
            </div>

            <!-- Experience input-->
            <div class="form-group">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <input id="experience" name="experience" type="number" placeholder="Experience" class="form-control input-md">
                    <span class="help-block">In year</span>
                </div>
                <div class="col-md-3">
                </div>
            </div>

            <!-- Payment input-->
            <div class="form-group">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <input id="payment" name="payment" type="text" placeholder="Payment" class="form-control input-md">
                    <span class="help-block">Please type in your Payment that you Give</span>
                </div>
                <div class="col-md-3">
                </div>
            </div>

            <!-- No of Positions input-->
            <div class="form-group">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <select class="form-control">
                        <option value="">No Of Positions</option>
                        @for($i=0;$i<200;$i=$i+5)
                            <option>{{$i}}</option>
                        @endfor
                    </select>
                    <span class="help-block">Please select number of position</span>
                </div>
                <div class="col-md-3">
                </div>
            </div>

            <!-- description input-->
            <div class="form-group">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <input id="description" name="description" type="text" placeholder="Description" class="form-control input-md">
                    <span class="help-block">Please provide your brief Description</span>
                </div>
                <div class="col-md-3">
                </div>
            </div>

            <!-- Button (Double) -->
            <div class="form-group">
                <div class="col-md-3">
                </div>
                <div class="col-md-6 text-center">
                    <button type="submit" class="btn btn-common">Save</button>
                    <a id="cancel" name="cancel" class="btn btn-common" href="#">Cancel</a>
                </div>
                <div class="col-md-3">
                </div>
            </div>
        </form>
    </div>
<br><br>
@endsection
