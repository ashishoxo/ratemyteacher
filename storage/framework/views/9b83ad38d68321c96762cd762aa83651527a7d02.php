<?php $__env->startSection('content'); ?>
<div class="tab-content " style="padding:40px 35%">

	<?php echo Form::open(['route'=>'admin.dologin','method'=>'post']); ?>

	<?php echo csrf_field(); ?>

	
	
		
		<p class="form-row form-row-wide">
			<label for="username">Username:
				<i class="im im-icon-Male"></i>
				<input type="text" class="input-text" name="email" id="username" >
			</label>
		</p>

		<p class="form-row form-row-wide">
			<label for="password">Password:
				<i class="im im-icon-Lock-2"></i>
				<input class="input-text" type="password" name="password" id="password">
			</label>
			<span class="lost_password">
				<a href="#">Lost Your Password?</a>
			</span>
		</p>

		<div class="form-row">
			<input type="submit" class="button border margin-top-5" name="login" value="Login">
			<div class="checkboxes margin-top-10">
				<input id="remember-me" type="checkbox" name="check">
				<label for="remember-me">Remember Me</label>
			</div>
		</div>
		

	
	<?php echo Form::close(); ?>

	
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>