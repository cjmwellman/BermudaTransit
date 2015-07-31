
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
									<li><a class="menu" href="{{url('/index')}}"> home </a></li>
                  <li><a class="menu active" href="{{url('/busFare')}}">bus fare</a></li>
					        <li><a class="menu" href="{{url('/busSchedule')}}"> bus schedule </a></li>
                  <li><a class="menu" href="{{url('/howToride')}}"> how to ride </a></li>
                  <li><a class="menu" href="{{url('/contact')}}"> contact us </a></li>
                  <li><a class="menu" href="{{url('/about')}}"> about us </a></li>

					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header>
  <!-- end of header area -->



  <!-- begin of slider section -->
			<section class="slider" id="home">
			<div class="container-fluid">
					<div class="row">


					</div>
				</div>
			</section>
  <!-- end of slider section -->


			<!-- about section -->
			<section class="about text-center" id="about">
				<div class="container" style="margin-top:110px">
					<div class="row">
						<h2> Fares </h2>
					</div>

          <table style="width :80%">
            <th>
              <h1> Fare Category  </h1>
            </th>
            <th>
              <h1> 3 Zone </h1>
            </th>
            <th>
              <h1> 14 Zone </h1>
            </th>
              <tr>
                <td>Adult</td>
              </tr>
              <tr>
                <td>Cash (Exact change only/ coins only)</td>
                <td> $3.50 </td>
                <td> $5.00 </td>
              </tr>
              <tr>
                <td>Tokens</td>
                <td> $2.75 </td>
                <td> $4.50 </td>
              </tr>
              <tr>
                <td>
                  Tickets (Booklets of 15. It is unlawful to buy or sell individual tickets)
                </td>
                <td> $25.00 </td>
                <td> $37.50 </td>
              </tr>
              <tr>
                <td>1-Day Transportation Pass (All Zones)</td>
                <td> </td>
                <td> $19.00 </td>
              </tr>
              <tr>
                <td>2-Day Transportation Pass (All Zones)</td>
                <td> </td>
                <td> $31.50 </td>
              </tr>
              <tr>
                <td>3-Day Transportation Pass (All Zones)</td>
                <td> </td>
                <td> $44.00 </td>
              </tr>
              <tr>
                <td>4-Day Transportation Pass (All Zones)</td>
                <td> </td>
                <td> $48.50</td>
              </tr>
              <tr>
                <td>7-Day Transportation Pass (All Zones)</td>
                <td> </td>
                <td> $62.00 </td>
              </tr>
              <tr>
                <td>Monthly Pass (All Zones)</td>
                <td> </td>
                <td> $69.00 </td>
              </tr>
              <tr>
                <td>3-Month Pass (All Zones)</td>
                <td> </td>
                <td> $169.00 </td>
              </tr>


            <th>
              <h1>STUDENT-CHILD</h1>
            </th>
              <tr>
                <td>Cash Age 5-16 (Exact change only/coins only/All Zones)</td>
                <td> </td>
                <td> $2.75 </td>
              </tr>
              <tr>
                <td>Tickets (Booklets of 15. It is unlawful to buy or sell individual tickets)</td>
                <td> </td>
                <td> $9.50 </td>
              </tr>
              <tr>
                <td>Visitor 1-Day Transportation Pass (All Zones)</td>
                <td> </td>
                <td> $9.50 </td>
              </tr>
              <tr>
                <td>Visitor 2-Day Transportation Pass (All Zones)</td>
                <td> </td>
                <td> $16.00 </td>
              </tr>
              <tr>
                <td>Visitor 3-Day Transportation Pass (All Zones)</td>
                <td> </td>
                <td> $22.00 </td>
              </tr>
              <tr>
                <td>Visitor 4-Day Transportation Pass (All Zones)</td>
                <td> </td>
                <td> $24.50 </td>
              </tr>
              <tr>
                <td>Visitor 7-Day Transportation Pass (All Zones)</td>
                <td> </td>
                <td> $31.00 </td>
              </tr>
              <tr>
                <td>Children under the age of 5 (All Zones)</td>
                <td> </td>
                <td> FREE </td>
              </tr>
              <tr>
                <td>Bermuda Senior Citizen With Special Person’s Card (All Zones)</td>
                <td> </td>
                <td> FREE </td>
              </tr>
          </table>
				</div>
						</div>

					</div>
				</div>
			</section>
      <!-- end of about section -->


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
			</section>
      <!-- end of service section -->



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
			 <!-- <section class="contact">
				<div class="container">
					<div class="row">
							<div class="contact-caption clearfix">
								<div class="contact-heading text-center">
                  <h2>How To Ride</h2>
								</div>
							</div>
					</div> -->
					<!-- <h2> Get Tickets, Tokens, Passes  </h2>
					<h3>
            Tickets, tokens and transportation passes are available from the Hubert Winfield (Sparky) Lightbourne Central Bus Terminal on Washington Street in Hamilton.
            Tokens and transportation passes are also available at the Ferry Terminal in Hamilton, the Visitors’ Information Centres, many hotels and guest houses. Tickets, school passes and adult passes are available at many post offices.
            Tickets are sold in booklets of 15 only. Any sale or purchase of individual tickets is unlawful.

					</h3>

					<h2> Exact Change </h2>
					<h3>
            If you intend to pay your fare by cash, please ensure that you have exact change before boarding the bus.
            Dollar bills will not be accepted. Place your fare directly into the fare-box as you enter the bus.
            Do not give your fare to the bus operator. Bus operators do not make change for passengers, do not handle fares, and do not deposit money in the fare-box.

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

        </h3> -->
<!--
			 </div>
			</section> -->
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
