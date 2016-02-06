@extends('layouts.app')

@section('content')


    <div class="container">
      <section id="data_section" class="todo">
        <ul class="todo-controls">
            <li>
                <button type="button" class="btn btn-primary btn-circle">
                <i class="glyphicon glyphicon-plus" onClick="show_form('add_task');"></i>
                </button>
            </li>
        </ul>
          <ul id="task_list" class="todo-list">
          @foreach($todos as $todo)
            @if($todo->status)
              <li id="{{$todo->id}}" class="done"><a href="#" class="toggle"></a><span id="span_{{$todo->id}}">{{$todo->title}}</span> <a href="#"onClick="delete_task('{{$todo->id}}');"class="icon-delete">Delete</a> <a href="#"onClick="edit_task('{{$todo->id}}','{{$todo->title}}');"class="icon-edit">Edit</a></li>
            @else
              <li id="{{$todo->id}}"><a href="#"onClick="task_done('{{$todo->id}}');"class="toggle"></a> <span id="span_{{$todo->id}}">{{$todo->title}}</span><a href="#" onClick="delete_task('{{$todo->id}}');" class="icon-delete">Delete</a>
                <a href="#" onClick="edit_task('{{$todo->id}}','{{$todo->title}}');"class="icon-edit">Edit</a></li>
            @endif
          @endforeach
        </ul>
      </section>
      <section id="form_section">
      
      <form id="add_task" class="todo" style="display:none">
      <input id="task_title" type="text" name="title"placeholder="Enter a task name" value=""/>
      <button name="submit">Add Task</button>
      </form>

        <form id="edit_task" class="todo"style="display:none">
        <input id="edit_task_id" type="hidden" value="" />
        <input id="edit_task_title" type="text"name="title" value="" />
        <button name="submit">Edit Task</button>
      </form>

    </section>
    
    </div>

   
@endsection
