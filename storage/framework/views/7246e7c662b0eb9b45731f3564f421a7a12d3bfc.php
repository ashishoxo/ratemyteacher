<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">
            All Teachers
        </h4>
        <p class="card-description">
            This list contains all the teachers of an institution
        </p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>
                        Profile Photo
                    </th>
                    <th>
                        Teacher's Name
                    </th>
                    <th>
                        Department
                    </th>
                    
                    <th>
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
            	<?php $__currentLoopData = $model; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="py-1">
                        <img src="../../images/faces-clipart/pic-1.png" alt="image">
                    </td>
                    <td>
                        <?php echo e($teacher->name); ?>

                    </td>
                    <td>
                        <?php echo e($teacher->department_rel->name); ?>

                    </td>
                    
                    <td>
                        <a type="button" class="btn btn-secondary btn-fw" href="<?php echo e(route('rate.teacher',[$teacher->id])); ?>"><i class="mdi mdi-cloud-download"></i>Rate</a>
                        
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </tbody>
        </table>
    </div>
</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.student', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>