@extends('layouts.student')
@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">
            All Teachers
        </h4>
        <p class="card-description">
            This list contains all the teachers of an institution
        </p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>
                        Profile Photo
                    </th>
                    <th>
                        Teacher's Name
                    </th>
                    <th>
                        Department
                    </th>
                    {{-- <th>
                        Registered On
                    </th> --}}
                    <th>
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
            	@foreach($model as $teacher)
                <tr>
                    <td class="py-1">
                        <img src="../../images/faces-clipart/pic-1.png" alt="image">
                    </td>
                    <td>
                        {{$teacher->name}}
                    </td>
                    <td>
                        {{$teacher->department_rel->name}}
                    </td>
                    {{-- <td>
                        23 days ago
                    </td> --}}
                    <td>
                        <a type="button" class="btn btn-secondary btn-fw" href="{{route('rate.teacher',[$teacher->id])}}"><i class="mdi mdi-cloud-download"></i>Rate</a>
                        
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
	
@endsection