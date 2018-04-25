@extends('layouts.main')
@section('content')
	<div class="col-lg-12 col-md-12">
		<div class="dashboard-list-box margin-top-0">
			<h4>Students / Users</h4>
			<ul>
				@foreach($users as $key => $value)
				<li>
					<div class="list-box-listing">
						<div class="list-box-listing-img"><a href="#"><img src="images/listing-item-02.jpg" alt=""></a></div>
						<div class="list-box-listing-content">
							<div class="inner">
								<h3>{{$value->name}}<span style="display: inline-block;background: green;color: white;padding: 5px 10px;">{{$value->username}}</span></h3>
								<span>Bishop Avenue, New York</span>
								
							</div>
						</div>
					</div>
					<div class="buttons-to-right">
						<a href="#" class="button gray"><i class="sl sl-icon-close"></i> Edit</a>
						<a href="#" class="button gray"><i class="sl sl-icon-close"></i> Delete</a>
					</div>
				</li>
				@endforeach

			</ul>
		</div>
	</div>
@endsection