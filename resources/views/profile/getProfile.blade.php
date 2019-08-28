@extends('layouts.app')

@section('content')
<div class="clearfix"></div>

@include('messages.flash')
{{-- This  --}}
@if(session()->has('status') && auth()->user()->role == 'student')
<div class="load"></div>
<script>
	window.addEventListener('load', function(event) {
		swal("Proceed to the bank to make payment with the pin below!", "Your Registration Pin is: {{ $pin->reg_no }}");
	});
</script>
@endif

<div class="content-wrapper">
	<div class="container-fluid">

		<!-- Breadcrumb-->
		<div class="row pt-2 pb-2">
			<div class="col-sm-9">
				<h4 class="page-title">User Profile</h4>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="javaScript:void();">Portal</a></li>
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
							<img src="{{ url('uploads/'.auth()->user()->image) }}" height="300" alt="user avatar"
								class="card-img-top">
							<div class="details">
								<h5 class="mb-1 text-white ml-3">{{ auth()->user()->first_name }}</h5>
								<h6 class="text-white ml-3">{{ auth()->user()->email }}</h6>
							</div>
						</div>
						<div class="card-body text-center">
							<div class="pull-left"><b>Reg No.:</b> {{auth()->user()->institution->reg_no }}</div><br />
							<hr>
							@if(isset(auth()->user()->payment->reg_no))
							<div class="pull-right">
								<a class="btn btn-outline-primary" href="{{ route('get.print') }}">Print Your Slip</a>
							</div>
							@else
							<div class="pull-right"><button type="button"
									class="btn btn-outline-primary waves-effect waves-light" data-toggle="modal"
									data-target="#modal-animation-14">Make Payment</button></div>
							@endif
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				@if(session()->has('message'))
				<div class="alert alert-success">{{ session()->get('message') }}</div>
				@endif
				<div class="card">
					<div class="card-body">
						<ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
							<li class="nav-item">
								<a href="javascript:void();" data-target="#profile" data-toggle="pill"
									class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Bio
										Data</span></a>
							</li>
							<li class="nav-item">
								<a href="javascript:void();" data-target="#olevel" data-toggle="pill"
									class="nav-link"><i class="icon-folder-alt"></i> <span class="hidden-xs">O
										level</span></a>
							</li>
							<li class="nav-item">
								<a href="javascript:void();" data-target="#form" data-toggle="pill" class="nav-link"><i
										class="icon-note"></i> <span class="hidden-xs">Edit</span></a>
							</li>
						</ul>
						<div class="tab-content p-3">
							{{-- This control the user information --}}
							@include('profile.bioData')
							@include('profile.fsOlevel')
							@include('profile.form')
							@include('profile.payment')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End container-fluid-->
</div>
<!--End content-wrapper-->
<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->
@stop