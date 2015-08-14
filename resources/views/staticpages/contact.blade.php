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
  <header class="top-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-5 header-logo">
          <br>
          <a href="/">
						<img src="/img/bdatranlogo.png" alt="BDATransit" class="img-responsive logo">
					</a>
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
					        <li><a class="menu active" href="{{url('/contact')}}">contact us</a></li>
									<li><a class="menu" href="{{url('/alerts')}}">alerts</a></li>
					        <li><a class="menu" href="{{url('/about')}}"> about us</a></li>

                </ul>
              </div><!-- /navbar-collapse -->
            </div><!-- / .container-fluid -->
          </nav>
        </div>
      </div>
    </div>
  </header> <!-- end of header area -->
  <!-- Collect the nav links, forms, and other content for toggling -->


<!-- about section -->
<section class="about text-center" id="about">


  <div class="container">
    <div class="row" style="margin-top:175px">
      <h2>contact us</h2>
      <h4>If you wish to contact BermudaTransit, please complete the form below</h4>

    </div>
  </div>
</section><!-- end of about section -->


<!-- service section starts here -->

<!-- <section class="service text-center" id="service">
  <div class="container">
    <div class="row">

    </div>
  </div>
</section> -->
<!-- end of service section -->


<!-- team section -->

<!-- <section class="team" id="team">
  <div class="container" >
    <div class="row" >
      <div class="team-heading text-center" >

    </div>
  </div>
</section> -->

<!-- end of team section -->

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
            <!-- <h2>contact us</h2> -->
          </div>

          <div class="col-md-5 contact-info text-left">
            <h3>contact information</h3>
            <div class="info-detail">
              <ul><li><i class="fa fa-calendar"></i><span>Monday - Friday:</span> 9:30 AM to 6:30 PM</li></ul>
              <ul><li><i class="fa fa-map-marker"></i><span>Address:</span> 123 Some Street , Hamilton, Bermuda, HM 123</li></ul>
              <ul><li><i class="fa fa-phone"></i><span>Phone:</span> (032) 987-1235</li></ul>
              <ul><li><i class="fa fa-fax"></i><span>Fax:</span> (123) 984-1234</li></ul>
              <ul><li><i class="fa fa-envelope"></i><span>Email:</span> info@doctor.com</li></ul>
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
