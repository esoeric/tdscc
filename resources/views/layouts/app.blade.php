<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TDS Portal</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/sweetalert.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#spark-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/images/logo.png" height="24px" />
                </a>
            </div>


                <!-- Left Side Of Navbar -->
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="spark-navbar-collapse">
      <ul class="nav navbar-nav">
            <li class="navbar-btn dropdown">
                <a class = "tds-inline dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false" data-hover="dropdown" data-delay="1000" data-close-others="true">
                    <button type="button" class="btn btn-primary btn-circle"><i class="glyphicon glyphicon-plus"></i></button>
                </a>

                <ul class="nav-button-drop dropdown-menu" role="menu">
                    <li><a href="{{ url('/projects/create') }}"><i class="fa fa-btn fa-plus"></i>Project</a></li>
                    <li><a href="{{ url('/clients/create') }}"><i class="fa fa-btn fa-user-plus"></i>Client</a></li>
                    <li><a href="{{ url('/addresses/create') }}"><i class="fa fa-btn fa-map-marker"></i>Address</a></li>
                </ul>
                           
                                
                            
            </li>





      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-hover="dropdown" data-delay="1000" data-close-others="true">Production <span class="caret"></span></a>
          <ul class="dropdown-menu">
          @foreach ($production as $project)
            <li><a href="{{ URL::action('ProjectsController@show', $project->id) }}">{{ $project->name }}</a></li>
          @endforeach   
          </ul>
        </li>      
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-hover="dropdown" data-delay="1000" data-close-others="true">Design <span class="caret"></span></a>
          <ul class="dropdown-menu">
          @foreach ($design as $project)
            <li><a href="{{ URL::action('ProjectsController@show', $project->id) }}">{{ $project->name }}</a></li>
          @endforeach   
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-hover="dropdown" data-delay="1000" data-close-others="true">Prospect <span class="caret"></span></a>
          <ul class="dropdown-menu">
          @foreach ($prospect as $project)
            <li><a href="{{ URL::action('ProjectsController@show', $project->id) }}">{{ $project->name }}</a></li>
          @endforeach   
          </ul>
        </li>
        <li>  
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="search-btn btn btn-default btn-circle"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </form>               
        </li>        
      </ul>

      
   



           
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
        


                                     



                                <!-- Authentication Links -->
                                @if (Auth::guest())
                                    <li><a href="{{ url('/login') }}">Login</a></li>
                                    <li><a href="{{ url('/register') }}">Register</a></li>
                                @else
                                    @if (Auth::user()->can('edit-projects'))
                                     <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" data-hover="dropdown" data-delay="1000" data-close-others="true">
                                            Admin <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{ url('/users') }}"><i class="fa fa-btn fa-users"></i>Users</a></li>
                                            <li><a href="{{ url('/Settings') }}"><i class="fa fa-btn fa-gear"></i>Settings</a></li>
                                        </ul>
                                    </li>
                                    @endif                                   
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" data-hover="dropdown" data-delay="1000" data-close-others="true">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                        </ul>
                                    </li>

                                @endif

                </ul>
            </div>
        </div>
    </nav>

 

    <!-- JavaScripts -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="/js/sweetalert-dev.js"></script> 
    <script src="/js/bootstrap-hover-dropdown.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
       @yield('content')
</body>
</html>
