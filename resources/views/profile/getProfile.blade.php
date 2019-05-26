@extends('layouts.app')

@section('content')
<div class="clearfix"></div>

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumb-->
		<div class="row pt-2 pb-2">
			<div class="col-sm-9">
				<h4 class="page-title">User Profile</h4>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javaScript:void();">Rocker</a></li>
					<li class="breadcrumb-item"><a href="javaScript:void();">Pages</a></li>
					<li class="breadcrumb-item active" aria-current="page">User Profile</li>
				</ol>
			</div>
		</div>
		<!-- End Breadcrumb-->
		<div class="row">
			<div class="col-lg-4">
				<div class="profile-card-3">
					<div class="card">
						<div class="user-fullimage">
							<img src="assets/images/avatars/avatar-22.png" alt="user avatar" class="card-img-top">
							<div class="details">
								<h5 class="mb-1 text-white ml-3">Mark Jhonsan</h5>
								<h6 class="text-white ml-3">Senior Designer</h6>
							</div>
						</div>
						<div class="card-body text-center">
							<p>Lorem Ipsum available, but the majority have suffered</p>
							<div class="row">
								<div class="col p-2">
									<h5 class="mb-0 line-height-5">154</h5>
									<small class="mb-0 font-weight-bold">Projects</small>
								</div>
								<div class="col p-2">
									<h5 class="mb-0 line-height-5">2.2k</h5>
									<small class="mb-0 font-weight-bold">Followers</small>
								</div>
								<div class="col p-2">
									<h5 class="mb-0 line-height-5">9.1k</h5>
									<small class="mb-0 font-weight-bold">Views</small>
								</div>
							</div>

							<div class="list-inline mt-2">
								<a href="javascript:void()" class="list-inline-item btn-social btn-social-circle btn-behance waves-effect waves-light"><i class="fa fa-behance"></i></a>
								<a href="javascript:void()" class="list-inline-item btn-social btn-social-circle btn-dribbble waves-effect waves-light"><i class="fa fa-dribbble"></i></a>
								<a href="javascript:void()" class="list-inline-item btn-social btn-social-circle btn-github waves-effect waves-light"><i class="fa fa-github"></i></a>
							</div>
							<hr>
							<a href="javascript:void():" class="btn btn-primary shadow-primary btn-sm btn-round waves-effect waves-light m-1">Hire Me</a>
							<a href="javascript:void():" class="btn btn-outline-primary btn-sm btn-round waves-effect waves-light m-1">Profile</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="card">
					<div class="card-body">
						<ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
							<li class="nav-item">
								<a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
							</li>
							<li class="nav-item">
								<a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Edit</span></a>
							</li>
						</ul>
						<div class="tab-content p-3">
							<div class="tab-pane active" id="profile">
								<h5 class="mb-3">User Profile</h5>
								<div class="row">
									<div class="col-md-6">
										<h6>About</h6>
										<p>
											Web Designer, UI/UX Engineer
										</p>
										<h6>Hobbies</h6>
										<p>
											Indie music, skiing and hiking. I love the great outdoors.
										</p>
									</div>
									<div class="col-md-6">
										<h6>Recent badges</h6>
										<a href="javascript:void();" class="badge badge-dark badge-pill">html5</a>
										<a href="javascript:void();" class="badge badge-dark badge-pill">react</a>
										<a href="javascript:void();" class="badge badge-dark badge-pill">codeply</a>
										<a href="javascript:void();" class="badge badge-dark badge-pill">angularjs</a>
										<a href="javascript:void();" class="badge badge-dark badge-pill">css3</a>
										<a href="javascript:void();" class="badge badge-dark badge-pill">jquery</a>
										<a href="javascript:void();" class="badge badge-dark badge-pill">bootstrap</a>
										<a href="javascript:void();" class="badge badge-dark badge-pill">responsive-design</a>
										<hr>
										<span class="badge badge-primary"><i class="fa fa-user"></i> 900 Followers</span>
										<span class="badge badge-success"><i class="fa fa-cog"></i> 43 Forks</span>
										<span class="badge badge-danger"><i class="fa fa-eye"></i> 245 Views</span>
									</div>
									<div class="col-md-12">
										<h5 class="mt-2 mb-3"><span class="fa fa-clock-o ion-clock float-right"></span> Recent Activity</h5>
										<table class="table table-hover table-striped">
											<tbody>                                    
												<tr>
													<td>
														<strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
													</td>
												</tr>
												<tr>
													<td>
														<strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
													</td>
												</tr>
												<tr>
													<td>
														<strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
													</td>
												</tr>
												<tr>
													<td>
														<strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
													</td>
												</tr>
												<tr>
													<td>
														<strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<!--/row-->
							</div>
							<div class="tab-pane" id="edit">
								<form>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label">First name</label>
										<div class="col-lg-9">
											<input class="form-control" type="text" value="Mark">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label">Last name</label>
										<div class="col-lg-9">
											<input class="form-control" type="text" value="Jhonsan">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label">Email</label>
										<div class="col-lg-9">
											<input class="form-control" type="email" value="mark@example.com">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label">Change profile</label>
										<div class="col-lg-9">
											<input class="form-control" type="file">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label">Website</label>
										<div class="col-lg-9">
											<input class="form-control" type="url" value="">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label">Address</label>
										<div class="col-lg-9">
											<input class="form-control" type="text" value="" placeholder="Street">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label"></label>
										<div class="col-lg-6">
											<input class="form-control" type="text" value="" placeholder="City">
										</div>
										<div class="col-lg-3">
											<input class="form-control" type="text" value="" placeholder="State">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label">Username</label>
										<div class="col-lg-9">
											<input class="form-control" type="text" value="jhonsanmark">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label">Password</label>
										<div class="col-lg-9">
											<input class="form-control" type="password" value="11111122333">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
										<div class="col-lg-9">
											<input class="form-control" type="password" value="11111122333">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-3 col-form-label form-control-label"></label>
										<div class="col-lg-9">
											<input type="reset" class="btn btn-secondary" value="Cancel">
											<input type="button" class="btn btn-primary" value="Save Changes">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>
	<!-- End container-fluid-->
</div><!--End content-wrapper-->
<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->
@stop