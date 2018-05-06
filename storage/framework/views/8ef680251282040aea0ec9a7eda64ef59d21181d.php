<?php $__env->startSection('content'); ?>
	<div class="dashboard-list-box margin-top-0">
	<h4>Lectures</h4>
	<ul>
		<?php $__currentLoopData = $lectures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li>
			
			<div class="list-box-listing">
				
				<div class="list-box-listing-content">
					<div class="inner">
						<?php $__currentLoopData = $values->meta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<span style="margin-right: 20px;"><?php echo e($value->value); ?></span>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
			</div>
			<div class="buttons-to-right">
				<a href="<?php echo e(route('lecture.rate',$values->id)); ?>" class="button gray"><i class="sl sl-icon-note"></i> Rate</a>
				
			</div>

			
		</li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
	</ul>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.student', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>