@extends('admin.adminlayoute')

@section('contain')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Recruiter
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('adminindex')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('recruiterList')}}"><i class="fa fa-users"></i> List of Recruiter</a></li>
        <li class="active">Add New Recruiter</li>
      </ol>
    </section>

    <!-- Main content -->
	<form method="post" action="{{route('recruiterprofilestore')}}">
		{{csrf_field()}}
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Personal Details</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6 box-body">

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Profile Image</label>
									<input type="file" name="profilePhoto" id="profilePhoto">
									<p class="help-block">Upload Recruiter Image here.</p>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>First Name</label>
									<input type="text" class="form-control" placeholder="Ex.:Janki" name="firstName" id="firstName">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" class="form-control" placeholder="Ex.:patel" name="lastName" id="lastName">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Gender</label>
									<div class="form-group">
										<label>
											<input type="radio" name="gender" value="Male" class="minimal-red" checked="true">&nbsp;&nbsp;Male
										</label>
										&nbsp;&nbsp;&nbsp;
										<label>
											<input type="radio" name="gender" value="Female" class="minimal-red">&nbsp;&nbsp;Female
										</label>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Email ID</label>
									<input type="email" class="ti-email form-control" name="emailid" id="emailid" placeholder="abc@gmail.com" >
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Address</label>
									<textarea class="form-control" name="address" placeholder="Ex.: 57,hari krushna street, harni" rows="3"></textarea>
								</div>
							</div>
						</div>

					</div>

					<div class="col-md-6 box-body">
						<br>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Contact Number</label>
									<input type="tel" class="form-control" placeholder="8160626748" maxlength="15" name="contactNo">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>City</label>
									<select  id="city" name="city" class="form-control select2" style="width: 100%;">
										<option value="">Select</option>
										<option value="Vadodara">Vadodara</option>
										<option value="Bharuch">Bharuch</option>
										<option value="Rajkot">Rajkot</option>
										<option value="Mumbai">Mumbai</option>
									</select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>state</label>
									<select  id="state" name="state" class="form-control select2" style="width: 100%;">
										<option value="">Select</option>
										<option value="Vadodara">Gujarat</option>
										<option value="Maharastra">Maharastra</option>
										<option value="Rajasthan">Rajasthan</option>
										<option value="Goa">Goa</option>
									</select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Country</label>
									<select  id="country" name="country" class="form-control select2" style="width: 100%;">
										<option value="">Select</option>
										<option value="India">India</option>
										<option value="USA">USA</option>
										<option value="Dubai">Dubai</option>
										<option value="Canda">Canda</option>
									</select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Alternative Email ID</label>
									<input type="email" class="ti-email form-control" name="alterEmailid" id="alteremailid" placeholder="abc@gmail.com" >
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>About Recruiter</label>
									<textarea id="aboutMe" name="aboutMe" class="form-control" placeholder="About Yourself" rows="3"></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
	  
	  <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Other Details</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6 box-body">
					
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Company Name</label>
									<input type="text" class="form-control" placeholder="Ex.:abc private limited" name="companyName" id="companyname">
								</div>
							</div>
						</div>
							
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Company Type</label>
									<input type="text" class="form-control" placeholder="Ex.:abc private limited" name="companyType" id="companyname">
								 </div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<label>GST Register</label>
								<div class="form-group">
									<label>
										<input type="radio" name="gst" value="yes" class="minimal-red">&nbsp;&nbsp;Yes
									</label>
									&nbsp;&nbsp;&nbsp;
									<label>
										<input type="radio" name="gst" value="no" class="minimal-red" checked="true">&nbsp;&nbsp;No
									</label>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Industry Type</label>
									<select  id="industryType" name="industryType" class="form-control select2" style="width: 100%;">
										<option value="">Select</option>
                                        <option value="IT-Hardware & Networking">IT-Hardware & Networking</option>
                                        <option value="Food Processing">Food Processing</option>
									</select>
								</div>
							</div>
						</div>
							
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Company Address</label>
									<textarea class="form-control" name="companyAddress" placeholder="Ex.: 57,hari krushna street, harni" rows="4"></textarea>
								</div>
							</div>
						</div>
					</div>
						
					<div class="col-md-6 box-body">
					
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Reference Name</label>
									<input type="text" class="form-control" placeholder="Ex.:abc private limited" name="referenceName" id="companyname">
								</div>
							</div>
						</div>
							
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Reference's Designation</label>
									<select  id="designation" name="designation" class="form-control select2" style="width: 100%;">
										<option value="">Select</option>
                                        <option value="Manager">Manager</option>
                                        <option value="Assi. Manager">Assi. Manager</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer text-center">
			<button type="submit" class="btn btn-primary">Submit</button>
			<a href="{{route('recruiterList')}}"><button type="submit" class="btn btn-primary">Cancel</button></a>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
	</form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection