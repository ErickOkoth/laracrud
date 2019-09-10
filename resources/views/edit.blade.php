@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="card">
					<div class="card-header">Edit student</div>

					<div class="card-body">
						@include('includes.message')
						<form method="post" action="{{route('update',$student->id)}}">
							@csrf
							<div class="form-group">
								<label for="email">Name:</label>
								<input type="text" class="form-control" id="email" name="name" value="{{$student->name}}" required>
							</div>
							<div class="form-group">
								<label for="pwd">Reg no:</label>
								<input type="text" class="form-control" id="pwd" name="regno" value="{{$student->regno}}" required>
							</div>
							<div class="form-group">
								<label for="pwd">Location:</label>
								<input type="text" class="form-control" id="pwd" name="location" value="{{$student->location}}" required>
							</div>
							<div class="form-group form-check">
								<label class="form-check-label">

								</label>
							</div>
							<button type="submit" class="btn btn-primary btn-sm">Update</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
