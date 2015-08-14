<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BermudaTransit</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/min.css">
	<link rel="stylesheet" href="css/all.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
</head>
<body>

	<!-- ==================================================== header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 header-logo">
					<br>
					<a href="/"><img src="img/bdatranlogo.png" alt="" class="img-responsive logo"></a>
				</div>

				 <div class="col-md-7">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

					      <ul class="nav navbar-nav navbar-right">

									<li><a class="menu" href="{{url('/')}}"> home </a></li>
					        <li><a class="menu" href="{{url('/busFare')}}">bus fare</a></li>
					        <li><a class="menu active" href="{{url('/busSchedule')}}"> Bus Schedule </a></li>
									<li><a class="menu" href="{{url('/howToride')}}"> how to ride </a></li>
					        <li><a class="menu" href="{{url('/contact')}}">contact us</a></li>
									<li><a class="menu" href="{{url('/alerts')}}">alerts</a></li>
					        <li><a class="menu" href="{{url('/about')}}"> about us</a></li>

					      </ul>
					    </div> <!-- /navbar-collapse -->
					  </div> <!--  / .container-fluid -->
					 </nav>
				</div>
			</div>
		</div>
	 </header>
<!-- end of header area-->

<div id="content" style="padding-top:200px" >
  <h1 style="text-align:center">Routes</h1>
<hr/>
  @foreach ($routes as $route)
    <div class="body" style="text-align:center">
      <h2>
        <a href="/timetable/{{$route->id}}">
          {{$route->number}}
          {{$route->name}}
        </a>
      </h2>


      <div class="body"> {{ $route->detail}} </div>

    </div>

  @endforeach
</div>

<!-- <div id="content" style="padding-top:200px" >
  <h1 style="text-align:center">Timetable</h1>
<hr/>
    <div class="body" style="text-align:center"> -->
      <!-- <h2>Timetable</h2> -->
      <!-- <h2>
        {{$route->number}}
        {{$route->name}}
      </h2>
      <p>Inbound is all traffic heading into central Hamilton </p>
      <p>Outbound is all traffic heading out of central Hamilton </p>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Weekday</th>
            <th>Direction</th>

            <th>Saturday</th>
            <th>Direction</th>

            <th>Sunday</th>
            <th>Direction</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>

</div> -->

  @section('footer')


  @stop
</html>
