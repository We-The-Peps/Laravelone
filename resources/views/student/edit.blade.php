@extends ('master')

@section ('content')

<div class="row">
	<div class="col-md-12">
		<br\>
		<h3>Edit Record</h3>
		<br />
		@if(count($errors) > 0)

		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif

		<form method="post" action="{{route('student.update', $id)}}">
			{{csrf_field()}}
			<input type="hiddden" name="_method" value="PATCH"/>
			<div class="form-group">
				<input type="text" name="first_name" class="form-control" value="{{$student->first_name}}" placeholder="Enter First Name"/>
			</div>
			<div class="form-group">
				<input type="text" name="last_name" class="form-control" value="{{$student->last_name}}" placeholder="Enter Last Name"/>
			</div>
			<div class="form-group">
				<input type="text" name="email" class="form-control" value="{{$student->email}}" placeholder="Enter email"/>
			</div>
			<div class="form-group">
				<input type="text" name="phone_number" class="form-control" value="{{$student->phone_number}}" placeholder="Enter Phone Number"/>
			</div>
			
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>
			
		</form>
			
	</div>
	
</div>

@endsection