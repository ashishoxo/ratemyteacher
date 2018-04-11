@extends('layouts.main')
@section('content')
{!! Form::open(['route'=>'teacher.save']) !!}
{!! csrf_field() !!}
<div>
	<label>Teacher Name</label>
	<input type="text" name="name">	
</div>
<div>
	<label>Department</label>
	<select name="department">
		<option>Commerce</option>
		<option>Enginerring</option>
	</select>	
</div>
<div>
	<label>Photo</label>
	<input type="file" name="pic">
</div>
<button class="button">Submit</button>
{!! Form::close() !!}
@endsection