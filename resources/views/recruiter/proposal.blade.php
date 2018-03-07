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
                        <form>
                            <div class="form-group">
                                <input class="form-control" type="text" name="companyName" placeholder="Name of The Company">
                            </div>
                            <div class="form-group">
                                <select id="noofemp" name="noofemp" class="form-control dropdown-product selectpicker">
                                    <option value="">Select no. of employees</option>
                                    @for($i=1;$i<=500;$i++)
                                        <option>{{$i}} </option>
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="emailid" id="emailid" placeholder="Email ID">
                            </div>
                            <div class="form-group">
                                <input type="text" name="equlification"  class="form-control" id="equlification" placeholder="employee Qulification">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="keySkill" id="keySkill" placeholder=" Employee's Key Skills">
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-common">Send</button>
                                    <a id="cancel" name="cancel" class="btn btn-common" href="{{route('companyProfile')}}">Cancel</a>
                                </div>
                            </div>
                        </form>
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