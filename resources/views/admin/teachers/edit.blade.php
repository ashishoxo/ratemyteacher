@extends('layouts.main')
@section('content')
{!! Form::model($model,['route'=>'teacher.save']) !!}
{!! csrf_field() !!}
<div>
	<label>Teacher Name</label>
	<input type="text" name="name" value="{{$model->name}}">	
</div>
<div>
	<label>Department</label>
	{!! Form::select('department',App\department::getDepartment(),null,['placeholder'=>'Select Department']) !!}
</div>
<div>
	<label>Photo</label>
	<input type="file" name="pic">
</div>
<button class="button">Submit</button>
{!! Form::close() !!}
@endsection