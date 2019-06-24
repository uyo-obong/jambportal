<!-- Modal Start -->
<div class="modal fade" id="modal-animation-14">
	<div class="modal-dialog">
		<div class="modal-content animated fadeInUp">
			<div class="modal-header">
				<h5 class="modal-title"><i class="fa fa-star"></i>Make Payment</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="{{ route('post.payment') }}">
				{{ csrf_field() }}
				<div class="modal-body">
					<div class="form-group">
						<label for="number2"> Registration Number</label>
						<input class="form-control" type="text" name="reg_no"
							value="{{ $student->institution->reg_no }}">
					</div>
					<div class="form-group">
						<label for="number2"> Amount</label>
						<input class="form-control" type="number" name="amount" placeholder="Amount">
					</div>
					<input class="form-control" type="hidden" name="user_id" value="{{ auth()->user()->id }}">
					<div class="form-group">
						<div class="text-center">
							<h4>OR</h4>
						</div>
						<p>Pay Via bank. Visit any commercial bank Nation-Wide to make payment via your registration
							number: {{ $student->institution->reg_no }}</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i>
						Close</button>
					<button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Confirm
						Payment</button>
				</div>
			</form>
		</div>
	</div>
</div>