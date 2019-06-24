@extends('layouts.app')

@section('content')
<!-- Start wrapper-->
<div id="wrapper">

	@include('messages.flash')
	<div class="clearfix"></div>

	<div class="content-wrapper">
		<div class="container-fluid">
			<!-- Breadcrumb-->
			<div class="row pt-2 pb-2">
				<div class="col-sm-9">
					<h4 class="page-title">Center</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javaScript:void();">country</a></li>
						<li class="breadcrumb-item active" aria-current="page">center</li>
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
						<div class="card-header"><i class="fa fa-table"></i> Centers</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="example" class="table table-bordered">
									<thead>
										<tr>
											<th>#</th>
											<th>Center</th>
											<th>Center Number</th>
											<th>Zone</th>
											{{-- <th>Created</th> --}}
											<th class="text-center">Action</th>
										</tr>
									</thead>
									@foreach($centers as $center)
									<tr>
										<td>{{ $loop->index + 1 }}</td>
										<td>{{ $center->name }}</td>
										<td>{{ $center->center_no }}</td>
										<td>
											@foreach($zones as $zone)
											{{ $zone->id == $center->zone_id?$zone->name:'' }}
											@endforeach
										</td>
										{{-- <td>{{ $center->created_at->diffForHumans() }}</td> --}}
										<td class="text-center">
											<a href="" class="btn btn-outline-primary">Update</a>

											<a href="" class="btn btn-outline-danger">Remove</a></td>
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
				<h5 class="modal-title"><i class="fa fa-star"></i> Register Center</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form  method="POST" action="{{ route('post.center') }}">
				{{ csrf_field() }}
				<div class="modal-body">
					<div class="form-group">
						<input class="form-control" type="text" name="name" placeholder="Center Name">
					</div>
					<div class="form-group">
						<select name="zone_id" class="required form-control single-select">
							<option selected="">Select...</option>
							@foreach($zones as $zone)
							<option value="{{ $zone->id }}">{{ $zone->name }}</option>
							@endforeach
						</select>
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