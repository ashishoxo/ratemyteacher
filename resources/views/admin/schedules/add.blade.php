@extends('layouts.main')
@section('content')
<style type="text/css">
	.lecture,.guest-lecture,.workshop,.date-time,.day-only{
		display: none
	}
</style>
{!! Form::open(['route'=>'department.save']) !!}
{!! csrf_field() !!}
<div>
	<label>Select schedule type</label>
	<select id="schedule_type">
		<option selected="" disabled="">Select Schedule</option>
		<option value="lecture">Lecture</option>
		<option value="guest_lecture">Guest lecture</option>
		<option value="workshop">Workshop</option>
	</select>	
</div>
<div class="lecture">
	<div>
		<label>Topic</label>
		<input type="text" name="">
	</div>
	<div>
		<label>Relevent Subject</label>
		<select>
			<option selected="" disabled="">Select Schedule</option>
			<option>Subject 1</option>
			<option>Subject 2</option>
			<option>Subject 3</option>
		</select>
	</div>
	<div>
		<div id="lecture_type">
					
			<input id="check-a" type="radio" name="check" value="one_time">
			<label for="check-a">One Time</label>

			<input id="check-b" type="radio" name="check" value="reoccuring">
			<label for="check-b">Reoccuring</label>

			
	
		</div>
	</div>
	<div class="date-time">
		<label>Select Date</label>
		<input type="date" name="">
	
		<label>Select Time</label>
		<input type="time" name="">
	</div>
	<div class="day-only">
		<label>Select Day</label>
		<input type="text"></input>
	</div>
</div>
<div class="guest-lecture">
	<div>
		<label>Topic</label>
		<input type="text" name="">
	</div>
	<div>
		
		<label>Relevent Subject</label>
		<select>
			<option selected="" disabled="">Select Schedule</option>
			<option>Subject 1</option>
			<option>Subject 2</option>
			<option>Subject 3</option>
		</select>
	
	</div>
	<div>
		<label>Select Date</label>
		<input type="date" name="">
	</div>
	<div>
		<label>Select Time</label>
		<input type="time" name="">
	</div>
	<div>
		<label>Name of teacher</label>
		<input type="text" name="">
	</div>
</div>
<div class="workshop">
	<div>
		<label>Topic</label>
		<input type="text" name="">
	</div>
	<div>
		<label>Select Date</label>
		<input type="date" name="">
	</div>
	<div>
		<label>Select Time</label>
		<input type="time" name="">
	</div>
	<div>
		<label>Name of Company</label>
		<input type="text" name="">
	</div>
</div>
<button class="button">Submit</button>
{!! Form::close() !!}
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('body').on('change','#schedule_type',function(){
			if ($(this).val() == "lecture") {
				$('.lecture').show();
				$('.guest-lecture').hide();
				$('.workshop').hide();
			} else if ($(this).val() == "guest_lecture") {
				$('.guest-lecture').show();
				$('.lecture').hide();
				$('.workshop').hide();
			} else if ($(this).val() == "workshop") {
				$('.workshop').show();
				$('.guest-lecture').hide();
				$('.lecture').hide();
			}
		});
		$('body').on('click','#lecture_type input',function(){
			if ($(this).val() == "reoccuring") {
				$('.day-only').show();
				$('.date-time').hide();
			} else if ($(this).val() == "one_time") {
				$('.day-only').hide();
				$('.date-time').show();
			}
		});
	});
</script>
@endsection