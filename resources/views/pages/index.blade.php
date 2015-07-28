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

	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 header-logo">
					<br>
					<a href="index.html"><img src="img/bdalogo2.png" alt="" class="img-responsive logo"></a>
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
					        <li><a class="menu active" href="{{url('/index')}}"> home </a></li>
					        <li><a class="menu" href="{{url('/busfare')}}">bus fare</a></li>
					        <li><a class="menu" href="{{url('/busschedule')}}"> bus schedule </a></li>
					        <li><a class="menu" href="{{url('/contact')}}">contact us</a></li>
					        <li><a class="menu" href="{{url('/about')}}"> about us</a></li>
					      </ul>
					    </div> <!-- /navbar-collapse -->
					  </div> <!--  / .container-fluid -->
					 </nav>
				</div>
			</div>
		</div>
	 </header> <!-- end of header area-->

<!-- slider area-->
			<section class="slider" id="home">
			<div class="container-fluid">
					<div class="row" style="margin-top:50px">
						<div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
						<div class="header-backup"></div>
								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">

										<div class="item active">
											<img src="img/TLF2015.jpg" alt="">
												<div class="carousel-caption">
													<h1>providing</h1>
													<p>highquality service for locals & tourists</p>
													<button>learn more</button>
												</div>
										</div>

										<div class="item">
											<img src="img/TLF" alt="">
												<div class="carousel-caption">
													<h1>providing</h1>
													<p>highquality service for locals & tourists</p>
													<button>learn more</button>
												</div>
										</div>

										<div class="item">
											<img src="img/TLFGroup.jpg" alt="">
												<div class="carousel-caption">
													<h1>BermudaTransit</h1>
													<p>highquality service for locals & tourists</p>
													<button>learn more</button>
												</div>
										</div>
								</div>

								<!-- Controls -->
								<!-- <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
								</a> -->
						</div>

				</div>
			</div>
			</section><!-- end of slider section -->

		<hr/>

			<!-- about section -->
			<section class="about text-center" id="about">
				<div class="container">
					<div class="row" style="margin-top:0px">
						<h2>Bermuda Transit</h2>
						<h4>
							Bermuda Transit was developed by a group of interns as a month long project.
							The idea came about as in Bermuda our public transportation is not up to standard with majority of the world.
							The need for such application to solve issues for not just one group but for everyone in Bermuda to have an idea of location for public transport.

							The bus schedule in for Bermuda public transportation is not large at all as we only have a few stops and the size of the island.

							In Bermuda you are not allowed to pay cash notes on the bus. The public transportation operates by tickets, tokens, and passes which can be purchased for a period of time.

							Bermuda Transit was developed by a group of interns as a month long project
							The idea came about as in Bermuda our public transportation is not up to standard with majority of the world.
							The need for such application to solve issues for not just one group but for everyone in Bermuda to have an idea of location for public transport.

						</h4>

					</div>
				</div>
			</section><!-- end of about section -->


			<!-- service section starts here -->

			<!-- <section class="service text-center" id="service">
				<div class="container">
					<div class="row">
						<h2>How To Ride</h2>
						<h4>Bermuda Transit is Bermuda developed and deployed web application design, developed, and documented by a group of young IT Aspiring Bermudians</h4>

						<div class="col-md-3 col-sm-6">
							<div class="single-service">
								<div class="single-service-img">
									<div class="service-img">
										<img class="brain img-responsive" src="img/service2.png" alt="">
									</div>
								</div>
								<h3>Bus Stops</h3>
								<p>
									A bus stop is identified by a pink or blue pole which indicates the direction that the bus will be headed.
									Pink poles signify that the bus will be travelling into the City of Hamilton and blue poles signify that the bus will be travelling  out of the City of Hamilton.
								</p>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="single-service">
								<div class="single-service-img">
									<div class="service-img">
										<img class="knee img-responsive" src="img/service3.png" alt="">
									</div>
								</div>

								<h3>Bus Fares</h3>
							</div>
						</div>
					</div>
				</div>
			</section><!-- end of service section -->


			<!-- team section -->

			<section class="team" id="team">
				<div class="container">
					<div class="row">
						<div class="team-heading text-center">

							<h2>our team</h2>
							<h4>This is the team for the 2015 TLF Internship program over the summer. This application was developed by the students of the internship, with the assistance of TLF alumni.</h4>
						</div>

						<div class="col-md-2 single-member col-sm-4">
							<div class="person">
								<img class="img-responsive" src="img/TLF2015.jpg" alt="member-1">
							</div>
							<div class="person-detail">
								<div class="arrow-bottom"></div>
								<h3>Alexis Burgess</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
							</div>
						</div>


						<div class="col-md-2 single-member col-sm-4">
							<div class="person-detail">
								<div class="arrow-top"></div>
								<h3>Yuzaire Bean</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
							</div>
							<div class="person">
								<img class="img-responsive" src="img/TLF2015.jpg" alt="member-2">
							</div>
						</div>


						<div class="col-md-2 single-member col-sm-4">
							<div class="person">
								<img class="img-responsive" src="img/TLF2015.jpg" alt="member-3">
							</div>
							<div class="person-detail">
								<div class="arrow-bottom"></div>
								<h3>Charnae Richardson</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
							</div>
						</div>


						<div class="col-md-2 single-member col-sm-4">
							<div class="person-detail">
								<div class="arrow-top"></div>
								<h3>Chris Wellman</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
							</div>
							<div class="person">
								<img class="img-responsive" src="img/TLF2015.jpg" alt="member-4">
							</div>
						</div>


					</div>
				</div>
			</section><!-- end of team section -->

			<!-- map section -->
			<section class="api-map" id="contact">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 map" id="map"></div>
					</div>
				</div>
			</section><!-- end of map section -->

		<!--	how to ride section starts here -->
			 <section class="contact">
				<div class="container">
					<div class="row">
							<div class="contact-caption clearfix">
								<div class="contact-heading text-center">
									<h2>How To Ride</h2>
								</div>
							</div>
					</div>
					<h2> Poles </h2>
					<h3>
						A bus stop is identified by a pink or blue pole which indicates the direction that the bus will be headed.
						 Pink poles signify that the bus will be travelling into the City of Hamilton and blue poles signify that the bus will be travelling  out of the City of Hamilton.
					</h3>

					<hr/>

					<h2> Fare </h2>
					<h3>
					 If you would like to pay your fare by cash, please ensure that you have exact change before boarding the bus.
					 Dollar bills are not accepted. Place your fare directly into the fare-box as you enter the bus. Do not give your fare to the bus operator.
					 Bus operators do not make change for passengers, do not handle fares, and do not deposit money in the fare-box.
				 </h3>
				 <hr/>
				 <h2> Using Bus Transfers </h2>
				 <h3>

					 <p>

			       Before boarding a bus, be sure to read the front destination sign to ensure that you are travelling in the right direction and on the correct route.
			       You may need to change buses to get to your final destination. If you are traveling from Hamilton to St. David's you may have to change buses at the entrance to St. Davidís.

			     </p>

			     <p>

			       The destination sign on the side of the bus displays the second portion of work that the bus will complete.
			       If this is contrary to your final destination, you must ask for a transfer at the time of paying the fare.
			       A transfer is a small slip of paper that indicates the time the transfer is to be made, and the zone of the final destination.
			       It is used for a continuous journey and does not allow for a stop-over.
			       It will display a 15 minute timeframe in which you must catch your connecting bus.
			       If a transfer has expired, you will be required to pay the fare to your destination
			       unless you are travelling at a time when the buses are not travelling in 15 minute intervals.

			     </p>

				 </h3>



			 </div>
			</section><!-- end of how to ride section -->


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
