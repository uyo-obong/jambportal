<div class="tab-pane" id="olevel">

	<div class="row">
		<div class="col-md-6">
			<h5><u>First Sitting</u></h5>
			<p><b>Exam Type:</b> {{ $student->olevel->type }}</p>
			<p><b>Center Number:</b> {{ $student->olevel->center_number }}</p>
			<p><b>Registration Number:</b> {{ $student->olevel->reg_no }}</p>
			<p><b>Exam Year:</b> {{ $student->olevel->exam_year }}</p>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">Subjects</th>
							<th scope="col">Grades</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td colspan="1">{{ $student->olevel->sub1 }}</td>
							<td>{{ $student->olevel->grad1 }}</td>
						</tr>
						<tr>

							<td colspan="1">{{ $student->olevel->sub2 }}</td>
							<td>{{ $student->olevel->grad2 }}</td>
						</tr>

						<tr>
							<td colspan="1">{{ $student->olevel->sub3 }}</td>
							<td>{{ $student->olevel->grad3 }}</td>

						</tr>

						<tr>
							<td colspan="1">{{ $student->olevel->sub4 }}</td>
							<td>{{ $student->olevel->grad4 }}</td>
						</tr>
						<tr>
							<td colspan="1">{{ $student->olevel->sub5 }}</td>
							<td>{{ $student->olevel->grad5 }}</td>
						</tr>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>