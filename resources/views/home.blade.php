@extends('layouts.app')

@section('content')
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Dashboard</h3></div>
                @if (Auth::user()->can('edit-projects'))
                <div class="panel-body">
                    You are an Admin!
                </div>
                @else
                <div class="panel-body">
                    You are just a user!
                </div>
                @endif
                
            </div>
        </div>
    </div>
</div>
@endsection
