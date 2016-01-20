@extends('layouts.app')

@section('content')
<div class="container-fluid spark-screen">
    <h1>All Users</h1> 
   	@foreach ($users as $user)
	    <a href="{{ URL::action('UsersController@show', $user->id) }}"><h3>{{ $user->name }}</h3></a>
	    {{ $user->email }}
	    <br>
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
