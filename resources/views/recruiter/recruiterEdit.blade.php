@extends('mainlayout')

@section('pageheader')
    Edit Profile
@endsection

@section('contain')

    <div class="profile-page">
        <div class="wrapper">
            <br><br><br><br><br><br><br>
            <form method="post" action="{{route('recruiterupdate')}}" enctype="multipart/form-data">
                <input type="hidden" name="userType" id="userType" value="{{Auth::user()->usertype}}">
                <input type="hidden" name="recruiter_id" id="recruiter_id" value="{{$recruiterdetail->id}}">
                <input type="hidden" name="hiddenPhoto" id="hiddenPhoto" value="{{$recruiterdetail->profilephoto}}">
                {{csrf_field()}}
                <div class="main main-raised">
                    <div class="profile-content">
                        <div class="container">
                            <div class="row">
                                <div class="profile">
                                    <div class="avatar">
                                        <img src="@if($recruiterdetail->profilephoto==""){{ asset('assets/img/recruiter/default.png').'/'.$recruiterdetail->profilephoto}} @else {{ asset('assets/img/recruiter/').'/'.$recruiterdetail->profilephoto}} @endif" alt="Circle Image" class="img-circle img-responsive img-raised"><br>
                                        <input type="file" name="profilePhoto" id="profilePhoto" class=" text-center  center-block  well well-sm">
                                    </div>
                                    <div class="name">
                                        <h3 class="title">@if($recruiterdetail->firstname!="" && $recruiterdetail->lastname!="") {{$recruiterdetail->firstname}} {{$recruiterdetail->lastname}} @else {{$recruiterdetail->emailid}} @endif</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="description text-center @if($errors->first('aboutMe')) has-error @endif">
                                <textarea id="aboutMe" name="aboutMe" class="form-control" placeholder="About Yourself" rows="4">{{$recruiterdetail->aboutself}}</textarea>
                                @if($errors->first('aboutMe'))
                                    <p class="text-danger"> {{$errors->first('aboutMe')}} </p>
                                @endif
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                <div class="col-md-6">
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">Personal Details</div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12 @if($errors->first('firstName')) has-error @endif">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>First Name</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <input type="text" class="form-control" placeholder="Ex.:Janki" name="firstName" id="firstName" value="{{$recruiterdetail->firstname}}">
                                                        @if($errors->first('firstName'))
                                                            <p class="text-danger"> {{$errors->first('firstName')}} </p>
                                                        @endif
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

                                            <div class="row">
                                                <div class="col-md-12  @if($errors->first('lastName')) has-error @endif">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>last Name</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <input type="text" class="form-control" placeholder="Ex.:patel" name="lastName" id="lastName" value="{{$recruiterdetail->lastname}}">
                                                        @if($errors->first('lastName'))
                                                            <p class="text-danger"> {{$errors->first('lastName')}} </p>
                                                        @endif
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

                                            <div class="row">
                                                <div class="col-md-12 @if($errors->first('gender')) has-error @endif">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Gender</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <input type="radio"  name="gender" value="Male"@if($recruiterdetail->gender=='Male') checked="checked"@endif><strong> Male</strong>&nbsp;&nbsp;
                                                        <input type="radio"  name="gender" value="Female"@if($recruiterdetail->gender=='Female') checked="checked"@endif><strong> Female</strong>
                                                        @if($errors->first('gender'))
                                                            <p class="text-danger"> {{$errors->first('gender')}} </p>
                                                        @endif
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br>

                                            <div class="row">
                                                <div class="col-md-12 @if($errors->first('emailid')) has-error @endif">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Email ID</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <input type="email" class="ti-email form-control" name="emailid" id="emailid" placeholder="abc@gmail.com" value="{{Auth::user()->email}}" readonly>
                                                        @if($errors->first('emailid'))
                                                            <p class="text-danger"> {{$errors->first('emailid')}} </p>
                                                        @endif
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

                                            <div class="row">
                                                <div class="col-md-12 @if($errors->first('contactNo')) has-error @endif">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Contact Number</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                      <input type="tel" class="form-control" placeholder="8160626748" maxlength="15" name="contactNo" value="{{$recruiterdetail->contactno}}">
                                                        @if($errors->first('contactNo'))
                                                            <p class="text-danger"> {{$errors->first('contactNo')}} </p>
                                                        @endif
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

                                            <div class="row">
                                                <div class="col-md-12 @if($errors->first('address')) has-error @endif">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Address</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <textarea class="form-control" name="address" placeholder="Ex.: 57,hari krushna street, harni" rows="4">{{$recruiterdetail->address}}</textarea>
                                                        @if($errors->first('address'))
                                                            <p class="text-danger"> {{$errors->first('address')}} </p>
                                                        @endif
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

                                            <div class="row">
                                                <div class="col-md-12 @if($errors->first('city')) has-error @endif">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>City</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <div class="search-category-container">
                                                                <select id="city" name="city" class="form-control dropdown-product selectpicker">
                                                                    <option value="">Select</option>
                                                                    <option value="Vadodara"@if($recruiterdetail->city=='Vadodara') selected="selected"@endif>Vadodara</option>
                                                                    <option value="Bharuch" @if($recruiterdetail->city=='Bharuch') selected="selected"@endif>Bharuch</option>
                                                                    <option value="Rajkot" @if($recruiterdetail->city=='Rajkot') selected="selected"@endif>Rajkot</option>
                                                                    <option value="Mumbai" @if($recruiterdetail->city=='Mumbai') selected="selected"@endif>Mumbai</option>
                                                                </select>
                                                        </div>
                                                        @if($errors->first('city'))
                                                            <p class="text-danger"> {{$errors->first('city')}} </p>
                                                        @endif
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

                                            <div class="row">
                                                <div class="col-md-12 @if($errors->first('state')) has-error @endif">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>State</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <div class="search-category-container">
                                                            <select id="state" name="state" class="form-control dropdown-product selectpicker">
                                                                <option value="">Select</option>
                                                                <option value="Gujarat" @if($recruiterdetail->state=='Gujarat') selected="selected"@endif>Gujarat</option>
                                                                <option value="Maharastra" @if($recruiterdetail->state=='Maharastra') selected="selected"@endif>Maharastra</option>
                                                                <option value="Rajasthan" @if($recruiterdetail->state=='Rajasthan') selected="selected"@endif>Rajasthan</option>
                                                                <option value="Goa" @if($recruiterdetail->state=='Goa') selected="selected"@endif>Goa</option>
                                                            </select>
                                                        </div>
                                                        @if($errors->first('state'))
                                                            <p class="text-danger"> {{$errors->first('state')}} </p>
                                                        @endif
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

                                            <div class="row">
                                                <div class="col-md-12 @if($errors->first('country')) has-error @endif">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Country</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <div class="search-category-container">
                                                            <select id="country" name="country" class="form-control dropdown-product selectpicker">
                                                                <option value="">Select</option>

                                                                <option value="Afghanistan" @if($recruiterdetail->country=='Afghanistan')selected="selected"@endif>Afghanistan</option>
                                                                <option value="Albania" @if($recruiterdetail->country=='Albania')selected="selected"@endif>Albania</option>
                                                                <option value="Algeria" @if($recruiterdetail->country=='Algeria')selected="selected"@endif>Algeria</option>
                                                                <option value="American Samoa" @if($recruiterdetail->country=='American')selected="selected"@endif>American Samoa</option>
                                                                <option value="Andorra" @if($recruiterdetail->country=='Andorra')selected="selected"@endif>Andorra</option>
                                                                <option value="Angola" @if($recruiterdetail->country=='Angola')selected="selected"@endif>Angola</option>
                                                                <option value="Anguilla" @if($recruiterdetail->country=='Anguilla')selected="selected"@endif>Anguilla</option>
                                                                <option value="Antartica" @if($recruiterdetail->country=='Antartica')selected="selected"@endif>Antarctica</option>
                                                                <option value="Antigua and Barbuda" @if($recruiterdetail->country=='Antigua')selected="selected"@endif>Antigua and Barbuda</option>
                                                                <option value="Argentina" @if($recruiterdetail->country=='Argentina')selected="selected"@endif>Argentina</option>
                                                                <option value="Armenia" @if($recruiterdetail->country=='Armenia')selected="selected"@endif>Armenia</option>
                                                                <option value="Aruba" @if($recruiterdetail->country=='Aruba')selected="selected"@endif>Aruba</option>
                                                                <option value="Australia" @if($recruiterdetail->country=='Australia')selected="selected"@endif>Australia</option>
                                                                <option value="Austria" @if($recruiterdetail->country=='Austria')selected="selected"@endif>Austria</option>
                                                                <option value="Azerbaijan" @if($recruiterdetail->country=='Azerbaijan')selected="selected"@endif>Azerbaijan</option>
                                                                <option value="Bahamas" @if($recruiterdetail->country=='Bahamas')selected="selected"@endif>Bahamas</option>
                                                                <option value="Bahrain" @if($recruiterdetail->country=='Bahrain')selected="selected"@endif>Bahrain</option>
                                                                <option value="Bangladesh" @if($recruiterdetail->country=='Bangladesh')selected="selected"@endif>Bangladesh</option>
                                                                <option value="Barbados" @if($recruiterdetail->country=='Barbados')selected="selected"@endif>Barbados</option>
                                                                <option value="Belarus" @if($recruiterdetail->country=='Belarus')selected="selected"@endif>Belarus</option>
                                                                <option value="Belgium" @if($recruiterdetail->country=='Belgium')selected="selected"@endif>Belgium</option>
                                                                <option value="Belize" @if($recruiterdetail->country=='Belize')selected="selected"@endif>Belize</option>
                                                                <option value="Benin" @if($recruiterdetail->country=='Benin')selected="selected"@endif>Benin</option>
                                                                <option value="Bermuda" @if($recruiterdetail->country=='Bermuda')selected="selected"@endif>Bermuda</option>
                                                                <option value="Bhutan" @if($recruiterdetail->country=='Bhutan')selected="selected"@endif>Bhutan</option>
                                                                <option value="Bolivia" @if($recruiterdetail->country=='Bolivia')selected="selected"@endif>Bolivia</option>
                                                                <option value="Bosnia and Herzegowina" @if($recruiterdetail->country=='Bosnia and Herzegowina')selected="selected"@endif>Bosnia and Herzegowina</option>
                                                                <option value="Botswana" @if($recruiterdetail->country=='Botswana')selected="selected"@endif>Botswana</option>
                                                                <option value="Bouvet Island" @if($recruiterdetail->country=='Bouvet Island')selected="selected"@endif>Bouvet Island</option>
                                                                <option value="Brazil" @if($recruiterdetail->country=='Brazil')selected="selected"@endif>Brazil</option>
                                                                <option value="British Indian Ocean Territory" @if($recruiterdetail->country=='British Indian Ocean Territory')selected="selected"@endif>British Indian Ocean Territory</option>
                                                                <option value="Brunei Darussalam" @if($recruiterdetail->country=='Brunei Darussalam')selected="selected"@endif>Brunei Darussalam</option>
                                                                <option value="Bulgaria" @if($recruiterdetail->country=='Bulgaria')selected="selected"@endif>Bulgaria</option>
                                                                <option value="Burkina Faso" @if($recruiterdetail->country=='Burkina Faso')selected="selected"@endif>Burkina Faso</option>
                                                                <option value="Burundi" @if($recruiterdetail->country=='Burundi')selected="selected"@endif>Burundi</option>
                                                                <option value="Cambodia" @if($recruiterdetail->country=='Cambodia')selected="selected"@endif>Cambodia</option>
                                                                <option value="Cameroon" @if($recruiterdetail->country=='Cameroon')selected="selected"@endif>Cameroon</option>
                                                                <option value="Canada" @if($recruiterdetail->country=='Canada')selected="selected"@endif>Canada</option>
                                                                <option value="Cape Verde" @if($recruiterdetail->country=='Cape Verde')selected="selected"@endif>Cape Verde</option>
                                                                <option value="Cayman Islands" @if($recruiterdetail->country=='Cayman Islands')selected="selected"@endif>Cayman Islands</option>
                                                                <option value="Central African Republic" @if($recruiterdetail->country=='Central African Republic')selected="selected"@endif>Central African Republic</option>
                                                                <option value="Chad" @if($recruiterdetail->country=='Chad')selected="selected"@endif>Chad</option>
                                                                <option value="Chile" @if($recruiterdetail->country=='Chile')selected="selected"@endif>Chile</option>
                                                                <option value="China" @if($recruiterdetail->country=='China')selected="selected"@endif>China</option>
                                                                <option value="Christmas Island" @if($recruiterdetail->country=='Christmas Island')selected="selected"@endif>Christmas Island</option>
                                                                <option value="Cocos Islands" @if($recruiterdetail->country=='Cocos Islands')selected="selected"@endif>Cocos (Keeling) Islands</option>
                                                                <option value="Colombia" @if($recruiterdetail->country=='Colombia')selected="selected"@endif>Colombia</option>
                                                                <option value="Comoros" @if($recruiterdetail->country=='Comoros')selected="selected"@endif>Comoros</option>
                                                                <option value="Congo" @if($recruiterdetail->country=='Congo')selected="selected"@endif>Congo</option>
                                                                <option value="Congo, the Democratic Republic of the" @if($recruiterdetail->country=='Congo, the Democratic Republic of the')selected="selected"@endif>Congo, the Democratic Republic of the</option>
                                                                <option value="Cook Islands" @if($recruiterdetail->country=='Cook Islands')selected="selected"@endif>Cook Islands</option>
                                                                <option value="Costa Rica" @if($recruiterdetail->country=='Costa Rica')selected="selected"@endif>Costa Rica</option>
                                                                <option value="Croatia" @if($recruiterdetail->country=='Croatia')selected="selected"@endif>Croatia (Hrvatska)</option>
                                                                <option value="Cuba" @if($recruiterdetail->country=='Cuba')selected="selected"@endif>Cuba</option>
                                                                <option value="Cyprus" @if($recruiterdetail->country=='Cyprus')selected="selected"@endif>Cyprus</option>
                                                                <option value="Czech Republic" @if($recruiterdetail->country=='Czech Republic')selected="selected"@endif>Czech Republic</option>
                                                                <option value="Denmark" @if($recruiterdetail->country=='Denmark')selected="selected"@endif>Denmark</option>
                                                                <option value="Djibouti" @if($recruiterdetail->country=='Djibouti')selected="selected"@endif>Djibouti</option>
                                                                <option value="Dominica" @if($recruiterdetail->country=='Dominica')selected="selected"@endif>Dominica</option>
                                                                <option value="Dominican Republic" @if($recruiterdetail->country=='Dominican Republic')selected="selected"@endif>Dominican Republic</option>
                                                                <option value="East Timor" @if($recruiterdetail->country=='East Timor')selected="selected"@endif>East Timor</option>
                                                                <option value="Ecuador" @if($recruiterdetail->country=='Ecuador')selected="selected"@endif>Ecuador</option>
                                                                <option value="Egypt" @if($recruiterdetail->country=='Egypt')selected="selected"@endif>Egypt</option>
                                                                <option value="El Salvador" @if($recruiterdetail->country=='El Salvador')selected="selected"@endif>El Salvador</option>
                                                                <option value="Equatorial Guinea" @if($recruiterdetail->country=='Equatorial Guinea')selected="selected"@endif>Equatorial Guinea</option>
                                                                <option value="Eritrea" @if($recruiterdetail->country=='Eritrea')selected="selected"@endif>Eritrea</option>
                                                                <option value="Estonia" @if($recruiterdetail->country=='Estonia')selected="selected"@endif>Estonia</option>
                                                                <option value="Ethiopia" @if($recruiterdetail->country=='Ethiopia')selected="selected"@endif>Ethiopia</option>
                                                                <option value="Falkland Islands" @if($recruiterdetail->country=='Falkland Islands')selected="selected"@endif>Falkland Islands (Malvinas)</option>
                                                                <option value="Faroe Islands" @if($recruiterdetail->country=='Faroe Islands')selected="selected"@endif>Faroe Islands</option>
                                                                <option value="Fiji" @if($recruiterdetail->country=='Fiji')selected="selected"@endif>Fiji</option>
                                                                <option value="Finland" @if($recruiterdetail->country=='Finland')selected="selected"@endif>Finland</option>
                                                                <option value="France" @if($recruiterdetail->country=='France')selected="selected"@endif>France</option>
                                                                <option value="France Metropolitan" @if($recruiterdetail->country=='France Metropolitan')selected="selected"@endif>France, Metropolitan</option>
                                                                <option value="French Guiana" @if($recruiterdetail->country=='French Guiana')selected="selected"@endif>French Guiana</option>
                                                                <option value="French Polynesia" @if($recruiterdetail->country=='French Polynesia')selected="selected"@endif>French Polynesia</option>
                                                                <option value="French Southern Territories" @if($recruiterdetail->country=='French Southern Territories')selected="selected"@endif>French Southern Territories</option>
                                                                <option value="Gabon" @if($recruiterdetail->country=='Gabon')selected="selected"@endif>Gabon</option>
                                                                <option value="Gambia" @if($recruiterdetail->country=='Gambia')selected="selected"@endif>Gambia</option>
                                                                <option value="Georgia" @if($recruiterdetail->country=='Georgia')selected="selected"@endif>Georgia</option>
                                                                <option value="Germany" @if($recruiterdetail->country=='Germany')selected="selected"@endif>Germany</option>
                                                                <option value="Ghana" @if($recruiterdetail->country=='Ghana')selected="selected"@endif>Ghana</option>
                                                                <option value="Gibraltar" @if($recruiterdetail->country=='Gibraltar')selected="selected"@endif>Gibraltar</option>
                                                                <option value="Greece" @if($recruiterdetail->country=='Greece')selected="selected"@endif>Greece</option>
                                                                <option value="Greenland" @if($recruiterdetail->country=='Greenland')selected="selected"@endif>Greenland</option>
                                                                <option value="Grenada" @if($recruiterdetail->country=='Grenada')selected="selected"@endif>Grenada</option>
                                                                <option value="Guadeloupe" @if($recruiterdetail->country=='Guadeloupe')selected="selected"@endif>Guadeloupe</option>
                                                                <option value="Guam" @if($recruiterdetail->country=='Guam')selected="selected"@endif>Guam</option>
                                                                <option value="Guatemala" @if($recruiterdetail->country=='Guatemala')selected="selected"@endif>Guatemala</option>
                                                                <option value="Guinea" @if($recruiterdetail->country=='Guinea')selected="selected"@endif>Guinea</option>
                                                                <option value="Guinea-Bissau" @if($recruiterdetail->country=='Guinea-Bissau')selected="selected"@endif>Guinea-Bissau</option>
                                                                <option value="Guyana" @if($recruiterdetail->country=='Guyana')selected="selected"@endif>Guyana</option>
                                                                <option value="Haiti" @if($recruiterdetail->country=='Haiti')selected="selected"@endif>Haiti</option>
                                                                <option value="Heard and McDonald Islands" @if($recruiterdetail->country=='Heard and McDonald Islands')selected="selected"@endif>Heard and Mc Donald Islands</option>
                                                                <option value="Holy See" @if($recruiterdetail->country=='Holy See')selected="selected"@endif>Holy See (Vatican City State)</option>
                                                                <option value="Honduras" @if($recruiterdetail->country=='Honduras')selected="selected"@endif>Honduras</option>
                                                                <option value="Hong Kong" @if($recruiterdetail->country=='Hong Kong')selected="selected"@endif>Hong Kong</option>
                                                                <option value="Hungary" @if($recruiterdetail->country=='Hungary')selected="selected"@endif>Hungary</option>
                                                                <option value="Iceland" @if($recruiterdetail->country=='Iceland')selected="selected"@endif>Iceland</option>
                                                                <option value="India" @if($recruiterdetail->country=='India')selected="selected"@endif selected>India</option>
                                                                <option value="Indonesia" @if($recruiterdetail->country=='Indonesia')selected="selected"@endif>Indonesia</option>
                                                                <option value="Iran" @if($recruiterdetail->country=='Iran')selected="selected"@endif>Iran (Islamic Republic of)</option>
                                                                <option value="Iraq" @if($recruiterdetail->country=='Iraq')selected="selected"@endif>Iraq</option>
                                                                <option value="Ireland" @if($recruiterdetail->country=='Ireland')selected="selected"@endif>Ireland</option>
                                                                <option value="Israel" @if($recruiterdetail->country=='Israel')selected="selected"@endif>Israel</option>
                                                                <option value="Italy" @if($recruiterdetail->country=='Italy')selected="selected"@endif>Italy</option>
                                                                <option value="Jamaica" @if($recruiterdetail->country=='Jamaica')selected="selected"@endif>Jamaica</option>
                                                                <option value="Japan" @if($recruiterdetail->country=='Japan')selected="selected"@endif>Japan</option>
                                                                <option value="Jordan" @if($recruiterdetail->country=='Jordan')selected="selected"@endif>Jordan</option>
                                                                <option value="Kazakhstan" @if($recruiterdetail->country=='Kazakhstan')selected="selected"@endif>Kazakhstan</option>
                                                                <option value="Kenya" @if($recruiterdetail->country=='Kenya')selected="selected"@endif>Kenya</option>
                                                                <option value="Kiribati" @if($recruiterdetail->country=='Kiribati')selected="selected"@endif>Kiribati</option>
                                                                <option value="Korea" @if($recruiterdetail->country=='Korea')selected="selected"@endif>Korea, Republic of</option>
                                                                <option value="Kuwait" @if($recruiterdetail->country=='Kuwait')selected="selected"@endif>Kuwait</option>
                                                                <option value="Kyrgyzstan" @if($recruiterdetail->country=='Kyrgyzstan')selected="selected"@endif>Kyrgyzstan</option>
                                                                <option value="Lao" @if($recruiterdetail->country=='Lao')selected="selected"@endif>Lao People's Democratic Republic</option>
                                                                <option value="Latvia" @if($recruiterdetail->country=='Latvia')selected="selected"@endif>Latvia</option>
                                                                <option value="Lebanon" @if($recruiterdetail->country=='Lebanon')selected="selected"@endif>Lebanon</option>
                                                                <option value="Lesotho" @if($recruiterdetail->country=='Lesotho')selected="selected"@endif>Lesotho</option>
                                                                <option value="Liberia" @if($recruiterdetail->country=='Liberia')selected="selected"@endif>Liberia</option>
                                                                <option value="Libyan Arab Jamahiriya" @if($recruiterdetail->country=='Libyan Arab Jamahiriya')selected="selected"@endif>Libyan Arab Jamahiriya</option>
                                                                <option value="Liechtenstein" @if($recruiterdetail->country=='Liechtenstein')selected="selected"@endif>Liechtenstein</option>
                                                                <option value="Lithuania" @if($recruiterdetail->country=='Lithuania')selected="selected"@endif>Lithuania</option>
                                                                <option value="Luxembourg" @if($recruiterdetail->country=='Luxembourg')selected="selected"@endif>Luxembourg</option>
                                                                <option value="Macau" @if($recruiterdetail->country=='Macau')selected="selected"@endif>Macau</option>
                                                                <option value="Macedonia" @if($recruiterdetail->country=='Macedonia')selected="selected"@endif>Macedonia, The Former Yugoslav Republic of</option>
                                                                <option value="Madagascar" @if($recruiterdetail->country=='Madagascar')selected="selected"@endif>Madagascar</option>
                                                                <option value="Malawi" @if($recruiterdetail->country=='Malawi')selected="selected"@endif>Malawi</option>
                                                                <option value="Malaysia" @if($recruiterdetail->country=='Malaysia')selected="selected"@endif>Malaysia</option>
                                                                <option value="Maldives" @if($recruiterdetail->country=='Maldives')selected="selected"@endif>Maldives</option>
                                                                <option value="Mali" @if($recruiterdetail->country=='Mali')selected="selected"@endif>Mali</option>
                                                                <option value="Malta" @if($recruiterdetail->country=='Malta')selected="selected"@endif>Malta</option>
                                                                <option value="Marshall Islands" @if($recruiterdetail->country=='Marshall Islands')selected="selected"@endif>Marshall Islands</option>
                                                                <option value="Martinique" @if($recruiterdetail->country=='Martinique')selected="selected"@endif>Martinique</option>
                                                                <option value="Mauritania" @if($recruiterdetail->country=='Mauritania')selected="selected"@endif>Mauritania</option>
                                                                <option value="Mauritius" @if($recruiterdetail->country=='Mauritius')selected="selected"@endif>Mauritius</option>
                                                                <option value="Mayotte" @if($recruiterdetail->country=='Mayotte')selected="selected"@endif>Mayotte</option>
                                                                <option value="Mexico" @if($recruiterdetail->country=='Mexico')selected="selected"@endif>Mexico</option>
                                                                <option value="Micronesia" @if($recruiterdetail->country=='Micronesia')selected="selected"@endif>Micronesia, Federated States of</option>
                                                                <option value="Moldova" @if($recruiterdetail->country=='Moldova')selected="selected"@endif>Moldova, Republic of</option>
                                                                <option value="Monaco" @if($recruiterdetail->country=='Monaco')selected="selected"@endif>Monaco</option>
                                                                <option value="Mongolia" @if($recruiterdetail->country=='Mongolia')selected="selected"@endif>Mongolia</option>
                                                                <option value="Montserrat" @if($recruiterdetail->country=='Montserrat')selected="selected"@endif>Montserrat</option>
                                                                <option value="Morocco" @if($recruiterdetail->country=='Morocco')selected="selected"@endif>Morocco</option>
                                                                <option value="Mozambique" @if($recruiterdetail->country=='Mozambique')selected="selected"@endif>Mozambique</option>
                                                                <option value="Myanmar" @if($recruiterdetail->country=='Myanmar')selected="selected"@endif>Myanmar</option>
                                                                <option value="Namibia" @if($recruiterdetail->country=='Namibia')selected="selected"@endif>Namibia</option>
                                                                <option value="Nauru" @if($recruiterdetail->country=='Nauru')selected="selected"@endif>Nauru</option>
                                                                <option value="Nepal" @if($recruiterdetail->country=='Nepal')selected="selected"@endif>Nepal</option>
                                                                <option value="Netherlands" @if($recruiterdetail->country=='Netherlands')selected="selected"@endif>Netherlands</option>
                                                                <option value="Netherlands Antilles" @if($recruiterdetail->country=='Netherlands Antilles')selected="selected"@endif>Netherlands Antilles</option>
                                                                <option value="New Caledonia" @if($recruiterdetail->country=='New Caledonia')selected="selected"@endif>New Caledonia</option>
                                                                <option value="New Zealand" @if($recruiterdetail->country=='New Zealand')selected="selected"@endif>New Zealand</option>
                                                                <option value="Nicaragua" @if($recruiterdetail->country=='Nicaragua')selected="selected"@endif>Nicaragua</option>
                                                                <option value="Niger" @if($recruiterdetail->country=='Niger')selected="selected"@endif>Niger</option>
                                                                <option value="Nigeria" @if($recruiterdetail->country=='Nigeria')selected="selected"@endif>Nigeria</option>
                                                                <option value="Niue" @if($recruiterdetail->country=='Niue')selected="selected"@endif>Niue</option>
                                                                <option value="Norfolk Island" @if($recruiterdetail->country=='Norfolk Island')selected="selected"@endif>Norfolk Island</option>
                                                                <option value="Northern Mariana Islands" @if($recruiterdetail->country=='Northern Mariana Islands')selected="selected"@endif>Northern Mariana Islands</option>
                                                                <option value="Norway" @if($recruiterdetail->country=='Norway')selected="selected"@endif>Norway</option>
                                                                <option value="Oman" @if($recruiterdetail->country=='Oman')selected="selected"@endif>Oman</option>
                                                                <option value="Pakistan" @if($recruiterdetail->country=='Pakistan')selected="selected"@endif>Pakistan</option>
                                                                <option value="Palau" @if($recruiterdetail->country=='Palau')selected="selected"@endif>Palau</option>
                                                                <option value="Panama" @if($recruiterdetail->country=='Panama')selected="selected"@endif>Panama</option>
                                                                <option value="Papua New Guinea" @if($recruiterdetail->country=='Papua New Guinea')selected="selected"@endif>Papua New Guinea</option>
                                                                <option value="Paraguay" @if($recruiterdetail->country=='Paraguay')selected="selected"@endif>Paraguay</option>
                                                                <option value="Peru" @if($recruiterdetail->country=='Peru')selected="selected"@endif>Peru</option>
                                                                <option value="Philippines" @if($recruiterdetail->country=='Philippines')selected="selected"@endif>Philippines</option>
                                                                <option value="Pitcairn" @if($recruiterdetail->country=='Pitcairn')selected="selected"@endif>Pitcairn</option>
                                                                <option value="Poland" @if($recruiterdetail->country=='Poland')selected="selected"@endif>Poland</option>
                                                                <option value="Portugal" @if($recruiterdetail->country=='Portugal')selected="selected"@endif>Portugal</option>
                                                                <option value="Puerto Rico" @if($recruiterdetail->country=='Puerto Rico')selected="selected"@endif>Puerto Rico</option>
                                                                <option value="Qatar" @if($recruiterdetail->country=='Qatar')selected="selected"@endif>Qatar</option>
                                                                <option value="Reunion" @if($recruiterdetail->country=='Reunion')selected="selected"@endif>Reunion</option>
                                                                <option value="Romania" @if($recruiterdetail->country=='Romania')selected="selected"@endif>Romania</option>
                                                                <option value="Russia" @if($recruiterdetail->country=='Russia')selected="selected"@endif>Russian Federation</option>
                                                                <option value="Rwanda" @if($recruiterdetail->country=='Rwanda')selected="selected"@endif>Rwanda</option>
                                                                <option value="Saint Kitts and Nevis" @if($recruiterdetail->country=='Saint Kitts and Nevis')selected="selected"@endif>Saint Kitts and Nevis</option>
                                                                <option value="Saint LUCIA" @if($recruiterdetail->country=='Saint LUCIA')selected="selected"@endif>Saint LUCIA</option>
                                                                <option value="Saint Vincent" @if($recruiterdetail->country=='Saint Vincent')selected="selected"@endif>Saint Vincent and the Grenadines</option>
                                                                <option value="Samoa" @if($recruiterdetail->country=='Samoa')selected="selected"@endif>Samoa</option>
                                                                <option value="San Marino" @if($recruiterdetail->country=='San Marino')selected="selected"@endif>San Marino</option>
                                                                <option value="Sao Tome and Principe" @if($recruiterdetail->country=='Sao Tome and Principe')selected="selected"@endif>Sao Tome and Principe</option>
                                                                <option value="Saudi Arabia" @if($recruiterdetail->country=='Saudi Arabia')selected="selected"@endif>Saudi Arabia</option>
                                                                <option value="Senegal" @if($recruiterdetail->country=='Senegal')selected="selected"@endif>Senegal</option>
                                                                <option value="Seychelles" @if($recruiterdetail->country=='Seychelles')selected="selected"@endif>Seychelles</option>
                                                                <option value="Sierra" @if($recruiterdetail->country=='Sierra')selected="selected"@endif>Sierra Leone</option>
                                                                <option value="Singapore" @if($recruiterdetail->country=='Singapore')selected="selected"@endif>Singapore</option>
                                                                <option value="Slovakia" @if($recruiterdetail->country=='Slovakia')selected="selected"@endif>Slovakia (Slovak Republic)</option>
                                                                <option value="Slovenia" @if($recruiterdetail->country=='Slovenia')selected="selected"@endif>Slovenia</option>
                                                                <option value="Solomon Islands" @if($recruiterdetail->country=='Solomon Islands')selected="selected"@endif>Solomon Islands</option>
                                                                <option value="Somalia" @if($recruiterdetail->country=='Somalia')selected="selected"@endif>Somalia</option>
                                                                <option value="South Africa" @if($recruiterdetail->country=='South Africa')selected="selected"@endif>South Africa</option>
                                                                <option value="South Georgia" @if($recruiterdetail->country=='South Georgia')selected="selected"@endif>South Georgia and the South Sandwich Islands</option>
                                                                <option value="Span" @if($recruiterdetail->country=='Span')selected="selected"@endif>Spain</option>
                                                                <option value="SriLanka" @if($recruiterdetail->country=='SriLanka')selected="selected"@endif>Sri Lanka</option>
                                                                <option value="St. Helena" @if($recruiterdetail->country=='St. Helena')selected="selected"@endif>St. Helena</option>
                                                                <option value="St. Pierre and Miguelon" @if($recruiterdetail->country=='St. Pierre and Miguelon')selected="selected"@endif>St. Pierre and Miquelon</option>
                                                                <option value="Sudan" @if($recruiterdetail->country=='Sudan')selected="selected"@endif>Sudan</option>
                                                                <option value="Suriname" @if($recruiterdetail->country=='Suriname')selected="selected"@endif>Suriname</option>
                                                                <option value="Svalbard" @if($recruiterdetail->country=='Svalbard')selected="selected"@endif>Svalbard and Jan Mayen Islands</option>
                                                                <option value="Swaziland" @if($recruiterdetail->country=='Swaziland')selected="selected"@endif>Swaziland</option>
                                                                <option value="Sweden" @if($recruiterdetail->country=='Sweden')selected="selected"@endif>Sweden</option>
                                                                <option value="Switzerland" @if($recruiterdetail->country=='Switzerland')selected="selected"@endif>Switzerland</option>
                                                                <option value="Syria" @if($recruiterdetail->country=='Syria')selected="selected"@endif>Syrian Arab Republic</option>
                                                                <option value="Taiwan" @if($recruiterdetail->country=='Taiwan')selected="selected"@endif>Taiwan, Province of China</option>
                                                                <option value="Tajikistan" @if($recruiterdetail->country=='Tajikistan')selected="selected"@endif>Tajikistan</option>
                                                                <option value="Tanzania" @if($recruiterdetail->country=='Tanzania')selected="selected"@endif>Tanzania, United Republic of</option>
                                                                <option value="Thailand" @if($recruiterdetail->country=='Thailand')selected="selected"@endif>Thailand</option>
                                                                <option value="Togo" @if($recruiterdetail->country=='Togo')selected="selected"@endif>Togo</option>
                                                                <option value="Tokelau" @if($recruiterdetail->country=='Tokelau')selected="selected"@endif>Tokelau</option>
                                                                <option value="Tonga" @if($recruiterdetail->country=='Tonga')selected="selected"@endif>Tonga</option>
                                                                <option value="Trinidad and Tobago" @if($recruiterdetail->country=='Trinidad and Tobago')selected="selected"@endif>Trinidad and Tobago</option>
                                                                <option value="Tunisia" @if($recruiterdetail->country=='Tunisia')selected="selected"@endif>Tunisia</option>
                                                                <option value="Turkey" @if($recruiterdetail->country=='Turkey')selected="selected"@endif>Turkey</option>
                                                                <option value="Turkmenistan" @if($recruiterdetail->country=='Turkmenistan')selected="selected"@endif>Turkmenistan</option>
                                                                <option value="Turks and Caicos" @if($recruiterdetail->country=='Turks and Caicos')selected="selected"@endif>Turks and Caicos Islands</option>
                                                                <option value="Tuvalu" @if($recruiterdetail->country=='Tuvalu')selected="selected"@endif>Tuvalu</option>
                                                                <option value="Uganda" @if($recruiterdetail->country=='Uganda')selected="selected"@endif>Uganda</option>
                                                                <option value="Ukraine" @if($recruiterdetail->country=='Ukraine')selected="selected"@endif>Ukraine</option>
                                                                <option value="United Arab Emirates" @if($recruiterdetail->country=='United Arab Emirates')selected="selected"@endif>United Arab Emirates</option>
                                                                <option value="United Kingdom" @if($recruiterdetail->country=='United Kingdom')selected="selected"@endif>United Kingdom</option>
                                                                <option value="United States" @if($recruiterdetail->country=='United States')selected="selected"@endif>United States</option>
                                                                <option value="United States Minor Outlying Islands" @if($recruiterdetail->country=='United States Minor Outlying Islands')selected="selected"@endif>United States Minor Outlying Islands</option>
                                                                <option value="Uruguay" @if($recruiterdetail->country=='Uruguay')selected="selected"@endif>Uruguay</option>
                                                                <option value="Uzbekistan" @if($recruiterdetail->country=='Uzbekistan')selected="selected"@endif>Uzbekistan</option>
                                                                <option value="Vanuatu" @if($recruiterdetail->country=='Vanuatu')selected="selected"@endif>Vanuatu</option>
                                                                <option value="Venezuela" @if($recruiterdetail->country=='Venezuela')selected="selected"@endif>Venezuela</option>
                                                                <option value="Vietnam" @if($recruiterdetail->country=='Vietnam')selected="selected"@endif>Viet Nam</option>
                                                                <option value="Virgin Islands (British)" @if($recruiterdetail->country=='Virgin Islands (British)')selected="selected"@endif>Virgin Islands (British)</option>
                                                                <option value="Virgin Islands (U.S)" @if($recruiterdetail->country=='Virgin Islands (U.S)')selected="selected"@endif>Virgin Islands (U.S.)</option>
                                                                <option value="Wallis and Futana Islands" @if($recruiterdetail->country=='Wallis and Futana Islands')selected="selected"@endif>Wallis and Futuna Islands</option>
                                                                <option value="Western Sahara" @if($recruiterdetail->country=='Western Sahara')selected="selected"@endif>Western Sahara</option>
                                                                <option value="Yemen" @if($recruiterdetail->country=='Yemen')selected="selected"@endif>Yemen</option>
                                                                <option value="Yugoslavia" @if($recruiterdetail->country=='Yugoslavia')selected="selected"@endif>Yugoslavia</option>
                                                                <option value="Zambia" @if($recruiterdetail->country=='Zambia')selected="selected"@endif>Zambia</option>
                                                                <option value="Zimbabwe" @if($recruiterdetail->country=='Zimbabwe')selected="selected"@endif>Zimbabwe</option>
                                                            </select>
                                                        </div>
                                                        @if($errors->first('country'))
                                                            <p class="text-danger"> {{$errors->first('country')}} </p>
                                                        @endif
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br>

                                            <div class="row">
                                                <div class="col-md-12 @if($errors->first('alterEmailid')) has-error @endif">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Alternative Email ID</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <input type="email" class="ti-email form-control" name="alterEmailid" id="alteremailid" placeholder="abc@gmail.com" value="{{$recruiterdetail->otheremailid}}">
                                                        @if($errors->first('alterEmailid'))
                                                            <p class="text-danger"> {{$errors->first('alterEmailid')}} </p>
                                                        @endif
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

                                        </div><!--/panel-body-->
                                    </div><!--/panel-->
                                </div><!--/col-6-->
                                <div class="col-md-6">
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">Other Details</div>
                                        <div class="panel-body">

                                            <div class="row">
                                                <div class="col-md-12 @if($errors->first('gst')) has-error @endif">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>GST Register</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <input type="radio"  name="gst" value="Yes" @if($recruiterdetail->gstregister=='Yes') checked="checked"@endif><strong> Yes</strong>&nbsp;&nbsp;
                                                        <input type="radio"  name="gst" value="No" @if($recruiterdetail->gstregister=='No') checked="checked"@endif><strong> No</strong>
                                                        @if($errors->first('gst'))
                                                            <p class="text-danger"> {{$errors->first('gst')}} </p>
                                                        @endif
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br>

                                            <div class="row">
                                                <div class="col-md-12 @if($errors->first('companyName')) has-error @endif">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Company Name</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <input type="text" class="form-control" placeholder="Ex.:abc private limited" name="companyName" id="companyname" value="{{$recruiterdetail->rcompanyname}}">
                                                        @if($errors->first('companyName'))
                                                            <p class="text-danger"> {{$errors->first('companyName')}} </p>
                                                        @endif
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

                                            <div class="row">
                                                <div class="col-md-12 @if($errors->first('companyType')) has-error @endif">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Company Type</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <input type="text" class="form-control" placeholder="Ex.:abc private limited" name="companyType" id="companyname" value="{{$recruiterdetail->rcompanytype}}">
                                                        @if($errors->first('companyType'))
                                                            <p class="text-danger"> {{$errors->first('companyType')}} </p>
                                                        @endif
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

                                            <div class="row">
                                                <div class="col-md-12 @if($errors->first('industryType')) has-error @endif">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Industry Type</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <div class="search-category-container">
                                                            <select id="industrytype" name="industryType" class="form-control dropdown-product selectpicker">
                                                                <option value="">Select</option>
                                                                <option value="Accounting / Finance" @if($recruiterdetail->rindustrytype=='Accounting / Finance')selected="selected" @endif>Accounting / Finance</option>
                                                                <option value="Advertising / PR / MR / Events" @if($recruiterdetail->rindustrytype=='Advertising / PR / MR / Events')selected="selected" @endif>Advertising / PR / MR / Events</option>
                                                                <option value="Agriculture / Dairy" @if($recruiterdetail->rindustrytype=='Agriculture / Dairy')selected="selected" @endif>Agriculture / Dairy</option>
                                                                <option value="Animation" @if($recruiterdetail->rindustrytype=='Animation')selected="selected" @endif>Animation</option>
                                                                <option value="Architecture / Interior Designing" @if($recruiterdetail->rindustrytype=='Architecture / Interior Designing')selected="selected" @endif>Architecture / Interior Designing</option>
                                                                <option value="Auto / Auto Ancillary" @if($recruiterdetail->rindustrytype=='Auto / Auto Ancillary')selected="selected" @endif>Auto / Auto Ancillary</option>
                                                                <option value="Aviation / Aerospace Firms" @if($recruiterdetail->rindustrytype=='Aviation / Aerospace Firms')selected="selected" @endif>Aviation / Aerospace Firms</option>
                                                                <option value="Banking / Financial Services / Broking" @if($recruiterdetail->rindustrytype=='Banking / Financial Services / Broking')selected="selected" @endif>Banking / Financial Services / Broking</option>
                                                                <option value="BPO / ITES" @if($recruiterdetail->rindustrytype=='BPO / ITES')selected="selected" @endif>BPO / ITES</option>
                                                                <option value="Brewery / Distillery"  @if($recruiterdetail->rindustrytype=='Brewery / Distillery')selected="selected" @endif>Brewery / Distillery</option>
                                                                <option value="Broadcasting" @if($recruiterdetail->rindustrytype=='Broadcasting')selected="selected" @endif>Broadcasting</option>
                                                                <option value="Ceramics  / Sanitary ware"  @if($recruiterdetail->rindustrytype=='Ceramics  / Sanitary ware')selected="selected" @endif>Ceramics  / Sanitary ware</option>
                                                                <option value="Chemicals / PetroChemical / Plastic / Rubber"  @if($recruiterdetail->rindustrytype=='Chemicals / PetroChemical / Plastic / Rubber')selected="selected" @endif>Chemicals / PetroChemical / Plastic / Rubber</option>
                                                                <option value="Construction / Engineering / Cement / Metals"  @if($recruiterdetail->rindustrytype=='Construction / Engineering / Cement / Metals')selected="selected" @endif>Construction / Engineering / Cement / Metals</option>
                                                                <option value="Consumer Durables"  @if($recruiterdetail->rindustrytype=='Consumer Durables')selected="selected" @endif>Consumer Durables</option>
                                                                <option value="Courier / Transportation / Freight"  @if($recruiterdetail->rindustrytype=='Courier / Transportation / Freight')selected="selected" @endif>Courier / Transportation / Freight</option>
                                                                <option value="Defence / Government"  @if($recruiterdetail->rindustrytype=='Defence / Government')selected="selected" @endif>Defence / Government</option>
                                                                <option value="Education / Teaching / Training"  @if($recruiterdetail->rindustrytype=='Education / Teaching / Training')selected="selected" @endif>Education / Teaching / Training</option>
                                                                <option value="Electricals / Switchgears"  @if($recruiterdetail->rindustrytype=='Electricals / Switchgears')selected="selected" @endif>Electricals / Switchgears</option>
                                                                <option value="Export / Import"  @if($recruiterdetail->rindustrytype=='Export / Import')selected="selected" @endif>Export / Import</option>
                                                                <option value="Facility Management"  @if($recruiterdetail->rindustrytype=='Facility Management')selected="selected" @endif>Facility Management</option>
                                                                <option value="Fertilizers / Pesticides"  @if($recruiterdetail->rindustrytype=='Fertilizers / Pesticides')selected="selected" @endif>Fertilizers / Pesticides</option>
                                                                <option value="FMCG / Foods / Beverage"  @if($recruiterdetail->rindustrytype=='FMCG / Foods / Beverage')selected="selected" @endif>FMCG / Foods / Beverage</option>
                                                                <option value="Food Processing"  @if($recruiterdetail->rindustrytype=='Food Processing')selected="selected" @endif>Food Processing</option>
                                                                <option value="Fresher / Trainee"  @if($recruiterdetail->rindustrytype=='Fresher / Trainee')selected="selected" @endif>Fresher / Trainee</option>
                                                                <option value="Gems &amp; Jewellery"  @if($recruiterdetail->rindustrytype=='Gems &amp; Jewellery')selected="selected" @endif>Gems &amp; Jewellery</option>
                                                                <option value="Glass"  @if($recruiterdetail->rindustrytype=='Glass')selected="selected" @endif>Glass</option>
                                                                <option value="Heat Ventilation Air Conditioning" @if($recruiterdetail->rindustrytype=='Heat Ventilation Air Conditioning')selected="selected" @endif>Heat Ventilation Air Conditioning</option>
                                                                <option value="Hotels / Restaurants / Airlines / Travel"  @if($recruiterdetail->rindustrytype=='Hotels / Restaurants / Airlines / Travel')selected="selected" @endif>Hotels / Restaurants / Airlines / Travel</option>
                                                                <option value="Industrial Products / Heavy Machinery" @if($recruiterdetail->rindustrytype=='Industrial Products / Heavy Machinery')selected="selected" @endif>Industrial Products / Heavy Machinery</option>
                                                                <option value="Insurance"  @if($recruiterdetail->rindustrytype=='Insurance')selected="selected" @endif>Insurance</option>
                                                                <option value="Internet / Ecommerce" @if($recruiterdetail->rindustrytype=='Internet / Ecommerce')selected="selected" @endif>Internet / Ecommerce</option>
                                                                <option value="IT-Hardware &amp; Networking" @if($recruiterdetail->rindustrytype=='IT-Hardware & Networking')selected="selected" @endif>IT-Hardware &amp; Networking</option>
                                                                <option value="IT-Software / Software Services" @if($recruiterdetail->rindustrytype=='IT-Software / Software Services')selected="selected" @endif>IT-Software / Software Services</option>
                                                                <option value="KPO / Research  / Analytics" @if($recruiterdetail->rindustrytype=='KPO / Research  / Analytics')selected="selected" @endif>KPO / Research  / Analytics</option>
                                                                <option value="Leather" @if($recruiterdetail->rindustrytype=='Leather')selected="selected" @endif>Leather</option>
                                                                <option value="Legal" @if($recruiterdetail->rindustrytype=='Legal')selected="selected" @endif>Legal</option>
                                                                <option value="Media / Dotcom / Entertainment" @if($recruiterdetail->rindustrytype=='Media / Dotcom / Entertainment')selected="selected" @endif>Media / Dotcom / Entertainment</option>
                                                                <option value="Medical / Healthcare / Hospital" @if($recruiterdetail->rindustrytype=='Medical / Healthcare / Hospital')selected="selected" @endif>Medical / Healthcare / Hospital</option>
                                                                <option value="Medical Devices / Equipments" @if($recruiterdetail->rindustrytype=='Medical Devices / Equipments')selected="selected" @endif>Medical Devices / Equipments</option>
                                                                <option value="Mining" @if($recruiterdetail->rindustrytype=='Mining')selected="selected" @endif>Mining</option>
                                                                <option value="NGO / Social Services" @if($recruiterdetail->rindustrytype=='NGO / Social Services')selected="selected" @endif>NGO / Social Services</option>
                                                                <option value="Office Equipment / Automation" @if($recruiterdetail->rindustrytype=='Office Equipment / Automation')selected="selected" @endif>Office Equipment / Automation</option>
                                                                <option value="Oil and Gas / Power / Infrastructure / Energy" @if($recruiterdetail->rindustrytype=='Oil and Gas / Power / Infrastructure / Energy')selected="selected" @endif>Oil and Gas / Power / Infrastructure / Energy</option>
                                                                <option value="Paper" @if($recruiterdetail->rindustrytype=='Paper')selected="selected" @endif>Paper</option>
                                                                <option value="Pharma / Biotech / Clinical Research" @if($recruiterdetail->rindustrytype=='Pharma / Biotech / Clinical Research')selected="selected" @endif>Pharma / Biotech / Clinical Research</option>
                                                                <option value="Printing / Packaging" @if($recruiterdetail->rindustrytype=='Printing / Packaging')selected="selected" @endif>Printing / Packaging</option>
                                                                <option value="Publishing" @if($recruiterdetail->rindustrytype=='Publishing')selected="selected" @endif>Publishing</option>
                                                                <option value="Real Estate / Property" @if($recruiterdetail->rindustrytype=='Real Estate / Property')selected="selected" @endif>Real Estate / Property</option>
                                                                <option value="Recruitment" @if($recruiterdetail->rindustrytype=='Recruitment')selected="selected" @endif>Recruitment</option>
                                                                <option value="Retail" @if($recruiterdetail->rindustrytype=='Retail')selected="selected" @endif>Retail</option>
                                                                <option value="Security / Law Enforcement" @if($recruiterdetail->rindustrytype=='Security / Law Enforcement')selected="selected" @endif>Security / Law Enforcement</option>
                                                                <option value="Semiconductors / Electronics" @if($recruiterdetail->rindustrytype=='Semiconductors / Electronics')selected="selected" @endif>Semiconductors / Electronics</option>
                                                                <option value="Shipping / Marine" @if($recruiterdetail->rindustrytype=='Shipping / Marine')selected="selected" @endif>Shipping / Marine</option>
                                                                <option value="Steel" @if($recruiterdetail->rindustrytype=='Steel')selected="selected" @endif>Steel</option>
                                                                <option value="Strategy  / Management Consulting Firms" @if($recruiterdetail->rindustrytype=='Strategy  / Management Consulting Firms')selected="selected" @endif>Strategy  / Management Consulting Firms</option>
                                                                <option value="Sugar" @if($recruiterdetail->rindustrytype=='Sugar')selected="selected" @endif>Sugar</option>
                                                                <option value="Telcom / ISP" @if($recruiterdetail->rindustrytype=='Telcom / ISP')selected="selected" @endif>Telcom / ISP</option>
                                                                <option value="Textiles / Garments / Accessories" @if($recruiterdetail->rindustrytype=='Textiles / Garments / Accessories')selected="selected" @endif>Textiles / Garments / Accessories</option>
                                                                <option value="Tyres" @if($recruiterdetail->rindustrytype=='Tyres')selected="selected" @endif>Tyres</option>
                                                                <option value="Water Treatment / Waste Management" @if($recruiterdetail->rindustrytype=='Water Treatment / Waste Management')selected="selected" @endif>Water Treatment / Waste Management</option>
                                                                <option value="Wellness / Fitness / Sports / Beauty" @if($recruiterdetail->rindustrytype=='Wellness / Fitness / Sports / Beauty')selected="selected" @endif>Wellness / Fitness / Sports / Beauty</option>
                                                                <option value="Other" @if($recruiterdetail->rindustrytype=='Other')selected="selected" @endif>Other</option>
                                                            </select>
                                                        </div>
                                                        @if($errors->first('industryType'))
                                                            <p class="text-danger"> {{$errors->first('industryType')}} </p>
                                                        @endif
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

                                            <div class="row">
                                                <div class="col-md-12 @if($errors->first('companyAddress')) has-error @endif">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Company Address</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <textarea class="form-control" name="companyAddress" placeholder="Ex.: 57,hari krushna street, harni" rows="4">{{$recruiterdetail->companyaddress}}</textarea>
                                                        @if($errors->first('companyAddress'))
                                                            <p class="text-danger"> {{$errors->first('companyAddress')}} </p>
                                                        @endif
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

                                            <div class="row">
                                                <div class="col-md-12 @if($errors->first('referenceName')) has-error @endif">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Reference Name</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <input type="text" class="form-control" placeholder="Ex.:abc private limited" name="referenceName" id="companyname" value="{{$recruiterdetail->rname}}">
                                                        @if($errors->first('referenceName'))
                                                            <p class="text-danger"> {{$errors->first('referenceName')}} </p>
                                                        @endif
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row-->

                                            <div class="row">
                                                <div class="col-md-12 @if($errors->first('designation')) has-error @endif">
                                                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                        <h4>Reference's Designation</h4>
                                                    </div><!--/col-4-->
                                                    <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                        <h4>:</h4>
                                                    </div> <!--/col-1-->
                                                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                        <div class="search-category-container">
                                                            <select id="designation" name="designation" class="form-control dropdown-product selectpicker">
                                                                <option value="">Select</option>
                                                                <option value="Manager" @if($recruiterdetail->rdesignation=='Manager') selected="selected"@endif>Manager</option>
                                                                <option value="Assi. Manager" @if($recruiterdetail->rdesignation=='Assi. Manager') selected="selected"@endif>Assi. Manager</option>
                                                            </select>
                                                        </div>
                                                        @if($errors->first('designation'))
                                                            <p class="text-danger"> {{$errors->first('designation')}} </p>
                                                        @endif
                                                    </div><!--/col-7-->
                                                </div><!--/col-12-->
                                            </div><!--/row--><br><br><br><br><br><br><br><br><br><br>
                                        </div><!--/panel-body-->
                                    </div>
                                </div><!--/col-6-->
                            </div><!--/col-12-->
                        </div><!--/row--><br>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-common">Save</button>
                                <a id="cancel" name="cancel" class="btn btn-common" href="{{route('recruiterProfile')}}">Cancel</a>
                            </div>
                        </div><!--/formgroup-->
                    </div><!--/container--><br>
                </div>
            </form>
        </div>
    </div>
    <br><br>

@endsection