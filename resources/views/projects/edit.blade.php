@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <h1>Edit {!! $project->name !!}</h1>

    {!! Form::model($project, ['method' => 'PATCH', 'action' => ['ProjectsController@update', $project->id]]) !!}
    <form method="PATCH" action="/projects/{!! $project->id !!}/update">
        {{ csrf_field() }}
    <div>
        <div class="col-md-8">
            <div class="form-group">

                {!! Form::label('name', 'Project Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}


            </div>
           
             <div class="form-group">

                {!! Form::label('description', 'Description:') !!}
                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}

            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('status_id', 'Status:') !!}
                {!! Form::select('status_id', array('1' => 'Production', '2' => 'Design', '3' => 'Prospect'), null, ['class' => 'form-control']) !!}
            </div>
       
            <div class="form-group">
                {!! Form::label('pdm_id', 'PDM:') !!}
                {!! Form::select('pdm_id', array('1' => 'Ben', '2' => 'Eric', '3' => 'Nancy', '4' => 'Sam'), null, ['class' => 'form-control']) !!}

            </div>
        
        
            <div class="form-group">
                {!! Form::label('projectlead_id', 'Project Lead:') !!}
                {!! Form::select('projectlead_id', array('1' => 'Brian', '2' => 'Jason', '3' => 'Sean', '4' => 'Shawn'), null, ['class' => 'form-control']) !!}

            </div>
        </div>
        
    <div class="col-md-12">
    <hr>
    </div>
    <div class="col-md-3">
            {!! Form::label('leadtype_id', 'Lead Type:') !!}
            {!! Form::select('leadtype_id', array('1' => 'Brian', '2' => 'Jason', '3' => 'Sean', '4' => 'Shawn'), null, ['class' => 'form-control']) !!}
    </div>
    <div class="col-md-3">
            {!! Form::label('leadtype_id', 'Lead Type:') !!}
            {!! Form::select('leadtype_id', array('1' => 'Brian', '2' => 'Jason', '3' => 'Sean', '4' => 'Shawn'), null, ['class' => 'form-control']) !!}
    </div>
    <div class="col-md-3">
            {!! Form::label('leadtype_id', 'Lead Type:') !!}
            {!! Form::select('leadtype_id', array('1' => 'Brian', '2' => 'Jason', '3' => 'Sean', '4' => 'Shawn'), null, ['class' => 'form-control']) !!}
    </div>
    <div class="col-md-3">
            {!! Form::label('leadtype_id', 'Lead Type:') !!}
            {!! Form::select('leadtype_id', array('1' => 'Brian', '2' => 'Jason', '3' => 'Sean', '4' => 'Shawn'), null, ['class' => 'form-control']) !!}
    </div>

    <div class="col-md-12">
    <br>
    <hr>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save Project</button>
        </div>

    </div>
    </form>
</div>
@endsection