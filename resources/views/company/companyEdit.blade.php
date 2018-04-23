@extends('mainlayout')

@section('pageheader')
    My Account
@endsection
@section('contain')
    <br><br>
    <div class="profile-page">
        <div class="wrapper">
            <br><br><br><br><br><br><br>
            <form method="post" action="{{route('companyUpdate')}}" enctype="multipart/form-data">
                <input type="hidden" name="userType" id="userType" value="{{Auth::user()->usertype}}">
                <input type="hidden" name="company_id" id="company_id" value="{{$companydetail->id}}">
                <input type="hidden" name="hiddenLogo" id="hiddenLogo" value="{{$companydetail->logo}}">
                {{csrf_field()}}
                <div class="main main-raised">
                    <div class="profile-content">
                        <div class="container">
                            <div class="row">
                                <div class="profile">
                                    <div class="avatar">
                                        <img src="@if($companydetail->logo==""){{ asset('assets/img/company/default.png').'/'.$companydetail->logo}} @else {{ asset('assets/img/company/').'/'.$companydetail->logo}} @endif" alt="Circle Image" class="img-circle img-responsive img-raised"><br>
                                        <input type="file" class="text-center center-block well well-sm" name="companyLogo">
                                    </div>
                                    <div class="name">
                                        <h3 class="title">@if($companydetail->companyname==""){{Auth::user()->email}}@else {{$companydetail->companyname}} @endif</h3>
                                        <h6>{{$companydetail->companytype}}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="description text-center @if($errors->first('aboutCompany')) has-error @endif">
                                <textarea id="aboutcompany" name="aboutCompany" class="form-control" placeholder="About Company" rows="4">{{$companydetail->aboutcompany}}</textarea>
                                @if($errors->first('aboutCompany'))
                                    <p class="text-danger"> {{$errors->first('aboutCompany')}} </p>
                                @endif
                            </div>
                        </div>
                        <div class="container-fluid">
                            <br><br>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="panel panel-danger">
                                            <div class="panel-heading">Company Details</div>
                                            <div class="panel-body">
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12 @if($errors->first('companyName')) has-error @endif">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Company Name</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <input id="name" name="companyName" type="text" placeholder="Name of Company" class="form-control input-md" value="{{$companydetail->companyname}}">
                                                            @if($errors->first('companyName'))
                                                                <p class="text-danger"> {{$errors->first('companyName')}} </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12 @if($errors->first('location')) has-error @endif">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Location</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <div class="search-category-container">
                                                                <select id="location" name="location" class="form-control dropdown-product selectpicker">
                                                                    <option value="">Select Location</option>
                                                                    <option value="Afghanistan" @if($companydetail->location=='Afghanistan')selected="selected"@endif>Afghanistan</option>
                                                                    <option value="Albania" @if($companydetail->location=='Albania')selected="selected"@endif>Albania</option>
                                                                    <option value="Algeria" @if($companydetail->location=='Algeria')selected="selected"@endif>Algeria</option>
                                                                    <option value="American Samoa" @if($companydetail->location=='American')selected="selected"@endif>American Samoa</option>
                                                                    <option value="Andorra" @if($companydetail->location=='Andorra')selected="selected"@endif>Andorra</option>
                                                                    <option value="Angola" @if($companydetail->location=='Angola')selected="selected"@endif>Angola</option>
                                                                    <option value="Anguilla" @if($companydetail->location=='Anguilla')selected="selected"@endif>Anguilla</option>
                                                                    <option value="Antartica" @if($companydetail->location=='Antartica')selected="selected"@endif>Antarctica</option>
                                                                    <option value="Antigua and Barbuda" @if($companydetail->location=='Antigua')selected="selected"@endif>Antigua and Barbuda</option>
                                                                    <option value="Argentina" @if($companydetail->location=='Argentina')selected="selected"@endif>Argentina</option>
                                                                    <option value="Armenia" @if($companydetail->location=='Armenia')selected="selected"@endif>Armenia</option>
                                                                    <option value="Aruba" @if($companydetail->location=='Aruba')selected="selected"@endif>Aruba</option>
                                                                    <option value="Australia" @if($companydetail->location=='Australia')selected="selected"@endif>Australia</option>
                                                                    <option value="Austria" @if($companydetail->location=='Austria')selected="selected"@endif>Austria</option>
                                                                    <option value="Azerbaijan" @if($companydetail->location=='Azerbaijan')selected="selected"@endif>Azerbaijan</option>
                                                                    <option value="Bahamas" @if($companydetail->location=='Bahamas')selected="selected"@endif>Bahamas</option>
                                                                    <option value="Bahrain" @if($companydetail->location=='Bahrain')selected="selected"@endif>Bahrain</option>
                                                                    <option value="Bangladesh" @if($companydetail->location=='Bangladesh')selected="selected"@endif>Bangladesh</option>
                                                                    <option value="Barbados" @if($companydetail->location=='Barbados')selected="selected"@endif>Barbados</option>
                                                                    <option value="Belarus" @if($companydetail->location=='Belarus')selected="selected"@endif>Belarus</option>
                                                                    <option value="Belgium" @if($companydetail->location=='Belgium')selected="selected"@endif>Belgium</option>
                                                                    <option value="Belize" @if($companydetail->location=='Belize')selected="selected"@endif>Belize</option>
                                                                    <option value="Benin" @if($companydetail->location=='Benin')selected="selected"@endif>Benin</option>
                                                                    <option value="Bermuda" @if($companydetail->location=='Bermuda')selected="selected"@endif>Bermuda</option>
                                                                    <option value="Bhutan" @if($companydetail->location=='Bhutan')selected="selected"@endif>Bhutan</option>
                                                                    <option value="Bolivia" @if($companydetail->location=='Bolivia')selected="selected"@endif>Bolivia</option>
                                                                    <option value="Bosnia and Herzegowina" @if($companydetail->location=='Bosnia and Herzegowina')selected="selected"@endif>Bosnia and Herzegowina</option>
                                                                    <option value="Botswana" @if($companydetail->location=='Botswana')selected="selected"@endif>Botswana</option>
                                                                    <option value="Bouvet Island" @if($companydetail->location=='Bouvet Island')selected="selected"@endif>Bouvet Island</option>
                                                                    <option value="Brazil" @if($companydetail->location=='Brazil')selected="selected"@endif>Brazil</option>
                                                                    <option value="British Indian Ocean Territory" @if($companydetail->location=='British Indian Ocean Territory')selected="selected"@endif>British Indian Ocean Territory</option>
                                                                    <option value="Brunei Darussalam" @if($companydetail->location=='Brunei Darussalam')selected="selected"@endif>Brunei Darussalam</option>
                                                                    <option value="Bulgaria" @if($companydetail->location=='Bulgaria')selected="selected"@endif>Bulgaria</option>
                                                                    <option value="Burkina Faso" @if($companydetail->location=='Burkina Faso')selected="selected"@endif>Burkina Faso</option>
                                                                    <option value="Burundi" @if($companydetail->location=='Burundi')selected="selected"@endif>Burundi</option>
                                                                    <option value="Cambodia" @if($companydetail->location=='Cambodia')selected="selected"@endif>Cambodia</option>
                                                                    <option value="Cameroon" @if($companydetail->location=='Cameroon')selected="selected"@endif>Cameroon</option>
                                                                    <option value="Canada" @if($companydetail->location=='Canada')selected="selected"@endif>Canada</option>
                                                                    <option value="Cape Verde" @if($companydetail->location=='Cape Verde')selected="selected"@endif>Cape Verde</option>
                                                                    <option value="Cayman Islands" @if($companydetail->location=='Cayman Islands')selected="selected"@endif>Cayman Islands</option>
                                                                    <option value="Central African Republic" @if($companydetail->location=='Central African Republic')selected="selected"@endif>Central African Republic</option>
                                                                    <option value="Chad" @if($companydetail->location=='Chad')selected="selected"@endif>Chad</option>
                                                                    <option value="Chile" @if($companydetail->location=='Chile')selected="selected"@endif>Chile</option>
                                                                    <option value="China" @if($companydetail->location=='China')selected="selected"@endif>China</option>
                                                                    <option value="Christmas Island" @if($companydetail->location=='Christmas Island')selected="selected"@endif>Christmas Island</option>
                                                                    <option value="Cocos Islands" @if($companydetail->location=='Cocos Islands')selected="selected"@endif>Cocos (Keeling) Islands</option>
                                                                    <option value="Colombia" @if($companydetail->location=='Colombia')selected="selected"@endif>Colombia</option>
                                                                    <option value="Comoros" @if($companydetail->location=='Comoros')selected="selected"@endif>Comoros</option>
                                                                    <option value="Congo" @if($companydetail->location=='Congo')selected="selected"@endif>Congo</option>
                                                                    <option value="Congo, the Democratic Republic of the" @if($companydetail->location=='Congo, the Democratic Republic of the')selected="selected"@endif>Congo, the Democratic Republic of the</option>
                                                                    <option value="Cook Islands" @if($companydetail->location=='Cook Islands')selected="selected"@endif>Cook Islands</option>
                                                                    <option value="Costa Rica" @if($companydetail->location=='Costa Rica')selected="selected"@endif>Costa Rica</option>
                                                                    <option value="Croatia" @if($companydetail->location=='Croatia')selected="selected"@endif>Croatia (Hrvatska)</option>
                                                                    <option value="Cuba" @if($companydetail->location=='Cuba')selected="selected"@endif>Cuba</option>
                                                                    <option value="Cyprus" @if($companydetail->location=='Cyprus')selected="selected"@endif>Cyprus</option>
                                                                    <option value="Czech Republic" @if($companydetail->location=='Czech Republic')selected="selected"@endif>Czech Republic</option>
                                                                    <option value="Denmark" @if($companydetail->location=='Denmark')selected="selected"@endif>Denmark</option>
                                                                    <option value="Djibouti" @if($companydetail->location=='Djibouti')selected="selected"@endif>Djibouti</option>
                                                                    <option value="Dominica" @if($companydetail->location=='Dominica')selected="selected"@endif>Dominica</option>
                                                                    <option value="Dominican Republic" @if($companydetail->location=='Dominican Republic')selected="selected"@endif>Dominican Republic</option>
                                                                    <option value="East Timor" @if($companydetail->location=='East Timor')selected="selected"@endif>East Timor</option>
                                                                    <option value="Ecuador" @if($companydetail->location=='Ecuador')selected="selected"@endif>Ecuador</option>
                                                                    <option value="Egypt" @if($companydetail->location=='Egypt')selected="selected"@endif>Egypt</option>
                                                                    <option value="El Salvador" @if($companydetail->location=='El Salvador')selected="selected"@endif>El Salvador</option>
                                                                    <option value="Equatorial Guinea" @if($companydetail->location=='Equatorial Guinea')selected="selected"@endif>Equatorial Guinea</option>
                                                                    <option value="Eritrea" @if($companydetail->location=='Eritrea')selected="selected"@endif>Eritrea</option>
                                                                    <option value="Estonia" @if($companydetail->location=='Estonia')selected="selected"@endif>Estonia</option>
                                                                    <option value="Ethiopia" @if($companydetail->location=='Ethiopia')selected="selected"@endif>Ethiopia</option>
                                                                    <option value="Falkland Islands" @if($companydetail->location=='Falkland Islands')selected="selected"@endif>Falkland Islands (Malvinas)</option>
                                                                    <option value="Faroe Islands" @if($companydetail->location=='Faroe Islands')selected="selected"@endif>Faroe Islands</option>
                                                                    <option value="Fiji" @if($companydetail->location=='Fiji')selected="selected"@endif>Fiji</option>
                                                                    <option value="Finland" @if($companydetail->location=='Finland')selected="selected"@endif>Finland</option>
                                                                    <option value="France" @if($companydetail->location=='France')selected="selected"@endif>France</option>
                                                                    <option value="France Metropolitan" @if($companydetail->location=='France Metropolitan')selected="selected"@endif>France, Metropolitan</option>
                                                                    <option value="French Guiana" @if($companydetail->location=='French Guiana')selected="selected"@endif>French Guiana</option>
                                                                    <option value="French Polynesia" @if($companydetail->location=='French Polynesia')selected="selected"@endif>French Polynesia</option>
                                                                    <option value="French Southern Territories" @if($companydetail->location=='French Southern Territories')selected="selected"@endif>French Southern Territories</option>
                                                                    <option value="Gabon" @if($companydetail->location=='Gabon')selected="selected"@endif>Gabon</option>
                                                                    <option value="Gambia" @if($companydetail->location=='Gambia')selected="selected"@endif>Gambia</option>
                                                                    <option value="Georgia" @if($companydetail->location=='Georgia')selected="selected"@endif>Georgia</option>
                                                                    <option value="Germany" @if($companydetail->location=='Germany')selected="selected"@endif>Germany</option>
                                                                    <option value="Ghana" @if($companydetail->location=='Ghana')selected="selected"@endif>Ghana</option>
                                                                    <option value="Gibraltar" @if($companydetail->location=='Gibraltar')selected="selected"@endif>Gibraltar</option>
                                                                    <option value="Greece" @if($companydetail->location=='Greece')selected="selected"@endif>Greece</option>
                                                                    <option value="Greenland" @if($companydetail->location=='Greenland')selected="selected"@endif>Greenland</option>
                                                                    <option value="Grenada" @if($companydetail->location=='Grenada')selected="selected"@endif>Grenada</option>
                                                                    <option value="Guadeloupe" @if($companydetail->location=='Guadeloupe')selected="selected"@endif>Guadeloupe</option>
                                                                    <option value="Guam" @if($companydetail->location=='Guam')selected="selected"@endif>Guam</option>
                                                                    <option value="Guatemala" @if($companydetail->location=='Guatemala')selected="selected"@endif>Guatemala</option>
                                                                    <option value="Guinea" @if($companydetail->location=='Guinea')selected="selected"@endif>Guinea</option>
                                                                    <option value="Guinea-Bissau" @if($companydetail->location=='Guinea-Bissau')selected="selected"@endif>Guinea-Bissau</option>
                                                                    <option value="Guyana" @if($companydetail->location=='Guyana')selected="selected"@endif>Guyana</option>
                                                                    <option value="Haiti" @if($companydetail->location=='Haiti')selected="selected"@endif>Haiti</option>
                                                                    <option value="Heard and McDonald Islands" @if($companydetail->location=='Heard and McDonald Islands')selected="selected"@endif>Heard and Mc Donald Islands</option>
                                                                    <option value="Holy See" @if($companydetail->location=='Holy See')selected="selected"@endif>Holy See (Vatican City State)</option>
                                                                    <option value="Honduras" @if($companydetail->location=='Honduras')selected="selected"@endif>Honduras</option>
                                                                    <option value="Hong Kong" @if($companydetail->location=='Hong Kong')selected="selected"@endif>Hong Kong</option>
                                                                    <option value="Hungary" @if($companydetail->location=='Hungary')selected="selected"@endif>Hungary</option>
                                                                    <option value="Iceland" @if($companydetail->location=='Iceland')selected="selected"@endif>Iceland</option>
                                                                    <option value="India" @if($companydetail->location=='India')selected="selected"@endif selected>India</option>
                                                                    <option value="Indonesia" @if($companydetail->location=='Indonesia')selected="selected"@endif>Indonesia</option>
                                                                    <option value="Iran" @if($companydetail->location=='Iran')selected="selected"@endif>Iran (Islamic Republic of)</option>
                                                                    <option value="Iraq" @if($companydetail->location=='Iraq')selected="selected"@endif>Iraq</option>
                                                                    <option value="Ireland" @if($companydetail->location=='Ireland')selected="selected"@endif>Ireland</option>
                                                                    <option value="Israel" @if($companydetail->location=='Israel')selected="selected"@endif>Israel</option>
                                                                    <option value="Italy" @if($companydetail->location=='Italy')selected="selected"@endif>Italy</option>
                                                                    <option value="Jamaica" @if($companydetail->location=='Jamaica')selected="selected"@endif>Jamaica</option>
                                                                    <option value="Japan" @if($companydetail->location=='Japan')selected="selected"@endif>Japan</option>
                                                                    <option value="Jordan" @if($companydetail->location=='Jordan')selected="selected"@endif>Jordan</option>
                                                                    <option value="Kazakhstan" @if($companydetail->location=='Kazakhstan')selected="selected"@endif>Kazakhstan</option>
                                                                    <option value="Kenya" @if($companydetail->location=='Kenya')selected="selected"@endif>Kenya</option>
                                                                    <option value="Kiribati" @if($companydetail->location=='Kiribati')selected="selected"@endif>Kiribati</option>
                                                                    <option value="Korea" @if($companydetail->location=='Korea')selected="selected"@endif>Korea, Republic of</option>
                                                                    <option value="Kuwait" @if($companydetail->location=='Kuwait')selected="selected"@endif>Kuwait</option>
                                                                    <option value="Kyrgyzstan" @if($companydetail->location=='Kyrgyzstan')selected="selected"@endif>Kyrgyzstan</option>
                                                                    <option value="Lao" @if($companydetail->location=='Lao')selected="selected"@endif>Lao People's Democratic Republic</option>
                                                                    <option value="Latvia" @if($companydetail->location=='Latvia')selected="selected"@endif>Latvia</option>
                                                                    <option value="Lebanon" @if($companydetail->location=='Lebanon')selected="selected"@endif>Lebanon</option>
                                                                    <option value="Lesotho" @if($companydetail->location=='Lesotho')selected="selected"@endif>Lesotho</option>
                                                                    <option value="Liberia" @if($companydetail->location=='Liberia')selected="selected"@endif>Liberia</option>
                                                                    <option value="Libyan Arab Jamahiriya" @if($companydetail->location=='Libyan Arab Jamahiriya')selected="selected"@endif>Libyan Arab Jamahiriya</option>
                                                                    <option value="Liechtenstein" @if($companydetail->location=='Liechtenstein')selected="selected"@endif>Liechtenstein</option>
                                                                    <option value="Lithuania" @if($companydetail->location=='Lithuania')selected="selected"@endif>Lithuania</option>
                                                                    <option value="Luxembourg" @if($companydetail->location=='Luxembourg')selected="selected"@endif>Luxembourg</option>
                                                                    <option value="Macau" @if($companydetail->location=='Macau')selected="selected"@endif>Macau</option>
                                                                    <option value="Macedonia" @if($companydetail->location=='Macedonia')selected="selected"@endif>Macedonia, The Former Yugoslav Republic of</option>
                                                                    <option value="Madagascar" @if($companydetail->location=='Madagascar')selected="selected"@endif>Madagascar</option>
                                                                    <option value="Malawi" @if($companydetail->location=='Malawi')selected="selected"@endif>Malawi</option>
                                                                    <option value="Malaysia" @if($companydetail->location=='Malaysia')selected="selected"@endif>Malaysia</option>
                                                                    <option value="Maldives" @if($companydetail->location=='Maldives')selected="selected"@endif>Maldives</option>
                                                                    <option value="Mali" @if($companydetail->location=='Mali')selected="selected"@endif>Mali</option>
                                                                    <option value="Malta" @if($companydetail->location=='Malta')selected="selected"@endif>Malta</option>
                                                                    <option value="Marshall Islands" @if($companydetail->location=='Marshall Islands')selected="selected"@endif>Marshall Islands</option>
                                                                    <option value="Martinique" @if($companydetail->location=='Martinique')selected="selected"@endif>Martinique</option>
                                                                    <option value="Mauritania" @if($companydetail->location=='Mauritania')selected="selected"@endif>Mauritania</option>
                                                                    <option value="Mauritius" @if($companydetail->location=='Mauritius')selected="selected"@endif>Mauritius</option>
                                                                    <option value="Mayotte" @if($companydetail->location=='Mayotte')selected="selected"@endif>Mayotte</option>
                                                                    <option value="Mexico" @if($companydetail->location=='Mexico')selected="selected"@endif>Mexico</option>
                                                                    <option value="Micronesia" @if($companydetail->location=='Micronesia')selected="selected"@endif>Micronesia, Federated States of</option>
                                                                    <option value="Moldova" @if($companydetail->location=='Moldova')selected="selected"@endif>Moldova, Republic of</option>
                                                                    <option value="Monaco" @if($companydetail->location=='Monaco')selected="selected"@endif>Monaco</option>
                                                                    <option value="Mongolia" @if($companydetail->location=='Mongolia')selected="selected"@endif>Mongolia</option>
                                                                    <option value="Montserrat" @if($companydetail->location=='Montserrat')selected="selected"@endif>Montserrat</option>
                                                                    <option value="Morocco" @if($companydetail->location=='Morocco')selected="selected"@endif>Morocco</option>
                                                                    <option value="Mozambique" @if($companydetail->location=='Mozambique')selected="selected"@endif>Mozambique</option>
                                                                    <option value="Myanmar" @if($companydetail->location=='Myanmar')selected="selected"@endif>Myanmar</option>
                                                                    <option value="Namibia" @if($companydetail->location=='Namibia')selected="selected"@endif>Namibia</option>
                                                                    <option value="Nauru" @if($companydetail->location=='Nauru')selected="selected"@endif>Nauru</option>
                                                                    <option value="Nepal" @if($companydetail->location=='Nepal')selected="selected"@endif>Nepal</option>
                                                                    <option value="Netherlands" @if($companydetail->location=='Netherlands')selected="selected"@endif>Netherlands</option>
                                                                    <option value="Netherlands Antilles" @if($companydetail->location=='Netherlands Antilles')selected="selected"@endif>Netherlands Antilles</option>
                                                                    <option value="New Caledonia" @if($companydetail->location=='New Caledonia')selected="selected"@endif>New Caledonia</option>
                                                                    <option value="New Zealand" @if($companydetail->location=='New Zealand')selected="selected"@endif>New Zealand</option>
                                                                    <option value="Nicaragua" @if($companydetail->location=='Nicaragua')selected="selected"@endif>Nicaragua</option>
                                                                    <option value="Niger" @if($companydetail->location=='Niger')selected="selected"@endif>Niger</option>
                                                                    <option value="Nigeria" @if($companydetail->location=='Nigeria')selected="selected"@endif>Nigeria</option>
                                                                    <option value="Niue" @if($companydetail->location=='Niue')selected="selected"@endif>Niue</option>
                                                                    <option value="Norfolk Island" @if($companydetail->location=='Norfolk Island')selected="selected"@endif>Norfolk Island</option>
                                                                    <option value="Northern Mariana Islands" @if($companydetail->location=='Northern Mariana Islands')selected="selected"@endif>Northern Mariana Islands</option>
                                                                    <option value="Norway" @if($companydetail->location=='Norway')selected="selected"@endif>Norway</option>
                                                                    <option value="Oman" @if($companydetail->location=='Oman')selected="selected"@endif>Oman</option>
                                                                    <option value="Pakistan" @if($companydetail->location=='Pakistan')selected="selected"@endif>Pakistan</option>
                                                                    <option value="Palau" @if($companydetail->location=='Palau')selected="selected"@endif>Palau</option>
                                                                    <option value="Panama" @if($companydetail->location=='Panama')selected="selected"@endif>Panama</option>
                                                                    <option value="Papua New Guinea" @if($companydetail->location=='Papua New Guinea')selected="selected"@endif>Papua New Guinea</option>
                                                                    <option value="Paraguay" @if($companydetail->location=='Paraguay')selected="selected"@endif>Paraguay</option>
                                                                    <option value="Peru" @if($companydetail->location=='Peru')selected="selected"@endif>Peru</option>
                                                                    <option value="Philippines" @if($companydetail->location=='Philippines')selected="selected"@endif>Philippines</option>
                                                                    <option value="Pitcairn" @if($companydetail->location=='Pitcairn')selected="selected"@endif>Pitcairn</option>
                                                                    <option value="Poland" @if($companydetail->location=='Poland')selected="selected"@endif>Poland</option>
                                                                    <option value="Portugal" @if($companydetail->location=='Portugal')selected="selected"@endif>Portugal</option>
                                                                    <option value="Puerto Rico" @if($companydetail->location=='Puerto Rico')selected="selected"@endif>Puerto Rico</option>
                                                                    <option value="Qatar" @if($companydetail->location=='Qatar')selected="selected"@endif>Qatar</option>
                                                                    <option value="Reunion" @if($companydetail->location=='Reunion')selected="selected"@endif>Reunion</option>
                                                                    <option value="Romania" @if($companydetail->location=='Romania')selected="selected"@endif>Romania</option>
                                                                    <option value="Russia" @if($companydetail->location=='Russia')selected="selected"@endif>Russian Federation</option>
                                                                    <option value="Rwanda" @if($companydetail->location=='Rwanda')selected="selected"@endif>Rwanda</option>
                                                                    <option value="Saint Kitts and Nevis" @if($companydetail->location=='Saint Kitts and Nevis')selected="selected"@endif>Saint Kitts and Nevis</option>
                                                                    <option value="Saint LUCIA" @if($companydetail->location=='Saint LUCIA')selected="selected"@endif>Saint LUCIA</option>
                                                                    <option value="Saint Vincent" @if($companydetail->location=='Saint Vincent')selected="selected"@endif>Saint Vincent and the Grenadines</option>
                                                                    <option value="Samoa" @if($companydetail->location=='Samoa')selected="selected"@endif>Samoa</option>
                                                                    <option value="San Marino" @if($companydetail->location=='San Marino')selected="selected"@endif>San Marino</option>
                                                                    <option value="Sao Tome and Principe" @if($companydetail->location=='Sao Tome and Principe')selected="selected"@endif>Sao Tome and Principe</option>
                                                                    <option value="Saudi Arabia" @if($companydetail->location=='Saudi Arabia')selected="selected"@endif>Saudi Arabia</option>
                                                                    <option value="Senegal" @if($companydetail->location=='Senegal')selected="selected"@endif>Senegal</option>
                                                                    <option value="Seychelles" @if($companydetail->location=='Seychelles')selected="selected"@endif>Seychelles</option>
                                                                    <option value="Sierra" @if($companydetail->location=='Sierra')selected="selected"@endif>Sierra Leone</option>
                                                                    <option value="Singapore" @if($companydetail->location=='Singapore')selected="selected"@endif>Singapore</option>
                                                                    <option value="Slovakia" @if($companydetail->location=='Slovakia')selected="selected"@endif>Slovakia (Slovak Republic)</option>
                                                                    <option value="Slovenia" @if($companydetail->location=='Slovenia')selected="selected"@endif>Slovenia</option>
                                                                    <option value="Solomon Islands" @if($companydetail->location=='Solomon Islands')selected="selected"@endif>Solomon Islands</option>
                                                                    <option value="Somalia" @if($companydetail->location=='Somalia')selected="selected"@endif>Somalia</option>
                                                                    <option value="South Africa" @if($companydetail->location=='South Africa')selected="selected"@endif>South Africa</option>
                                                                    <option value="South Georgia" @if($companydetail->location=='South Georgia')selected="selected"@endif>South Georgia and the South Sandwich Islands</option>
                                                                    <option value="Span" @if($companydetail->location=='Span')selected="selected"@endif>Spain</option>
                                                                    <option value="SriLanka" @if($companydetail->location=='SriLanka')selected="selected"@endif>Sri Lanka</option>
                                                                    <option value="St. Helena" @if($companydetail->location=='St. Helena')selected="selected"@endif>St. Helena</option>
                                                                    <option value="St. Pierre and Miguelon" @if($companydetail->location=='St. Pierre and Miguelon')selected="selected"@endif>St. Pierre and Miquelon</option>
                                                                    <option value="Sudan" @if($companydetail->location=='Sudan')selected="selected"@endif>Sudan</option>
                                                                    <option value="Suriname" @if($companydetail->location=='Suriname')selected="selected"@endif>Suriname</option>
                                                                    <option value="Svalbard" @if($companydetail->location=='Svalbard')selected="selected"@endif>Svalbard and Jan Mayen Islands</option>
                                                                    <option value="Swaziland" @if($companydetail->location=='Swaziland')selected="selected"@endif>Swaziland</option>
                                                                    <option value="Sweden" @if($companydetail->location=='Sweden')selected="selected"@endif>Sweden</option>
                                                                    <option value="Switzerland" @if($companydetail->location=='Switzerland')selected="selected"@endif>Switzerland</option>
                                                                    <option value="Syria" @if($companydetail->location=='Syria')selected="selected"@endif>Syrian Arab Republic</option>
                                                                    <option value="Taiwan" @if($companydetail->location=='Taiwan')selected="selected"@endif>Taiwan, Province of China</option>
                                                                    <option value="Tajikistan" @if($companydetail->location=='Tajikistan')selected="selected"@endif>Tajikistan</option>
                                                                    <option value="Tanzania" @if($companydetail->location=='Tanzania')selected="selected"@endif>Tanzania, United Republic of</option>
                                                                    <option value="Thailand" @if($companydetail->location=='Thailand')selected="selected"@endif>Thailand</option>
                                                                    <option value="Togo" @if($companydetail->location=='Togo')selected="selected"@endif>Togo</option>
                                                                    <option value="Tokelau" @if($companydetail->location=='Tokelau')selected="selected"@endif>Tokelau</option>
                                                                    <option value="Tonga" @if($companydetail->location=='Tonga')selected="selected"@endif>Tonga</option>
                                                                    <option value="Trinidad and Tobago" @if($companydetail->location=='Trinidad and Tobago')selected="selected"@endif>Trinidad and Tobago</option>
                                                                    <option value="Tunisia" @if($companydetail->location=='Tunisia')selected="selected"@endif>Tunisia</option>
                                                                    <option value="Turkey" @if($companydetail->location=='Turkey')selected="selected"@endif>Turkey</option>
                                                                    <option value="Turkmenistan" @if($companydetail->location=='Turkmenistan')selected="selected"@endif>Turkmenistan</option>
                                                                    <option value="Turks and Caicos" @if($companydetail->location=='Turks and Caicos')selected="selected"@endif>Turks and Caicos Islands</option>
                                                                    <option value="Tuvalu" @if($companydetail->location=='Tuvalu')selected="selected"@endif>Tuvalu</option>
                                                                    <option value="Uganda" @if($companydetail->location=='Uganda')selected="selected"@endif>Uganda</option>
                                                                    <option value="Ukraine" @if($companydetail->location=='Ukraine')selected="selected"@endif>Ukraine</option>
                                                                    <option value="United Arab Emirates" @if($companydetail->location=='United Arab Emirates')selected="selected"@endif>United Arab Emirates</option>
                                                                    <option value="United Kingdom" @if($companydetail->location=='United Kingdom')selected="selected"@endif>United Kingdom</option>
                                                                    <option value="United States" @if($companydetail->location=='United States')selected="selected"@endif>United States</option>
                                                                    <option value="United States Minor Outlying Islands" @if($companydetail->location=='United States Minor Outlying Islands')selected="selected"@endif>United States Minor Outlying Islands</option>
                                                                    <option value="Uruguay" @if($companydetail->location=='Uruguay')selected="selected"@endif>Uruguay</option>
                                                                    <option value="Uzbekistan" @if($companydetail->location=='Uzbekistan')selected="selected"@endif>Uzbekistan</option>
                                                                    <option value="Vanuatu" @if($companydetail->location=='Vanuatu')selected="selected"@endif>Vanuatu</option>
                                                                    <option value="Venezuela" @if($companydetail->location=='Venezuela')selected="selected"@endif>Venezuela</option>
                                                                    <option value="Vietnam" @if($companydetail->location=='Vietnam')selected="selected"@endif>Viet Nam</option>
                                                                    <option value="Virgin Islands (British)" @if($companydetail->location=='Virgin Islands (British)')selected="selected"@endif>Virgin Islands (British)</option>
                                                                    <option value="Virgin Islands (U.S)" @if($companydetail->location=='Virgin Islands (U.S)')selected="selected"@endif>Virgin Islands (U.S.)</option>
                                                                    <option value="Wallis and Futana Islands" @if($companydetail->location=='Wallis and Futana Islands')selected="selected"@endif>Wallis and Futuna Islands</option>
                                                                    <option value="Western Sahara" @if($companydetail->location=='Western Sahara')selected="selected"@endif>Western Sahara</option>
                                                                    <option value="Yemen" @if($companydetail->location=='Yemen')selected="selected"@endif>Yemen</option>
                                                                    <option value="Yugoslavia" @if($companydetail->location=='Yugoslavia')selected="selected"@endif>Yugoslavia</option>
                                                                    <option value="Zambia" @if($companydetail->location=='Zambia')selected="selected"@endif>Zambia</option>
                                                                    <option value="Zimbabwe" @if($companydetail->location=='Zimbabwe')selected="selected"@endif>Zimbabwe</option>
                                                                </select>
                                                            </div>
                                                            @if($errors->first('location'))
                                                                <p class="text-danger"> {{$errors->first('location')}} </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12 @if($errors->first('companyAddress')) has-error @endif">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Address</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <textarea  class="form-control" name="companyAddress" id="companyaddress" placeholder="Address of company">{{$companydetail->address}}</textarea>
                                                            @if($errors->first('companyAddress'))
                                                                <p class="text-danger"> {{$errors->first('companyAddress')}} </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12 @if($errors->first('email')) has-error @endif">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Email Id</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <input type="text" name="email" id="email" placeholder="Company Email-id" class="form-control" value="{{Auth::user()->email}}" readonly>
                                                            @if($errors->first('email'))
                                                                <p class="text-danger"> {{$errors->first('email')}} </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12 @if($errors->first('website')) has-error @endif">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Website</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <input type="text" name="website" id="website" placeholder="Company's Website" class="form-control" value="{{$companydetail->website}}">
                                                            @if($errors->first('website'))
                                                                <p class="text-danger"> {{$errors->first('website')}} </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12 @if($errors->first('companyType')) has-error @endif">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Type</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <input id="companytype" name="companyType" type="text" placeholder="Ex.:PVT limited, limited...etc" class="form-control input-md" value="{{$companydetail->companytype}}">
                                                            @if($errors->first('companyType'))
                                                                <p class="text-danger"> {{$errors->first('companyType')}} </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12 @if($errors->first('yearOfFound')) has-error @endif">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>Year of Found</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <input id="yearoffound" name="yearOfFound" type="text" placeholder="year of found" class="form-control input-md" value="{{$companydetail->foundyear}}">
                                                            @if($errors->first('yearOfFound'))
                                                                <p class="text-danger"> {{$errors->first('yearOfFound')}} </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-12 @if($errors->first('noOfEmp')) has-error @endif">
                                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                                            <h4>No. Of Employees</h4>
                                                        </div>
                                                        <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                                                            <h4>:</h4>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                                                            <input id="noofemp" name="noOfEmp" type="text" placeholder="No Of Employees working..." class="form-control input-md" value="{{$companydetail->noofemployee}}">
                                                            @if($errors->first('noOfEmp'))
                                                                <p class="text-danger"> {{$errors->first('noOfEmp')}} </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div><br>

                                                <div class="form-group">
                                                    <div class="col-md-12 text-center">
                                                        <button type="submit" class="btn btn-common">Save</button>
                                                        <a id="cancel" name="cancel" class="btn btn-common" href="{{route('companyProfile')}}">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                    </div>
                                </div>
                            </div><br><br>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br><br>
@endsection
