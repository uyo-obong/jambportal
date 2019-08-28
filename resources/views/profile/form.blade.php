<div class="tab-pane" id="form">
	<form method="POST" action="{{ route('update.student', $student->id) }}">
		{{ method_field('put') }}

		@csrf

		<input class="form-control" name="studentId" type="hidden" value="{{ $student->id }}">

		<div class="form-group row">
			<label class="col-lg-3 col-form-label form-control-label">First name</label>
			<div class="col-lg-9">
				<input class="form-control" name="first_name" type="text" value="{{ $student->first_name }}">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-lg-3 col-form-label form-control-label">Middle name</label>
			<div class="col-lg-9">
				<input class="form-control" name="middle_name" type="text" value="{{ $student->student->middle_name }}">
			</div>
		</div>
		
		<div class="form-group row">
			<label class="col-lg-3 col-form-label form-control-label">Last name</label>
			<div class="col-lg-9">
				<input class="form-control" name="last_name" type="text" value="{{ $student->student->last_name }}">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-lg-3 col-form-label form-control-label">Phone No.</label>
			<div class="col-lg-9">
				<input class="form-control" name="phone_number" type="text" value="{{ $student->student->phone }}">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-lg-3 col-form-label form-control-label">Address</label>
			<div class="col-lg-9">
				<input class="form-control" name="address" type="text" value="{{ $student->student->address }}">
			</div>
		</div>
		<div class="form-group row float-right">
			<div class="col-lg-9">
				<button type="submit" class="btn btn-primary">Save Changes</button>
			</div>
		</div>
	</form>
</div>