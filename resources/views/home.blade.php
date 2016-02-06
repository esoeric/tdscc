@extends('layouts.app')

@section('content')
<div class="container-fluid spark-screen">
    
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Dashboard</h3></div>
               
                @if (Auth::user()->can('edit-projects'))
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Schedule</h4>
                            <div class="tds-box">
                                    Schedule is displayed here...
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-md-3">
                            <h4>Messages</h4>
                                <div class="tds-box">
                                    Messages go here...
                                </div>
                        </div>
                        <div class="col-md-3">
                            <h4>Tasks</h4>
                                <div class="tds-box">
                                    Tasks to do...
                                </div>
                        </div>
                        <div class="col-md-6">
                            <h4>Projects</h4>
                                <div class="tds-box">
                                    My projects...
                                </div>
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
</div>
@endsection
