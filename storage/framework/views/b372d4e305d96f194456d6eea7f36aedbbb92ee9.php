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
             Lecture Detail
        </h4>
        <p class="card-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
        <table class="table table-striped">
			<tbody>
				<?php $__currentLoopData = $model->meta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<th>
						<?php echo e($value->key); ?>		
					</th>
					<td>
						<?php echo e($value->value); ?>

					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
        </table>
		<?php echo Form::open(['route'=>['lecture.saverate','id'=>request()->route()->parameters()['id']],'method'=>'post']); ?>

			<?php echo csrf_field(); ?>

			<div class="form-group" style="margin-top: 30px">
				<label for="exampleInputEmail1">Write Your Comment</label>
				<textarea rows="10" name="comment" class="form-control" id="exampleInputEmail1" placeholder="Write Your Comment"></textarea>

			</div>
			<div class="rating">
				<span data-value="5">☆</span>
				<span data-value="4">☆</span>
				<span data-value="3">☆</span>
				<span data-value="2">☆</span>
				<span data-value="1">☆</span>
			</div>
			<input type="hidden" name="rating" value="">
			<input type="hidden" name="user" value="<?php echo e(Auth::user()->name); ?>">
			<br><br><br>
			<button>Submit</button>
		<?php echo Form::close(); ?>


		<div class="col-12">
			<?php $__currentLoopData = $model->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('body').on('click','.rating > span',function(){
				$(this).addClass('active');
				$(this).nextAll().addClass('active');
				$(this).prevAll().removeClass('active');
				$('input[name=rating]').val($(this).data('value'));
			})
		})
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.student', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>