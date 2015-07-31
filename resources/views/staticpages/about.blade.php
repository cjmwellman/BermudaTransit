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

                  <li><a class="menu" href="{{url('/index')}}"> home </a></li>
									<li><a class="menu" href="{{url('/busFare')}}">bus fare</a></li>
					        <li><a class="menu" href="{{url('/busSchedule')}}"> bus schedule </a></li>
									<li><a class="menu" href="{{url('/howToride')}}"> how to ride </a></li>
                  <li><a class="menu" href="{{url('/contact')}}"> contact us </a></li>
                  <li><a class="menu active" href="{{url('/about')}}"> about us </a></li>

                </ul>
              </div><!-- /navbar-collapse -->
            </div><!-- / .container-fluid -->
          </nav>
        </div>
      </div>
    </div>
  </header>
<!-- end of header area -->

<!-- about section -->
<section class="about text-center" id="about">
  <div class="container">
    <div class="row" style="margin-top:200px">
      <!-- <h2>about us</h2>
      <h4>Something about the TLF</h4> -->

      <!-- <img class="brain img-responsive" src="img/TLFGroup.jpg" alt="TLF 2015 Interns" style="position:center"> -->
      <div class="col-md-4 col-sm-6">
        <div class="single-about-detail clearfix">
          <div class="about-img">
            <img class="img-responsive" src="/img/TLF2015.jpg" alt="">
          </div>

          <div class="about-details">
            <div class="pentagon-text">
              <h1>T</h1>
            </div>

            <h3> Technology Leadership Forum </h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>


          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="single-about-detail">
          <div class="about-img">
            <img class="img-responsive" src="img/TLF20152.jpg" alt="Technology Leadership Forum 2015 Group">
          </div>

          <div class="about-details">
            <div class="pentagon-text">
              <h1>B</h1>
            </div>

            <h3> Bermuda Transit </h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>


          </div>
        </div>
      </div>


      <div class="col-md-4 col-sm-6">
        <div class="single-about-detail">
          <div class="about-img">
            <img class="img-responsive" src="img/TLF.jpg" alt="">
          </div>

          <div class="about-details">
            <div class="pentagon-text">
              <h1>M</h1>
            </div>

            <h3>TLF Board</h3>
            <p>
              Without the organisation and contiues review of the internship from the TLF Board, Alumni, and Sponsors.
              This program will not be able to be as successful as it is and give back to Bermuda, grow and get better each year.
              The TLF internship is a great opportunity for young aspiring IT individuals to get in.

            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of about section -->


<!-- service section starts here -->

<section class="service text-center" id="service">
  <div class="container" style="margin-top:100px">
    <div class="row">
      <h2>Technology Leadership Forum</h2>

			<h3>TLF (Technology Leadership Forum)</h3>
 			<h4>
						Founded in 2007, the TLF is a 12-13 week summer internship programme
						that provides college students, with a major in information technology (IT)
						and students interested in IT, the opportunity to learn and gain real world experience in the industry.
						This internship allows professionals a first hand look on the upcoming IT talent in Bermuda.
			</h4>
			<h4>
						The TLF allows students to build leadership and teamwork skills with
						a group project, which is  then presented at the end of the programme.
						Each member of the internship programme is provided with a work placement
						with a company based in Bermuda. Interns are also provided with a mentor to help guide and assist them throughout the programme.
						There is also training periods throughout the summer where IT professionals teach the students various areas of IT as well as soft skills.
			</h4>
			<h4>
					An annual networking event hosted by the TLF each summer provides a perfect
					opportunity for the interns and members of the public to mingle and learn
					about this dynamically changing environment.
			</h4>
			<h4>
					Overall, the TLF is a great opportunity for those students and graduates
					interested in IT to gain a great deal of experience & knowledge and position
					themselves in the right place in order gain a career in the world of IT.
			</h4>



    </div>
  </div>
</section><!-- end of service section -->


<!-- team section -->

<section class="team" id="team">
  <div class="container" >
    <div class="row" style="align:center">
      <div class="team-heading text-center">

        <h2>our team</h2>
        <h4>This is the team for the 2015 TLF Internship program over the summer. This application was developed by the students of the internship, with the assistance of TLF alumni.</h4>
      </div>

      <div class="col-md-2 single-member col-sm-4">
        <div class="person">
          <img class="img-responsive" src="img/TLFAB.jpg" alt="member-1">
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
          <img class="img-responsive" src="img/TLFYB.jpg" alt="member-2">
        </div>
      </div>


      <div class="col-md-2 single-member col-sm-4">
        <div class="person">
          <img class="img-responsive" src="img/TLFCR.jpg" alt="member-3">
        </div>
        <div class="person-detail">
          <div class="arrow-bottom"></div>
          <h3>Charnae Richardson</h3>
          <p>
							Entering her second year of the Computer Information Systems associates programme at the Bermuda College, Charnae has gained great knowledge being in the TLF Programme.
							Playing the project lead role, Charnae organized and conducted meetings. She also had to communicate with potential resources for the project and provide documentation and plans for the overall project.
 					</p>
        </div>
      </div>


      <div class="col-md-2 single-member col-sm-4">
        <div class="person-detail">
          <div class="arrow-top"></div>
          <h3>Chris Wellman</h3>
          <p>
						The lead developer of BermudaTransit also helped gather data and play a part in organization of the project.
						Completed a BSc in Computing. There has been a wealth of knowledge and experience that has come over the tenancy of the TLF Internship.
 					</p>
        </div>
        <div class="person">
          <img class="img-responsive" src="img/TLFCW.jpg" alt="member-4">
        </div>
      </div>


    </div>
  </div>
</section>
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

<!-- contact section starts here -->
 <!-- <section class="contact">
  <div class="container">
    <div class="row">



    </div>
  </div>
</section> -->
<!-- end of contact section -->


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
