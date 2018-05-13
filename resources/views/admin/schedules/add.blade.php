@extends('layouts.main')
@section('content')
<style type="text/css">
	.teacher-name,
	.company-name{
		display: none;
	}
</style>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">
            Add schedule
        </h4>
        <p class="card-description">
            Add a schedule to an institution
        </p>
		{!! Form::open(['route'=>'schedule.save','method'=>'post']) !!}
			{!! csrf_field() !!}
			<div class="form-group row">
                <label class="col-sm-3 col-form-label">Select schedule type</label>
                <div class="col-sm-9">
    				{!! Form::select('schedule_type',['lecture'=>'lecture','guest_lecture'=>'Guest lecture','workshop'=>'Workshop'],null,['placeholder'=>'Select schedule type','id'=>'schedule_type','required'=>'required']) !!}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Topic</label>
                <div class="col-sm-9">
					<input type="text" name="topic" required="required">
    			
                </div>
            </div>
        	<input type="hidden" name="relevent_subject" value="official_subject">    
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Date</label>
                <div class="col-sm-9">
					<input type="date" name="date" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Time</label>
                <div class="col-sm-9">
					<input type="time" name="time" required="required">
                </div>
            </div>
            <div class="form-group row teacher-name">
                <label class="col-sm-3 col-form-label">Name of teacher</label>
                <div class="col-sm-9">
					<input type="text" name="teacher_name">
                </div>
            </div>
            <div class="form-group row company-name">
                <label class="col-sm-3 col-form-label">Name of Company</label>
                <div class="col-sm-9">
					<input type="text" name="company_name">
                </div>
            </div>
			<button class="button">Submit</button>            
        {!! Form::close() !!}
	</div>
</div>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('body').on('change','select[name=schedule_type]',function(){
			if ($(this).val() == 'lecture') {
				$('.teacher-name').show();
				$('.company-name').hide();
			}
			if($(this).val() == 'guest_lecture'){
				$('.teacher-name').show();
				$('.company-name').hide();
			}
			if($(this).val() == 'workshop'){
				$('.company-name').show();
				$('.teacher-name').hide();
			}
		})
	})
</script>
@endsection