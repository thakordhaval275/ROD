@extends('mainlayout')
@section('pageheader')
    Job Post
@endsection
@section('contain')
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3">
                </div>
                <div class="col-md-6 box box-primary">
                    <form class="form-horizontal" method="get" action="#">
                        <!-- Text input-->
                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="name" name="name" type="text" placeholder="Name of Company" class="form-control input-md">
                                <span class="help-block">Please type in your full name</span>
                            </div>
                        </div>

                        <!-- Select Job Type-->
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

                        <!-- Select Job Department-->
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

                        <!-- Term Input -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="form-control">
                                    <div class="col-md-6">
                                        <input name="term" class="radio-inline" id="term" type="radio">&nbsp;&nbsp; <b>Long Term</b>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <input name="term" class="radio-inline" id="term" type="radio">&nbsp;&nbsp; <b>Short Term</b>
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                </div>
                                <span class="help-block">Please select term</span>
                            </div>
                        </div>

                        <!-- term period input-->
                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="termPeriod" name="termPeriod" type="text" placeholder="Termperiod (Ex: No of Weeks,   No of Days..etc)" class="form-control input-md">
                                <span class="help-block">Please type in term period</span>
                            </div>
                        </div>

                        <!-- Experience input-->
                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="experience" name="experience" type="number" placeholder="Experience" class="form-control input-md">
                                <span class="help-block">In year</span>
                            </div>
                        </div>

                        <!-- Payment input-->
                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="payment" name="payment" type="text" placeholder="Payment" class="form-control input-md">
                                <span class="help-block">Please type in your Payment that you Give</span>
                            </div>
                        </div>

                        <!-- No of Positions input-->
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

                        <!-- description input-->
                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="description" name="description" type="text" placeholder="Description" class="form-control input-md">
                                <span class="help-block">Please provide your brief Description</span>
                            </div>
                        </div>

                        <!-- Button (Double) -->
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-common">Save</button>
                                <a id="cancel" name="cancel" class="btn btn-common" href="#">Cancel</a>
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
