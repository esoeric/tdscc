@extends('layouts.app')

@section('content')

<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
	                <h3>
		    			@if (Auth::user()->can('edit-projects'))
		    				<a href="{{ URL::action('ProjectsController@edit', $project->id) }}"><span class="fa fa-pencil-square-o"></span></a>
		    			@endif
		                {{ $project->name }}
	    			</h3>
    			</div>
                
                <div class="panel-body">
                    {{ $project->description }}
                </div>

                
            </div>
        </div>
    </div>
</div>
   
@endsection
