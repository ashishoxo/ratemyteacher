@extends('layouts.main')
@section('content')
	<table style="width: 100%">
		<thead>
			<tr>
				<th>Schedule type</th>
				<th>Topic</th>
				<th>Subject</th>
				<th>Date</th>
				<th>Time</th>
				<th>teacher</th>
				<th>company</th>
			</tr>
		</thead>
		<tbody>
			@foreach($schedules as $key => $value)
			<tr>
				<td>{{$value->schedule_type}}</td>
				@foreach($value->meta as $key => $value)
					<td>{{$value->value}}</td>
				@endforeach
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection