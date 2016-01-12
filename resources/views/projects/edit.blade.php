@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <h1>Edit {!! $project->name !!}</h1>

{!! Form::model($project, ['method' => 'PATCH', 'action' => ['ProjectsController@update', $project->id]]) !!}
    
@include ('projects._form', ['submitButtonText' => 'Update Project'])
{!! Form::close() !!}
@endsection
</div>