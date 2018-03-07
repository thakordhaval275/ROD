@extends('mainlayout')

@section('pageheader')
     Send Proposal
@endsection

@section('contain')
    <br><br>
    <div class="profile-page">
        <div class="wrapper">
            <br><br><br><br><br><br><br>
            <div class="main main-raised">
                <div class="profile-content">
                    <div class="container">
                        <div class="row">
                            <div class="profile">
                                <div class="avatar">
                                    <img src="assets/img/company/Mtaj.png" alt="Circle Image" class="img-circle img-responsive img-raised"><br><a href="{{route('companyEdit')}}"><i class="ti-pencil"> Edit</i></a>
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
                   <div class="container">
                       <div class="row">
                           <div class="col-md-12">
                               <div class="col-md-2">

                               </div><!--/col-2-->
                               <div class="col-md-8">
                                    <div class="box">
                                        <form>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="companyName" placeholder="Name of The Company">
                                            </div>
                                            <div class="form-group">
                                                <select id="noofemp" name="noofemp" class="form-control dropdown-product selectpicker">
                                                    <option value="">Select</option>
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
                                    </div><!--/card-->
                                   <br><br>
                               </div><!--/col-8-->
                               <div class="col-md-2">

                               </div><!--/col-2-->
                           </div><!--/col-12-->
                       </div><!--/row-->
                   </div><!--/container-->
                </div>
            </div>
        </div>
    </div>
    <br><br>
@endsection