@extends('mainlayout')

@section('pageheader')
    Proposal List
@endsection

@section('contain')
<section class="job-browse section">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8">
                @foreach($recruiter as $data)
                    <div class="job-list" style="width: 100%;">
                        <div class="job-list-content">
                            @if(Auth::user()->usertype==1)
                                <div class="icon">
                                    <h3><i class="ti-email"></i> {{$data->emailid}}</h3><br>
                                </div>
                            @else
                                <h3><a href="#">{{$data->companyname}}</a><small>  {{$data->companyemail}}</small></h3><br>
                            @endif
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="icon">
                                    <div class="col-md-6">
                                        <h5>No.Of Employee : </h5>{{$data->noofemployee}}
                                        <br><br>
                                        <h5>Employee Qualification :</h5>{{$data->employeequalification}}
                                    </div><!--/col-6-->
                                    <div class="col-md-6">
                                        <h5>Key Skill :</h5>{{$data->keyskill}}
                                        <br><br>
                                        <h5>Proposal Status :</h5>@if($data->status=="") Pending @else {{$data->status}} @endif
                                    </div><!--/col-6--><br><br><br>
                                    <div class="col-md-12">
                                        <br>
                                        <h5>Other Details :</h5>{{$data->otherdetail}}
                                    </div><!--/col-6-->
                                    </div>
                                </div><!--/col-12-->
                            </div><!--/row-->
                            <div class="job-tag">
                                <div class="pull-left">
                                    <div class="meta-tag">
                                    </div>
                                </div>
                                <div class="pull-right">
                                    @if(Auth::user()->usertype==1)
                                        <a href=""><div class="btn btn-common btn-rm"> Accept</div></a>
                                        <a href=""><div class="btn btn-common btn-rm"> Reject</div></a>
                                    @else
                                        <div class="icon">
                                            <a href="{{route('destroyProposal',['id'=>$data->id])}}"><i class="ti-trash"></i></a>
                                        </div>
                                        <div class="btn btn-common btn-rm">@if($data->status!="") Send Email @else Pending @endif</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                @endforeach
                <!-- Start Pagination -->
                    <ul class="pagination">
                        <li class="active"><a href="#" class="btn btn-common" ><i class="ti-angle-left"></i> prev</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li class="active"><a href="#" class="btn btn-common">Next <i class="ti-angle-right"></i></a></li>
                    </ul>
                    <!-- End Pagination -->
            </div>
            <div class="col-md-3 col-sm-4">

            </div>
        </div>
    </div>
</section>
@endsection