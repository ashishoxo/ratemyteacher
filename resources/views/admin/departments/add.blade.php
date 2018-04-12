@extends('layouts.main')
@section('content')
{!! Form::open(['route'=>'department.save']) !!}
{!! csrf_field() !!}
<div>
	<label>Department Name</label>
	<input type="text" name="name">	
</div>

<button class="button">Submit</button>
{!! Form::close() !!}
@endsection