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
					<a href="index.html"><img src="/img/bdatranlogo.png" alt="" class="img-responsive logo"></a>
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
									<li><a class="menu " href="{{url('/index')}}"> home </a></li>
                  <li><a class="menu" href="{{url('/busfare')}}"> bus fare </a></li>
                  <li><a class="menu active" href="{{url('/busschedule')}}"> bus schedule </a></li>
                  <li><a class="menu" href="{{url('/contact')}}"> contact </a></li>
                  <li><a class="menu" href="{{url('/about')}}"> about </a></li>

					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->




			<section class="slider" id="home">
			<div class="container-fluid">
					<div class="row">


					</div>
				</div>
			</section><!-- end of slider section -->


			<!-- about section -->
			<section class="about text-center" id="about">
				<div class="container">
					<div class="row">
						<h2>Bermuda Transit</h2>
						<h4>
							Bermuda Transit was developed by a group of interns as a month long project.
							The idea came about as in Bermuda our public transportation is not up to standard with majority of the world.
							The need for such application to solve issues for not just one group but for everyone in Bermuda to have an idea of location for public transport.
						</h4>


					</div>
				</div>
			</section><!-- end of about section -->


			<!-- service section starts here -->

			<section class="service text-center" id="service">
				<div class="container">
					<div class="row">
						<h2>Bus Schedule</h2>

            <table border="1", style="width:100%">
  <thead><tr><th title="Field #1">Route 11: Hamilton - St. George&#39;s</th>


  <th title="Field #5">FIELD5</th>
  <th title="Field #6">FIELD6</th>
  <th title="Field #7">FIELD7</th>
  <th title="Field #8">FIELD8</th>
  <th title="Field #9">FIELD9</th>
  <th title="Field #10">FIELD10</th>
  <th title="Field #11">FIELD11</th>
  <th title="Field #12">FIELD12</th>
  </tr></thead>
  <tbody><tr><td> Via Blackwatch Pass, Aquarium and Blue Hole Hill Roundabout</td>
  <!-- <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td> -->
  </tr>
  <tr><td>Monday to Friday</td>
  <!-- <td> </td>
  <td> </td>
  <td> </td> -->
  <td>Saturday</td>
  <td> </td>
  <td> </td>
  <td>Sunday &amp; Holidays</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>Leave Hamilton</td>
  <td> </td>
  <td>Leave St. George&#39;s</td>
  <td> </td>
  <td>Leave Hamilton</td>
  <td> </td>
  <td>Leave St. George&#39;s</td>
  <td>Leave Hamilton</td>
  <td>Leave St.George&#39;s</td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>6:45AM</td>
  <td> </td>
  <td>6:45AM</td>
  <td> </td>
  <td>6:45AM</td>
  <td> </td>
  <td>6:45AM</td>
  <td>7:45AM</td>
  <td>7:45AM</td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>7:45</td>
  <td> </td>
  <td>7:00</td>
  <td> </td>
  <td>7:45</td>
  <td> </td>
  <td>7:45</td>
  <td>8:45</td>
  <td>8:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>8:00</td>
  <td> </td>
  <td>7:30</td>
  <td> </td>
  <td>8:30</td>
  <td> </td>
  <td>8:30</td>
  <td>9:45</td>
  <td>9:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>8:45</td>
  <td> </td>
  <td>7:45</td>
  <td> </td>
  <td>8:45</td>
  <td> </td>
  <td>8:45</td>
  <td>10:45</td>
  <td>10:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>9:00</td>
  <td> </td>
  <td>8:00-xp</td>
  <td> </td>
  <td>9:00</td>
  <td> </td>
  <td>9:00</td>
  <td>11:45</td>
  <td>11:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>9:45</td>
  <td> </td>
  <td>8:30</td>
  <td> </td>
  <td>9:15</td>
  <td> </td>
  <td>9:15</td>
  <td>12:45PM</td>
  <td>12:45PM</td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>10:00</td>
  <td> </td>
  <td>8:45</td>
  <td> </td>
  <td>9:30</td>
  <td> </td>
  <td>9:30</td>
  <td>1:45</td>
  <td>1:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>10:15</td>
  <td> </td>
  <td>9:00</td>
  <td> </td>
  <td>9:45</td>
  <td> </td>
  <td>9:45</td>
  <td>2:45</td>
  <td>2:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>10:30</td>
  <td> </td>
  <td>9:15</td>
  <td> </td>
  <td>10:00</td>
  <td> </td>
  <td>10:00</td>
  <td>3:45</td>
  <td>3:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>10:45</td>
  <td> </td>
  <td>9:30</td>
  <td> </td>
  <td>10:15</td>
  <td> </td>
  <td>10:15</td>
  <td>4:45</td>
  <td>4:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>11:00</td>
  <td> </td>
  <td>9:45</td>
  <td> </td>
  <td>10:30</td>
  <td> </td>
  <td>10:30</td>
  <td>5:45</td>
  <td>5:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>11:15</td>
  <td> </td>
  <td>10:00</td>
  <td> </td>
  <td>10:45</td>
  <td> </td>
  <td>10:45</td>
  <td>6:45</td>
  <td>6:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>11:30</td>
  <td> </td>
  <td>10:15</td>
  <td> </td>
  <td>11:00</td>
  <td> </td>
  <td>11:00</td>
  <td>7:45</td>
  <td>7:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>11:45</td>
  <td> </td>
  <td>10:30</td>
  <td> </td>
  <td>11:15</td>
  <td> </td>
  <td>11:15</td>
  <td>8:45</td>
  <td>8:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>12:00PM</td>
  <td> </td>
  <td>10:45</td>
  <td> </td>
  <td>11:30</td>
  <td> </td>
  <td>11:30</td>
  <td>9:45</td>
  <td>9:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>12:30</td>
  <td> </td>
  <td>11:00</td>
  <td> </td>
  <td>11:45</td>
  <td> </td>
  <td>11:45</td>
  <td>10:45</td>
  <td>10:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>12:45</td>
  <td> </td>
  <td>11:15</td>
  <td> </td>
  <td>12:00PM</td>
  <td> </td>
  <td>12:00PM</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>1:00</td>
  <td> </td>
  <td>11:30</td>
  <td> </td>
  <td>12:30</td>
  <td> </td>
  <td>12:30</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>1:15</td>
  <td> </td>
  <td>11:45</td>
  <td> </td>
  <td>12:45</td>
  <td> </td>
  <td>12:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>1:30</td>
  <td> </td>
  <td>12:00PM</td>
  <td> </td>
  <td>1:00</td>
  <td> </td>
  <td>1:00</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>1:45</td>
  <td> </td>
  <td>12:30</td>
  <td> </td>
  <td>1:30</td>
  <td> </td>
  <td>1:30</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>2:00</td>
  <td> </td>
  <td>12:45</td>
  <td> </td>
  <td>1:45</td>
  <td> </td>
  <td>1:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>2:15</td>
  <td> </td>
  <td>1:00</td>
  <td> </td>
  <td>2:00</td>
  <td> </td>
  <td>2:00</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>2:30</td>
  <td> </td>
  <td>1:30</td>
  <td> </td>
  <td>2:30</td>
  <td> </td>
  <td>2:30</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>2:45</td>
  <td> </td>
  <td>1:45</td>
  <td> </td>
  <td>2:45</td>
  <td> </td>
  <td>2:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>3:00</td>
  <td> </td>
  <td>2:00</td>
  <td> </td>
  <td>3:00</td>
  <td> </td>
  <td>3:00</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>3:15</td>
  <td> </td>
  <td>2:30-br</td>
  <td> </td>
  <td>3:30</td>
  <td> </td>
  <td>3:30</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>3:30</td>
  <td> </td>
  <td>2:45-br</td>
  <td> </td>
  <td>3:45</td>
  <td> </td>
  <td>3:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>3:45</td>
  <td> </td>
  <td>3:00</td>
  <td> </td>
  <td>4:00</td>
  <td> </td>
  <td>4:00</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>4:00</td>
  <td> </td>
  <td>3:30</td>
  <td> </td>
  <td>4:30</td>
  <td> </td>
  <td>4:30</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>4:25</td>
  <td> </td>
  <td>4:00</td>
  <td> </td>
  <td>4:45</td>
  <td> </td>
  <td>4:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>4:35</td>
  <td> </td>
  <td>4:30</td>
  <td> </td>
  <td>5:00</td>
  <td> </td>
  <td>5:00</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>4:45</td>
  <td> </td>
  <td>5:00</td>
  <td> </td>
  <td>5:10</td>
  <td> </td>
  <td>5:30</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>4:55</td>
  <td> </td>
  <td>5:30</td>
  <td> </td>
  <td>5:30</td>
  <td> </td>
  <td>5:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>5:05</td>
  <td> </td>
  <td>5:45</td>
  <td> </td>
  <td>5:45</td>
  <td> </td>
  <td>6:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>5:10-xp</td>
  <td> </td>
  <td>6:45</td>
  <td> </td>
  <td>6:45</td>
  <td> </td>
  <td>7:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>5:25-sd</td>
  <td> </td>
  <td>7:45</td>
  <td> </td>
  <td>7:45</td>
  <td> </td>
  <td>8:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>5:35</td>
  <td> </td>
  <td>8:45</td>
  <td> </td>
  <td>8:45</td>
  <td> </td>
  <td>9:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>5:45</td>
  <td> </td>
  <td>9:45</td>
  <td> </td>
  <td>9:45</td>
  <td> </td>
  <td>10:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>6:45</td>
  <td> </td>
  <td>10:45</td>
  <td> </td>
  <td>11:45</td>
  <td> </td>
  <td>11:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>7:45</td>
  <td> </td>
  <td>11:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>8:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>9:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>10:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>
  <tr><td>11:45</td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  <td> </td>
  </tr>


  </tbody>
