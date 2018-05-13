<?php $__env->startSection('content'); ?>

<!-- Register -->
<div class="tab-content" style="padding:40px 35%">

	
	<?php echo Form::open(['route'=>'admin.doregister','method'=>'post']); ?>

	<?php echo csrf_field(); ?>

	<p class="form-row form-row-wide">
		<label for="username2">Username:
			<i class="im im-icon-Male"></i>
			<input type="text" class="input-text" name="name" id="username2" value="">
		</label>
	</p>
		
	<p class="form-row form-row-wide">
		<label for="email2">Email Address:
			<i class="im im-icon-Mail"></i>
			<input type="text" class="input-text" name="email" id="email2" value="">
		</label>
	</p>

	<p class="form-row form-row-wide">
		<label for="password1">Password:
			<i class="im im-icon-Lock-2"></i>
			<input class="input-text" type="password" name="password" id="password1">
		</label>
	</p>

	<p class="form-row form-row-wide">
		<label for="password2">Repeat Password:
			<i class="im im-icon-Lock-2"></i>
			<input class="input-text" type="password" name="password_confirmation" id="password2">
		</label>
	</p>

	<input type="submit" class="button border fw margin-top-10" name="register" value="Register">

	<?php echo Form::close(); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>