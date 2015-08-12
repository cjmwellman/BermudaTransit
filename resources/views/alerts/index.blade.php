<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BermudaTransit - Responsive HTML Template</title>
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
					<a href="/"><img src="img/bdatranlogo.png" alt="BDATransit" class="img-responsive logo"></a>
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
					        <li><a class="menu" href="{{url('/busSchedule')}}"> Bus Schedule </a></li>
									<li><a class="menu" href="{{url('/howToride')}}"> how to ride </a></li>
					        <li><a class="menu" href="{{url('/contact')}}">contact us</a></li>
									<li><a class="menu active" href="{{url('/alerts')}}">alerts</a></li>
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

<!-- slider area-->
<section class="slider" id="home">
  <div class="container-fluid">
		<div class="row" style="margin-top:50px">
			<div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
			     <div class="header-backup"></div>
							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">

									<div class="item active">
										<img src="img/banner4.jpg" alt="BermudaTransit">
											<div class="carousel-caption">
												<h1>Alerts</h1>
												<p>Disruptions to Service</p>
											</div>
									</div>
						  </div>
			</div>
		</div>
</section>
<!-- end of slider section -->

<!-- about section -->
<section class="alert text-center" id="about">
  <div class="alert">
      <div class="row" style="margin-top:0px">
        <h1>Alerts</h1>
        <h2>
          <a href="{{url('/alerts/create')}}">Create New Alert </a>
        </h2>
        <hr/>

        @foreach ($alerts as $alert)
        <alert>
          <h2>
            <a href="{{url('/alerts',$alert->id)}}">{{$alert->title}} </a>
          </h2>

          <div class="body"> {{ $alert->body}} </div>
        </alert>

        @endforeach

      </div>
    </div>
</section>
<!-- end of about section -->

<!-- footer starts here -->
<footer class="footer clearfix">
  <div class="container">
    <div class="row">
      <div class="col-xs-6 footer-para">
        <p>&copy;2015 TLF Internship & BDApp Innovations</p>
      </div>

      <div class="col-xs-6 text-right">
        <a href=""><i class="fa fa-facebook"></i></a>
        <a href=""><i class="fa fa-twitter"></i></a>
        <a href=""><i class="fa fa-skype"></i></a>
      </div>
    </div>
  </div>
</footer>