</table>

  <p>
    <h3> Legend </h3>
    <li>
      <ul>sd - Trip operates direct from Hamilton to St. Davids; then continues to St. George&#39;s</ul>
      <ul>br - Trip operates via Berkely Road school route; does not serve blackwatch Pass or Tennis Stadium</ul>
      <ul>xp - Trip operates express between Shelly Bay Plaza and Hamilton </ul>
    </li>
  </p>

    <h3> Average Running Times </h3>
  <p>
      After 7:00PM, the average running time between Hamilton and St. George&#39;s terminal is 5-8 minutes less
  </p>
  <hr/>
  <p>
    From Hamilton to: Aquarium - 20 mins, Blue Hole - 30 mins, Southside - 38 mins , St.Georges - 50 mins.
  </p>
  <hr/>
  <p>
    From St.Georges to: St.Georges - 4 mins, Southside - 12 mins, Blue Hole Hill - 20 mins, Aquarium - 30 mins, Hamilton - 50 mins.
  </p>





					</div>
				</div>
			</section><!-- end of service section -->


			<!-- team section -->

			<!-- <section class="team" id="team">
				<div class="container">
				      <img src="/TLF2015.jpg" alt="Logo">
				</div> -->
			<!-- </section><!-- end of team section -->

			<!-- map section -->
			<section class="api-map" id="contact">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 map" id="map"></div>
					</div>
				</div>
			</section><!-- end of map section -->

			<!-- contact section starts here -->
			<section class="contact">
				<div class="container">
					<div class="row">
							<div class="contact-caption clearfix">
								<div class="contact-heading text-center">
									<h2>contact us</h2>
								</div>

								<div class="col-md-5 contact-info text-left">
									<h3>contact information</h3>
									<div class="info-detail">
										<ul><li><i class="fa fa-calendar"></i><span>Monday - Friday:</span> 9:30 AM to 6:30 PM</li></ul>
										<ul><li><i class="fa fa-map-marker"></i><span>Address:</span> 123 Some Street , Hamilton, BDA, HM 123</li></ul>
										<ul><li><i class="fa fa-phone"></i><span>Phone:</span> (441) 987-1235</li></ul>
										<ul><li><i class="fa fa-fax"></i><span>Fax:</span> (441) 984-1234</li></ul>
										<ul><li><i class="fa fa-envelope"></i><span>Email:</span> info@tlfbdatransit.com</li></ul>
									</div>
								</div>





								<div class="col-md-6 col-md-offset-1 contact-form">
									<h3>leave us a message</h3>

									<form class="form">
										<input class="name" type="text" placeholder="Name">
										<input class="email" type="email" placeholder="Email">
										<input class="phone" type="text" placeholder="Phone No:">
										<textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
										<input class="submit-btn" type="submit" value="SUBMIT">
									</form>
								</div>

							</div>
					</div>
				</div>
			</section><!-- end of contact section -->


			<!-- footer starts here -->
			<footer class="footer clearfix">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 footer-para">
							<p>&copy;TLF Internship & BDApp Innovations</p>
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
