@extends('admin.adminlayoute')

@section('contain')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Company
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('adminindex')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('companyList')}}"><i class="fa fa-industry"></i> List of Company</a></li>
        <li class="active">Add New Company</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
		  <div class="box-header with-border">
			  <h3 class="box-title">Company Profile</h3>

			  <div class="box-tools pull-right">
				  <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
					  <i class="fa fa-minus"></i></button>
				  <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
					  <i class="fa fa-times"></i></button>
			  </div>
		  </div>
		  <form method="post" action="{{route('companyprofilestore')}}">
			  <input type="hidden" name="userType" id="userType" value="{{Auth::user()->usertype}}">
			  {{csrf_field()}}
			  <div class="box-body">
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-6 box-body">

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Company Name</label>
											<input id="name" name="companyName" type="text" placeholder="Name of Company" class="form-control input-md">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Email Id</label>
											<input type="text" name="email" id="email" placeholder="Company Email-id" class="form-control">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Location</label>
											<select  name="location" id="location" class="form-control select2" style="width: 100%;">
												<option value="">Select Location</option>
												<option value="India">India</option>
												<option value="USA">USA</option>
												<option value="New York">New York</option>
											</select>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Address</label>
											<textarea  class="form-control" name="companyAddress" id="companyaddress" placeholder="Address of company"></textarea>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Logo</label>
											<input type="file" name="companyLogo">
											<p class="help-block">Upload Company Logo here.</p>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-6 box-body">

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Website</label>
											<input type="text" name="website" id="website" placeholder="Company's Website" class="form-control">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Type</label>
											<input id="companytype" name="companyType" type="text" placeholder="Ex.:PVT limited, limited...etc" class="form-control input-md">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Year of Found</label>
											<input id="yearoffound" name="yearOfFound" type="text" placeholder="year of found" class="form-control input-md">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>About Company</label>
											<textarea id="aboutcompany" name="aboutCompany" class="form-control" placeholder="About Company"></textarea>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>No.Of Employees</label>
											<input id="noofemp" name="noOfEmp" type="text" placeholder="No Of Employees working..." class="form-control input-md">
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
				  <a href="{{route('companyList')}}"><button type="button" class="btn btn-primary">Cancel</button></a>
			  </div>
			  <!-- /.box-footer-->
		  </form>
	  </div>
		<!-- /.box -->
	</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection