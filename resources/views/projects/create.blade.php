@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <h1>New Project</h1>
    <form method="POST" action="/projects">
{!! Form::model(['method' => 'POST', 'action' => ['ProjectsController@create']]) !!}
    
@include ('projects._form', ['submitButtonText' => 'Add Project'])
{!! Form::close() !!}
</div>
@endsection