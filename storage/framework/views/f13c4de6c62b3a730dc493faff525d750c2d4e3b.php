<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">
            Add Department
        </h4>
        <p class="card-description">
            Add a department to an institution
        </p>
		<?php echo Form::open(['route'=>'department.save']); ?>

			<?php echo csrf_field(); ?>


			<div class="form-group row">
			    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Department Name</label>
			    <div class="col-sm-9">
			        <input type="text" class="form-control" name="name" id="exampleInputEmail2" placeholder="Enter email">
			    </div>
			</div>

			<button class="button">Submit</button>
		<?php echo Form::close(); ?>

	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>