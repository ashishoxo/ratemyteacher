@extends('layouts.main')
@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">
            All Students
        </h4>
        <p class="card-description">
            This list contains all the students of an institution
        </p>
        <table class="table table-striped">
            <thead>
                <tr>
                	<th>
                        Profile Picture
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Roll no
                    </th>
                    <th>
                        Actions
                    </th>
                    
                </tr>
            </thead>
            <tbody>
            	@foreach($users as $key => $value)
                <tr>
                    <td class="py-1">
                        <img src="../../images/faces-clipart/pic-1.png" alt="image">
                    </td>
                    <td>
                        {{$value->name}}
                    </td>
                    <td>
                        {{$value->username}}
                    </td>
                    <td>
                        <a type="button" class="btn btn-secondary btn-fw" href=""><i class="mdi mdi-cloud-download"></i>Edit</a>
                        <a type="button" class="btn btn-danger btn-fw"><i class="mdi mdi-cloud-download"></i>Delete</a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
	
@endsection