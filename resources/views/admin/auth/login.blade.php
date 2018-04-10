@extends('admin.layouts.app')
@section('content')
<div class="tab-content " style="padding:40px 35%">

	{!! Form::open(['route'=>'admin.dologin','method'=>'post']) !!}
	{!! csrf_field() !!}
	
	
		
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
		

	
	{!! Form::close() !!}
	
</div>
@endsection