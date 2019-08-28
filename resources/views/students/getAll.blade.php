@extends('layouts.app')

@section('header_css')
<!-- data tables css -->
<link rel="stylesheet" href="{{ URL::to('data-tables/css/datatables.min.css') }}">
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
								<table id="responsive-table" class="display table table-bordered dt-responsive" style="width:100%">
									{{-- id="example" class="table table-bordered"> --}}
									<thead>
										<tr>
											<th>#</th>
											<th>Student's Name</th>
											<th>Reg No.</th>
											<th>Amount</th>
											<th>School</th>
											<th>Department</th>
											<th>Email</th>
											<th>Gender</th>
											{{-- <th>Age</th> --}}
											<th>Phone No.</th>
											<th>Address</th>
											<th>City</th>
											<th>State</th>
										</tr>
									</thead>
									<tbody>
										
										@foreach($students as $student)
										<tr>
											<td>{{ $loop->index + 1 }}</td>
											<td>
												{{ $student->student?$student->student->last_name:'' }}, {{ $student->first_name }} {{ $student->student?$student->student->middle_name:'' }}
											</td>
											{{-- @foreach($printouts as $printout) --}}
											<td class="{{ !$student->amount == null ? 'btn btn-success':'btn btn-danger'}}"> {{ $student->institutions?$student->institutions->reg_no: 'NOT PROCEED' }}</td>
											{{-- @endforeach --}}
											<td>{{ $student->amount?'₦'.$student->amount:'' }}</td>
											<td>{{ $student->institutions ? $student->institutions->school : '' }}</td>
											<td>{{ $student->institutions ? $student->institutions->department : '' }}</td>
											<td>{{ $student->email }}</td>
											<td>{{ $student->gender }}</td>
											<td>{{ $student->student?$student->student->phone:'' }}</td>
											<td>{{ $student->student?$student->student->address:'' }}</td>
											<td>{{ $student->student?$student->student->city:'' }}</td>
											<td>{{ $student->student?$student->student->state:'' }}</td>
											
											{{-- @include('students.printout') --}}
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
<script type="text/javascript">
	$(document).ready(function() {
		/* When click edit user */
		$(document).on('click', '.legendary', function(event) {
			console.table(event.target);

		//Listing to event
		let button = $(event.target)
		
		//binding the event to data method
		let studentid = button.data('studentid');
		let studentfn = button.data('studentfn');
		let studentmn = button.data('studentmn');
		let studentln = button.data('studentln');
		let studentphoto = button.data('studentphoto');
		let studentage = button.data('studentage');
		let studentgender = button.data('studentgender');
		let studentemail = button.data('studentemail');
		let studentamount = button.data('studentamount');
		let studentregno = button.data('studentregno');
		let studentphone = button.data('studentphone');
		let studentaddress = button.data('studentaddress');
		let studentcity = button.data('studentcity');
		let studentstate = button.data('studentstate');
		let studentinstitution = button.data('studentinstitution');
		let studentfaculty = button.data('studentfaculty');
		let studentdep = button.data('studentdep');
		
		let modal = $(document);
		console.log(modal);
		modal.find('#display #studentid').val(studentid);
		modal.find('#display #studentfn').val(studentfn);
		modal.find('#display #studentmn').val(studentmn);
		modal.find('#display #studentln').val(studentln);
		modal.find('#display #studentphoto').val(studentphoto);
		modal.find('#display #studentage').val(studentage);
		modal.find('#display #studentgender').val(studentgender);
		modal.find('#display #studentemail').val(studentemail);
		modal.find('#display #studentamount').val(studentamount);
		modal.find('#display #studentregno').val(studentregno);
		modal.find('#display #studentphone').val(studentphone);
		modal.find('#display #studentaddress').val(studentaddress);
		modal.find('#display #studentcity').val(studentcity);
		modal.find('#display #studentstate').val(studentstate);
		modal.find('#display #studentinstitution').val(studentinstitution);
		modal.find('#display #studentfaculty').val(studentfaculty);
		modal.find('#display #studentdep').val(studentdep);

	});
	});
</script>
<!-- datatable Js -->
<script src="{{ URL::to('data-tables/js/datatables.min.js') }}"></script>
<script src="{{ URL::to('data-tables/js/tbl-datatable-custom.js') }}"></script>
@stop