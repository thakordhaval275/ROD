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
                                        </form>
                                    </div><!--/card-->
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