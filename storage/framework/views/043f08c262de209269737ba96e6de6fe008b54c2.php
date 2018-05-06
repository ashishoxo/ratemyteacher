<?php $__env->startSection('content'); ?>
	<div class="dashboard-list-box margin-top-0">
	<h4>Lectures</h4>
	<ul>
		<?php $__currentLoopData = $workshop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li>
			<div class="list-box-listing">
				
				<div class="list-box-listing-content">
					<div class="inner">
						<?php $__currentLoopData = $value->meta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<span style="margin-right: 20px;"><?php echo e($value->value); ?></span>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
			</div>
			<div class="buttons-to-right">
				<a href="" class="button gray"><i class="sl sl-icon-note"></i> Rate</a>
				
			</div>
		</li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
	</ul>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.student', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>