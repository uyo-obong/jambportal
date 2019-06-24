<td>
	<button class="btn btn-outline-primary waves-effect waves-light legendary" data-toggle="modal" data-target="#modal-animation-7" data-studentid="{{ $student->id }}" data-studentfn="{{ $student->first_name }}" data-studentphoto="{{ $student->image }}" data-studentgender="{{ $student->gender }}" data-studentmn="{{ $student->student->middle_name }}" data-studentln="{{ $student->student->last_name }}" data-studentregno="{{ $student->institution->reg_no }}" data-studentamount="{{ $student->payment?'₦'.$student->payment->amount:'' }}" data-studentemail="{{ $student->email }}" data-studentage="{{ $student->age }}" data-studentphone="{{ $student->student->phone }}" data-studentaddress="{{ $student->student->address }}" data-studentcity="{{ $student->student->city }}" data-studentstate="{{ $student->student->state }}" data-studentcountry="{{ $student->student->country }}" data-studentinstitution="{{ $student->institution->institution_name }}" data-studentfaculty="{{ $student->institution->school }}" data-studentdep="{{ $student->institution->department }}">SHOW ME</button>
	</td>

	

	<!-- Modal Start -->
	<div class="modal fade" id="modal-animation-7">
		<div class="modal-dialog" id="display">
			<div class="modal-content animated lightSpeedIn">
				<div class="modal-header">
					<h5 class="modal-title" id="studentfn"><i class="fa fa-star"></i> Send Printout</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form  method="POST" action="{{ route('post.print') }}">
					{{ csrf_field() }}
					<div class="modal-body">
						<div class="form-group">
							<label>Select Center</label>
							<select class="form-control" name="center_id">
								<option  selected="" disabled>Select...</option>
								@foreach($centers as $center)
								<option value="{{  $center->id }}">{{ $center->name }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<input class="form-control" id="studentid" type="hidden" name="studentid">
							<input class="form-control" id="studentfn" type="hidden" name="firstname">
							<input class="form-control" id="studentmn" type="hidden" name="middlename">
							<input class="form-control" id="studentln" type="hidden" name="lastname">
							<input class="form-control" id="studentphoto" type="hidden" name="photo">
							<input class="form-control" id="studentage" type="hidden" name="age">
							<input class="form-control" id="studentgender" type="hidden" name="gender">
							<input class="form-control" id="studentemail" type="hidden" name="email">
							<input class="form-control" id="studentamount" type="hidden" name="amount">
							<input class="form-control" id="studentregno" type="hidden" name="regno">
							<input class="form-control" id="studentphone" type="hidden" name="phone">
							<input class="form-control" id="studentaddress" type="hidden" name="address">
							<input class="form-control" id="studentcity" type="hidden" name="city">
							<input class="form-control" id="studentstate" type="hidden" name="state">
							<input class="form-control" id="studentinstitution" type="hidden" name="institution">
							<input class="form-control" id="studentfaculty" type="hidden" name="faculty">
							<input class="form-control" id="studentdep" type="hidden" name="department">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
						<button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Send</button>
					</div>
				</form>
			</div>
		</div>
	</div>