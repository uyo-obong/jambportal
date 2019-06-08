	<div class="tab-pane active" id="profile">

		<div class="row">
			<div class="col-md-6">
				<h6>Phone No.</h6>
				<p>
					{{ $student->student->phone }}
				</p>
				<h6>Address</h6>
				<p>
					{{ $student->student->address }}
				</p>
				<h6>State</h6>
				<p>
					{{ $student->student->state }}
				</p>
				<h6>Zone</h6>
				<p>
					{{ $student->student->zone }}
				</p>
			</div>
			<div class="col-md-6">
				<h6>Gender</h6>
				<p>
					Male
				</p>
				<h6>City</h6>
				<p>
					{{ $student->student->city }}
				</p>
				<h6>Country</h6>
				<p>
					{{ $student->student->country }}
				</p>
			</div>

			<div class="col-md-12">
				<hr>
				<h5 class="mt-2 mb-3"><span class=" float-right"></span> Choice of Institution</h5>

				<p>
					<b>Name:</b> {{ $student->institution->institution_name }}
				</p>

				<p>
					<b>Faculty:</b>	{{ $student->institution->school }}
				</p>

				<p>
					<b>Department:</b>	{{ $student->institution->department }}
				</p>

			</div>
		</div>
		<!--/row-->
	</div>