@extends('layouts.app')

@section('content')
<div class="container-fluid spark-screen">
    <h1>All Projects</h1> 
    @foreach ($projects as $project)
    <a href="{{ URL::action('ProjectsController@show', $project->id) }}"><h3>{{ $project->name }}</h3></a>
    
@endforeach  
</div>

   
@endsection
