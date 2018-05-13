<?php $__env->startSection('content'); ?>
<style type="text/css">
    .rating {
              unicode-bidi: bidi-override;
              direction: rtl;
              float: left
            }
            .rating > span {
              display: inline-block;
              position: relative;
              width: 1.1em;
              font-size: 30px;

            }
            .rating > span.active:before{
                content: "\2605";
               position: absolute;
               color: #FF9800
            }
            .rating > span:hover:before,
            .rating > span:hover ~ span:before {
               content: "\2605";
               position: absolute;
               color: #FF9800
            }
</style>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">
            teacher ratings    
        </h4>
        <p class="card-description">
            
        </p>
        <?php $__currentLoopData = $model; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="d-flex align-items-start pb-3 border-bottom" style="position: relative;">
                <img src="../../images/samples/profile_page/logo/01.png" alt="User img">
                <div class="wrapper pl-4">
                    <p class="font-weight-bold mb-0">
                        <?php echo e($value->user); ?>

                    </p>
                    <small><?php echo e($value->comment); ?></small>
                    <div style="position: absolute;right: 0;top: 0">
                        <div class="rating" data-value="">
                            <span class="<?php echo e(($value->rating >= 5) ? 'active' : ''); ?>">☆</span>
                            <span class="<?php echo e(($value->rating >= 4) ? 'active' : ''); ?>">☆</span>
                            <span class="<?php echo e(($value->rating >= 3) ? 'active' : ''); ?>">☆</span>
                            <span class="<?php echo e(($value->rating >= 2) ? 'active' : ''); ?>">☆</span>
                            <span class="<?php echo e(($value->rating >= 1) ? 'active' : ''); ?>">☆</span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>