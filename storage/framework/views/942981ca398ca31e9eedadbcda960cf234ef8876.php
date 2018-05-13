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
					<th>Schedule type</th>
					<th>Date</th>
					<th>Topic</th>
					<th>Subject</th>
					<th>Time</th>
					<th>teacher/company</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($values->schedule_type); ?></td>
					<td><?php echo e($values->date); ?></td>
					<?php $__currentLoopData = $values->meta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($value->value != "" && $value->value != null): ?>
							<td><?php echo e($value->value); ?></td>
						<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<td>
						<a href="<?php echo e(route('schedule.delete',$values->id)); ?>">Delete</a>
					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>