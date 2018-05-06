<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">
            Add Teacher
        </h4>
        <p class="card-description">
            Add a teacher to an institution
        </p>
        <?php echo Form::open(['route'=>'teacher.save']); ?>

		<?php echo csrf_field(); ?>

            <div class="form-group row">
                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Name of teacher</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" id="exampleInputEmail2" placeholder="Enter email">
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
                	<div id="fileuploader"><div class="ajax-upload-dragdrop" style="vertical-align: top; width: 400px;"><div class="ajax-file-upload" style="position: relative; overflow: hidden; cursor: default;">Upload<form method="POST" action="YOUR_FILE_UPLOAD_URL" enctype="multipart/form-data" style="margin: 0px; padding: 0px;"><input type="file" id="ajax-upload-id-1525591641943" name="pic" accept="*" multiple="" style="position: absolute; cursor: pointer; top: 0px; width: 100%; height: 100%; left: 0px; z-index: 100; opacity: 0;"></form></div><span><b>Profile photo</b></span></div><div></div></div>
              	</div>
            </div>
            
                    
                  
            <button type="submit" class="btn btn-success mr-2">Submit</button>
            
<?php echo Form::close(); ?>

        
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>