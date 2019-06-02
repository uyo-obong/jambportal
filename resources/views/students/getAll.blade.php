@extends('layouts.app')

@section('header_css')
@stop
@section('content')


<!-- Start wrapper-->
<div id="wrapper">

	<div class="clearfix"></div>

	@include('messages.flash')

	<div class="content-wrapper">
		<div class="container-fluid">
			<!-- Breadcrumb-->
			<div class="row pt-2 pb-2">
				<div class="col-sm-9">
					<h4 class="page-title">Student</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javaScript:void();">portal</a></li>
						<li class="breadcrumb-item active" aria-current="page">student</li>
					</ol>
				</div>
			</div>
			<!-- End Breadcrumb-->
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header"><i class="fa fa-table"></i> Students</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="example" class="table table-bordered">
									<thead>
										<tr>
											<th>#</th>
											<th>Student's Name</th>
											<th>Email</th>
											<th>Age</th>
											<th>Phone No.</th>
											<th>Address</th>
											<th>City</th>
											<th>State</th>
											<th>Institution</th>
											<th>Action</th>

											{{-- <th>Remove</th> --}}
										</tr>
									</thead>
									<tbody>
										@foreach($students as $student)
										<tr>
											<td>{{ $loop->index + 1 }}</td>
											<td>
												{{ $student->student->last_name }}, {{ $student->first_name }} {{ $student->student->middle_name }}
											</td>
											<td>{{ $student->email }}</td>
											<td>{{ $student->age }}</td>
											<td>{{ $student->student->phone }}</td>
											<td>{{ $student->student->address }}</td>
											<td>{{ $student->student->city }}</td>
											<td>{{ $student->student->state }}</td>
											<td>{{ $student->institution->institution_name }}</td>
											<td><a href="" class="btn btn-outline-primary">Update</a></td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div><!-- End Row-->
		</div>
		<!-- End container-fluid-->

	</div><!--End content-wrapper-->
	<!--Start Back To Top Button-->
	<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
	<!--End Back To Top Button-->
	
</div><!--End wrapper-->

@stop
@section('footer_js')

@stop