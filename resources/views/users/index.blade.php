@extends('layouts.app')

@section('content')
<div class="container-fluid spark-screen">
    <h1>All Users</h1> 
   	@foreach ($users as $user)
	    <a href="{{ URL::action('UsersController@show', $user->id) }}"><h3>{{ $user->f_name }} {{ $user->l_name }}</h3></a>
	    {{ $user->email }}
	    <br>
	    ROLE:
	    @if ($user->is('admin'))
	    	Admin <br>
	    @elseif ($user->is('client'))
	    	Client <br>
	    @elseif ($user->is('vendor'))
	    	Subcontractor<br>
	    @elseif ($user->is('employee'))
	    	Employee<br>
	    @else
	    	None<br>
	    @endif
	    ABILITIES:
	    <?php
	  

	    $abilities = $user->getAbilities();
	    ?>
	 	@foreach ($abilities as $ability)  
	 	{{ $ability->name }} 
	 	<br> 
		@endforeach  
	@endforeach 
</div>

   
@endsection
