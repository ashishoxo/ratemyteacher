<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-body">
        <h4 class="card-title">
            Today's Guest Lectures
        </h4>
        <p class="card-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
        <table class="table table-striped">
			<thead>
				<tr>
					<th>Topic</th>
					<th>Subject</th>
					
					<th>Time</th>
					<th>teacher</th>
					<th>company</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $guest_lectures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
					<?php $__currentLoopData = $values->meta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<td><?php echo e($value->value); ?></td>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<td>
							<a type="button" class="btn btn-secondary btn-fw" href="<?php echo e(route('guestlectures.rate',$values->id)); ?>"><i class="mdi mdi-cloud-download"></i>Rate it</a>
							
						</td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.student', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>