@extends('layouts.main')
@section('content')
<style type="text/css">
	
</style>
{!! Form::open(['route'=>'schedule.save','method'=>'post']) !!}
{!! csrf_field() !!}
<div>
	<label>Select schedule type</label>
	
	{!! Form::select('schedule_type',['lecture'=>'lecture','guest_lecture'=>'Guest lecture','workshop'=>'Workshop'],null,['placeholder'=>'Select schedule type','id'=>'schedule_type','required'=>'required']) !!}
</div>
<div >
	<div >
		<label>Topic</label>
		<input type="text" name="topic" required="required">
	</div>
	<div>
		<label>Relevent Subject</label>
		
		{!! Form::select('relevent_subject',['chemistry'=>'Chemistry','physics'=>'Physics','math'=>'Math'],null,['placeholder'=>'Select relevent subject','required'=>'required']) !!}
	</div>
	
	<div>
		<label>Select Date</label>
		<input type="date" name="date" required="required">
	
		<label>Select Time</label>
		<input type="time" name="time" required="required">
	</div>
	<div>
		<label>Name of teacher</label>
		<input type="text" name="teacher_name">
	</div>
	<div>
		<label>Name of Company</label>
		<input type="text" name="company_name">
	</div>
</div>

<button class="button">Submit</button>
{!! Form::close() !!}
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script type="text/javascript">
	
</script>
@endsection