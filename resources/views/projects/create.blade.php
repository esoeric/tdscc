@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <h1>New Project</h1>
    <form method="POST" action="/projects">
        {{ csrf_field() }}
    <div>
        <div class="col-md-8">
            <div class="form-group">
                <label for="name">Project Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
            </div>
           
             <div class="form-group">
                <label for="name">Description:</label>
                <textarea type="text" name="description" id="descrition" class="form-control" rows="10">
                    {{ old('description') }}
                </textarea>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="status_id">Status:</label><br>
                <select name="status_id" id="status_id"  class="form-control" >
                    <option value="1">Production</option>
                    <option value="2">Design</option>
                    <option value="3">Prospect</option>
                </select>
            </div>
       
        
            <div class="form-group">
                <label for="pdm_id">PDM:</label><br>
                <select name="pdm_id" id="pdm_id"  class="form-control" >
                    <option value="1">Ben</option>
                    <option value="2">Eric</option>
                    <option value="3">Nancy</option>
                    <option value="3">Sam</option>
                </select>
            </div>
        
        
            <div class="form-group">
                <label for="projectlead_id">Project Lead:</label><br>
                <select name="projectlead_id" id="projectlead_id"  class="form-control" >
                    <option value="1">Brian</option>
                    <option value="2">Sean</option>
                    <option value="3">Shawn</option>
                </select>
            </div>
        </div>
    <div class="col-md-12">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save Project</button>
        </div>
    </div>
    </form>
</div>
@endsection