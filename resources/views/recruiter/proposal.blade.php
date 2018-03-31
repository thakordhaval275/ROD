@extends('mainlayout')

@section('pageheader')
     Send Proposal
@endsection

@section('contain')
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-2">

                </div><!--/col-2-->
                <div class="col-md-8">
                    <div class="box box-primary">
                        <br>
                        @foreach($proposal as $list)
                        <form method="post" action="{{route('proposalstore')}}">
                            {{csrf_field()}}
                            {{--{{dd($proposal)}}--}}
                            <div class="form-group @if($errors->first('companyName')) has-error @endif">
                                <input class="form-control" type="text" name="companyName" placeholder="Name of The Company" value="{{$list->companyname}}" readonly>
                                @if($errors->first('companyName'))
                                    <p class="text-danger"> {{$errors->first('companyName')}} </p>
                                @endif
                            </div>

                            <div class="form-group @if($errors->first('companyEmail')) has-error @endif">
                                <input class="form-control" type="text" name="companyEmail" placeholder="Company Email Id" value="{{$list->useremail}}" readonly>
                                @if($errors->first('companyEmail'))
                                    <p class="text-danger"> {{$errors->first('companyEmail')}} </p>
                                @endif
                            </div>

                            <div class="form-group @if($errors->first('emailid')) has-error @endif">
                                <input type="email" class="form-control" name="emailid" id="emailid" placeholder="Recruiter's Email ID" value="{{Auth::user()->email}}">
                                @if($errors->first('emailid'))
                                    <p class="text-danger"> {{$errors->first('emailid')}} </p>
                                @endif
                            </div>

                            <div class="form-group @if($errors->first('noOfEmp')) has-error @endif">
                                <select id="noOfEmp" name="noOfEmp" class="form-control dropdown-product selectpicker">
                                    <option value="">Select no. of employees</option>
                                    @for($i=1;$i<=500;$i++)
                                        <option value="{{$i}}">{{$i}} </option>
                                    @endfor
                                </select>
                                @if($errors->first('noOfEmp'))
                                    <p class="text-danger"> {{$errors->first('noOfEmp')}} </p>
                                @endif
                            </div>

                            <div class="form-group @if($errors->first('equlification')) has-error @endif">
                                <input type="text" name="equlification"  class="form-control" id="equlification" placeholder="employee Qulification">
                                @if($errors->first('equlification'))
                                    <p class="text-danger"> {{$errors->first('equlification')}} </p>
                                @endif
                            </div>

                            <div class="form-group @if($errors->first('keySkill')) has-error @endif">
                                <input type="text" class="form-control" name="keySkill" id="keySkill" placeholder=" Employee's Key Skills">
                                @if($errors->first('keySkill'))
                                    <p class="text-danger"> {{$errors->first('keySkill')}} </p>
                                @endif
                            </div>

                            <div class="form-group @if($errors->first('otherdetail')) has-error @endif">
                                <textarea class="form-control" name="otherdetail" id="otherdetail" placeholder=" More Details" rows="5"></textarea>
                                @if($errors->first('otherdetail'))
                                    <p class="text-danger"> {{$errors->first('otherdetail')}} </p>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-common">Send</button>
                                    <a id="cancel" name="cancel" class="btn btn-common" href="{{route('viewJobs')}}">Cancel</a>
                                </div>
                            </div>

                        </form>
                        @endforeach
                        <br><br>
                    </div><!--/box-->
                </div><!--/col-8-->
                <div class="col-md-2">

                </div><!--/col-2-->
            </div><!--/col-12-->
        </div><!--/row-->
    </div><!--/container-->
    <br><br>
@endsection