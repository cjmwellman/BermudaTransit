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
					<a href="index.html"><img src="img/bdatranlogo.png" alt="" class="img-responsive logo"></a>
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

									<li><a class="menu active" href="{{url('/')}}"> home </a></li>
					        <li><a class="menu" href="{{url('/busFare')}}">bus fare</a></li>
					        <li><a class="menu" href="{{url('/busSchedule')}}"> Bus Schedule </a></li>
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
													<h1>providing</h1>
													<p>highquality service for locals & tourists</p>
												</div>
										</div>

										<!-- <div class="item">
											<img src="img/TLF.jpg" alt="">
												<div class="carousel-caption">
													<h1>providing</h1>
													<p>highquality service for locals & tourists</p>
												</div>
										</div> -->

										<!-- <div class="item">
											<img src="img/TLFGroup.jpg" alt="">
												<div class="carousel-caption">
													<h1>BermudaTransit</h1>
													<p>highquality service for locals & tourists</p>
												</div>
										</div>
								</div> -->

						</div>
				</div>
			</div>
			</section>
			<!-- end of slider section -->

		<!-- advertisement section -->
		<hr/>

		<div id = "contentright" style = "center">

			<a class="menu" href="http://www.act.bm" target="_blank">
			<img src="img/act_logo.jpg" alt="ACT" style="padding:32px">
			</a>

			<a class="menu" href="http://www.bhb.bm" target="_blank">
			<img src="img/bhb.jpg" alt="BHB" style="padding:32px">
			</a>

			<a class="menu" href="http://www.ccs.bm" target="_blank">
			<img src="img/ccs.jpg" alt="CCS" style="padding:32px">
			</a>

			<a class="menu" href="http://www.logic.bm" target="_blank">
			<img src="img/logic.jpg" alt="Logic" style="padding:32px">
			</a>

			<a class="menu" href="http://www.nova.bm" target="_blank">
			<img src="img/nova.jpg" alt="Nova" style="padding:32px">
			</a>

			<hr/>

		</div>

		<!-- end of advertisement section -->

			<!-- about section -->
			<section class="about text-center" id="about">
				<div class="container">
					<div class="row" style="margin-top:0px">
						<h2>Bermuda Transit</h2>
						<h4>

							BermudaTransit was developed by a group of interns as a month long project.
							The idea came about due to the lack of modern technology in Bermuda.
							Our public transportation is not at a quality standard and it is failing to keep up with the majority of the world.
							There is a need for such application to solve daily issues, not for just one group but for locals and visitors in Bermuda to have an idea of location for public transport.
							This website allows user an ETA of the bus, location of bus stops and information about cancellations and delays.

						</h4>

					</div>
				</div>
			</section>
			<!-- end of about section -->


			<!-- service section starts here -->

			<section class="service text-center" id="service">
				<div class="container">
					<div class="row">
						<h2>Mission Statement</h2>
						<h4>
							To provide exceptional information about Bermudas Public Transportation, regarding schedules, ETAs, and alerts.
							Created by Technology Leadership Forum interns as a team project, Bermuda Transit is only in the beginning stages with plenty of exceptional ideas to enhance our future services.
						</h4>
				</div>
			</section>
			<!-- end of service section -->


			<!-- team section -->


			<!-- end of team section -->

			<!-- map section -->
			<!-- <section class="api-map" id="contact">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 map" id="map"></div>
					</div>
				</div>
			</section> -->
			<!-- end of map section -->

		<!--	how to ride section starts here -->

		<div id = "banner">

		</div>

		<!-- end of how to ride section -->


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





	<!-- script tags
	============================================================= -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>

</body>
</html>
