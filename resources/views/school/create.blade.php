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
					<h4 class="page-title">Faculty</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javaScript:void();">institution</a></li>
						<li class="breadcrumb-item active" aria-current="page">faculty</li>
					</ol>
				</div>
				<div class="col-sm-3">
					<div class="btn-group float-sm-right">
						<button type="button" class="btn btn-outline-primary waves-effect waves-light" data-toggle="modal" data-target="#modal-animation-7">SHOW ME</button>
					</div>
				</div>
			</div>
			<!-- End Breadcrumb-->
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header"><i class="fa fa-table"></i> Faculties</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="example" class="table table-bordered">
									<thead>
										<tr>
											<th>#</th>
											<th>Name Of Faculty/School</th>
											<th>Created</th>
											<th class="text-center">Action</th>
											{{-- <th>Remove</th> --}}
										</tr>
									</thead>
									<tbody>
										@foreach($schools as $school)
										<tr>
											<td>{{ $loop->index + 1 }}</td>
											<td>{{ $school->name }}</td>
											<td>{{ $school->created_at->diffForHumans() }}</td>
											<td class="text-center">
												<a href="" class=" btn btn-outline-primary">Update</a>

												<a href="" class="btn btn-outline-danger">Remove</a>
											</td>
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

<!-- Modal Start -->
<div class="modal fade" id="modal-animation-7">
	<div class="modal-dialog">
		<div class="modal-content animated lightSpeedIn">
			<div class="modal-header">
				<h5 class="modal-title"><i class="fa fa-star"></i>Register Faculty</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form  method="POST" action="{{ route('post.school') }}">
				{{ csrf_field() }}
				<div class="modal-body">
					<div class="form-group">
						<input class="form-control" type="text" name="name" placeholder="Faculty Name">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
					<button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>
@stop
@section('footer_js')

@stop