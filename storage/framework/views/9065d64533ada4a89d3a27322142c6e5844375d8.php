<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">
            All Students
        </h4>
        <p class="card-description">
            This list contains all the students of an institution
        </p>
        <table class="table table-striped">
            <thead>
                <tr>
                	<th>
                        Profile Picture
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Roll no
                    </th>
                    <th>
                        Actions
                    </th>
                    
                </tr>
            </thead>
            <tbody>
            	<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="py-1">
                        <img src="../../images/faces-clipart/pic-1.png" alt="image">
                    </td>
                    <td>
                        <?php echo e($value->name); ?>

                    </td>
                    <td>
                        <?php echo e($value->username); ?>

                    </td>
                    <td>
                        <a type="button" class="btn btn-secondary btn-fw" href=""><i class="mdi mdi-cloud-download"></i>Edit</a>
                        <a type="button" class="btn btn-danger btn-fw"><i class="mdi mdi-cloud-download"></i>Delete</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </tbody>
        </table>
    </div>
</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>