@extends('layouts.student')
@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">
            Today's workshops
        </h4>
        <p class="card-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
        <table class="table table-striped">
			<thead>
				<tr>
					
					<th>Topic</th>
					<th>Subject</th>
					<th>Date</th>
					<th>Time</th>
					<th>teacher</th>
					<th>company</th>
					<th>Actions</th>

				</tr>
			</thead>
			<tbody>
				@foreach($workshop as $key => $values)
					<tr>
					@foreach($values->meta as $key => $value)
						<td>{{$value->value}}</td>
					@endforeach
						<td>
							<a type="button" class="btn btn-secondary btn-fw" href="{{route('workshop.rate',$values->id)}}"><i class="mdi mdi-cloud-download"></i>Rate it</a>
							
						</td>
					</tr>
				@endforeach
			</tbody>
        </table>
    </div>
</div>
@endsection