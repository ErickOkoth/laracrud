@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header"> Students</div>

					<div class="card-body">
						@include('includes.message')
<table class="table table-bordered table-hover">
	<thead class="table-dark">
	<th>Student Id</th>
	<th>Name</th>
	<th>Reg no</th>
	<th>Location</th>
	<th></th>
	</thead>
	<tbody>
	@foreach($students as $student)
		<tr>
			<td>{{$student->id}}</td>
			<td>{{$student->name}}</td>
			<td>{{$student->regno}}</td>
			<td>{{$student->location}}</td>
			<td>
				<a class="btn btn-primary btn-lg" href="{{route('edit',$student->id)}}">Edit</a>
				<a class="btn btn-danger btn-lg" href="{{route('remove',$student->id)}}">Delete</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
