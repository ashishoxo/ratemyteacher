<?php $__env->startSection('content'); ?>
<style type="text/css">
	
</style>
<?php echo Form::open(['route'=>'schedule.save','method'=>'post']); ?>

<?php echo csrf_field(); ?>

<div>
	<label>Select schedule type</label>
	
	<?php echo Form::select('schedule_type',['lecture'=>'lecture','guest_lecture'=>'Guest lecture','workshop'=>'Workshop'],null,['placeholder'=>'Select schedule type','id'=>'schedule_type','required'=>'required']); ?>

</div>
<div >
	<div >
		<label>Topic</label>
		<input type="text" name="topic" required="required">
	</div>
	<div>
		<label>Relevent Subject</label>
		
		<?php echo Form::select('relevent_subject',['chemistry'=>'Chemistry','physics'=>'Physics','math'=>'Math'],null,['placeholder'=>'Select relevent subject','required'=>'required']); ?>

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
<?php echo Form::close(); ?>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script type="text/javascript">
	
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>