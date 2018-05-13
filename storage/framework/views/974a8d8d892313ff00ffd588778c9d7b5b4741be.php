<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">
            Edit Teacher Details
        </h4>
        <p class="card-description">
            Add a teacher to an institution
        </p>
			<?php echo Form::model($model,['route'=>['teacher.update',$model->id],'enctype'=>'multipart/form-data']); ?>

			<?php echo csrf_field(); ?>

			<div class="form-group row">
                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Name of teacher</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" id="exampleInputEmail2" placeholder="Enter email" value="<?php echo e($model->name); ?>">
                </div>
            </div>
            <div class="form-group row">
              	<label class="col-sm-3 col-form-label">Department</label>
              	<div class="col-sm-9">
                	<?php echo Form::select('department',App\department::getDepartment(),null,['placeholder'=>'Select Department','class'=>'form-control']); ?>

              	</div>
            </div>
            <div class="form-group row">
              	<label class="col-sm-3 col-form-label">Profile Photo</label>
              	<div class="col-sm-9">
                  
                  <?php echo e(Form::file('pic')); ?>

              	</div>
            </div>
            
                    
                  
            <button type="submit" class="btn btn-success mr-2">Submit</button>
		<?php echo Form::close(); ?>

	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>