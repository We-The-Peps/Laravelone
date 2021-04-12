@extends ('master')

@section ('content')
<div class="row">
	<div class="col-md-12">
		<br/>
		<h3 align="center">Student Data</h3>
		<br/>
		@if($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{$message}}</p>
		</div>
		@endif

		<div align="right">
			<a href="{{route('student.create')}}" class="btn btn-primary">Add</a>
			<br/>
			<br/>
		</div>

		<table class="table table-bordered table-responsive-lg">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($students as $row)
            <tr>
                <td>{{$row['id']}}</td>
                <td>{{$row['first_name']}}</td>
                <td>{{$row['last_name']}}</td>
                <td>{{$row['email']}}</td>
                <td>{{$row['phone_number']}}</td>
                <td>
                <a href="{{route('student.edit', $row['id'])}} " class="btn btn-primary">Edit</a>
            	</td>
                <td>
                	<form method="post" class="delete_form" action="{{route('student.destroy', $row['id'])}}">
                		{{csrf_field()}}
                		<input type="hidden" name="_method" value="DELETE" />
                		<button type="submit" class="btn btn-danger">Delete</button>
                		
                	</form>
                </td>
        @endforeach        	
	</div>

	<script>
		$(document).ready(function(){
			$('.delete_form').on('submit', function(){
				if(confirm("Are you sure you want to delete it?"))
				{
					return true;
				}
				else
				{
					return false;
				}
			})
		});
	</script>

@endsection