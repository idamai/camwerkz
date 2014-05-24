<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

	    <title>Navbar Template for Bootstrap</title>

	    <!-- Bootstrap core CSS -->
	    <link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/carousel.css" rel="stylesheet">		
		<link href="css/fixes.css" rel="stylesheet">
		<link href="css/landing-page.css" rel="stylesheet">
		<link href="css/badger.css" rel="stylesheet">
		

	    <!-- Just for debugging purposes. Don't actually copy this line! -->
	    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	  	<style type="text/css">
			@font-face {
			    font-family: "ClearSansBold";
			    src: url(fonts/TTF/ClearSans-Bold.ttf) format("truetype");
			}
			@font-face {
			    font-family: "ClearSansLight";
			    src: url(fonts/TTF/ClearSans-Light.ttf) format("truetype");
			}
			.ClearSansBold {
				 font-family: "ClearSansBold", Verdana, Tahoma;
			}
			.ClearSansLight {
				 font-family: "ClearSansLight", Verdana, Tahoma;
			}
	  	</style>
	</head>

  <body style="background: #f6f6f6;">
  	<div class="navbar navbar-default" role="navigation" style="border-radius: 0px;">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><img src="img/logo.png" style="width:120px;"/></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" style="color: white;">Your work is our focus. Contact us at <strong>+65 90406463</strong>.</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="intro-header" style="margin-top: -20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <div class="row">
						<div class="col-lg-6 col-lg-offset-1" style="margin-top: 100px;">
							<h1 style="color: white; text-shadow: black 0.1em 0.1em 0.2em;" class="ClearSansBold">Marketing Message</h1>
							<h4 style="color: white; text-shadow: black 0.1em 0.1em 0.2em;" class="ClearSansLight">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
						</div>
						<div class="col-lg-4 col-lg-offset-1" id="form_1">
							<div class="well" style="border: 0px solid #394e65;">
					            <form method="POST" action="http://getfloorspace.com/users" accept-charset="UTF-8">
					            	<div class="form-group">
					                	<input type="text" class="form-control" id="name" name="name" placeholder="Name">
					              	</div>
					              	<div class="form-group">
					                	<input type="text" class="form-control" id="number" name="number" placeholder="Number">
					              	</div>
					              	<div class="form-group">
					                	<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message" style="resize: none;"></textarea>
					              	</div>
					              
					              <button type="submit" class="btn btn-lg" style="width: 100%; background: #FF530D; border: #fe4e07; color: white;">Enquire Now</button>
					            </form>
					            <p style="color: white; margin-top: 10px; margin-bottom: 0px;"><span class="glyphicon glyphicon-info-sign"></span> We take your enquiry seriously and we will get back to you as soon as we can.</p>
				          	</div>
						</div>
			    	</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <div class="container" style="margin-top: 40px;">
		<!-- Carousel -->
		<div class="row" style="margin-top: 40px;">
			<div class="col-lg-12">
				<h1 style="color: #2c3e50; text-align: center;" class="ClearSansBold">Products We Offer</h1>
				<hr />
			</div>
		</div>
		
		<div class="row">
        	<div class="col-lg-3">
				<div class="well badger-right badger-success" style="background: white; text-align:center;" data-badger="NEW">
					<img src="img/cam-1.jpg" class="img-circle" style="width: 140px;"/>
					<h4 class="ClearSansBold" style="color: #2c3e50;">Blackmagic 4K</h4>
					<p class="ClearSansLight" style="color: #394e65;">$540/day</p>
				</div>
        	</div>
        	<div class="col-lg-3">
				<div class="well badger-right badger-success" style="background: white; text-align:center;" data-badger="NEW">
					<img src="img/cam-2.jpg" class="img-circle" style="width: 140px;"/>
					<h4 class="ClearSansBold" style="color: #2c3e50;">Sony PMW-300</h4>
					<p class="ClearSansLight" style="color: #394e65;">$540/day</p>
				</div>
        	</div>
        	<div class="col-lg-3">
				<div class="well badger-right badger-white" style="background: white; text-align:center;" data-badger="NEW">
					<img src="img/cam-3.jpg" class="img-circle" style="width: 140px;"/>
					<h4 class="ClearSansBold" style="color: #2c3e50;">Phase One 645D</h4>
					<p class="ClearSansLight" style="color: #394e65;">$540/day</p>
				</div>
        	</div>
        	<div class="col-lg-3">
				<div class="well badger-right badger-white" style="background: white; text-align:center;" data-badger="NEW">
					<img src="img/cam-4.jpg" class="img-circle" style="width: 140px;"/>
					<h4 class="ClearSansBold" style="color: #2c3e50;">RED EPIC-M</h4>
					<p class="ClearSansLight" style="color: #394e65;">$540/day</p>
				</div>
        	</div>
		</div>

		<!-- FAQ -->
		<div class = "row" style="margin-top: 40px;">
			<div class="col-lg-12">
				<h1 style="color: #2c3e50; text-align: center;" class="ClearSansBold">FAQ</h1>
				<hr />
			</div>
			<div class="col-md-6">
				<div class="well" style="background: white;">
					<h3 class = "small-top-margin ClearSansBold" style="color: #2c3e50;">1. What are Camwerkz's operating hours?</h3>
					<p style="color: #394e65;">We operate on weekdays from 9:30am to 6:30pm. On weekends, we operate from 9:30am to 3:30pm.</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="well" style="background: white;">
					<h3 class = "small-top-margin ClearSansBold" style="color: #2c3e50;">2. How does the booking of equipment work?</h3>
					<p style="color: #394e65;">You may collect the equipment earliest at 4pm 1 day prior to your booking date. You have to return the equipment by 10am 1 day after your booking date.</p>
				</div>
			</div>
		</div>
		<div class = "row">
			<div class="col-md-6">
				<div class="well" style="background: white;">
					<h3 class = "small-top-margin ClearSansBold" style="color: #2c3e50;">3. What is Camwerkz?</h3>
					<p style="color: #394e65;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="well" style="background: white;">
					<h3 class = "small-top-margin ClearSansBold" style="color: #2c3e50;">4. What is Camwerkz?</h3>
					<p style="color: #394e65;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
		</div>
		
		<!-- Testimonials -->
		<div class="row" style="margin-top: 40px;">
			<div class="col-lg-12">
				<h1 style="color: #2c3e50; text-align: center;" class="ClearSansBold">Testimonials</h1>
				<hr />
			</div>
			<div class="col-lg-4">
				<div class="well" style="background: white;">
					<img class="img-cirle" src="img/captainamerica.png" style="float:left; width: 80px;"/>
					<h3 style="color: #2c3e50; margin-left: 100px;" class="ClearSansBold">Captain America</h3>
					<p style="color: #394e65; margin-left: 100px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="well" style="background: white;">
					<img class="img-cirle" src="img/captainamerica.png" style="float:left; width: 80px;"/>
					<h3 style="color: #2c3e50; margin-left: 100px;" class="ClearSansBold">Captain America</h3>
					<p style="color: #394e65; margin-left: 100px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="well" style="background: white;">
					<img class="img-cirle" src="img/captainamerica.png" style="float:left; width: 80px;"/>
					<h3 style="color: #2c3e50; margin-left: 100px;" class="ClearSansBold">Captain America</h3>
					<p style="color: #394e65; margin-left: 100px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
		</div>
		

		<!-- Contact us -->
		<div class = "row" style="margin-top: 40px;">
			<div class="col-lg-12">
				<h1 style="color: #2c3e50; text-align: center;" class="ClearSansBold">Stay in Touch</h1>
				<hr />
			</div>
			<div class = "col-md-8">
				<div id="map-canvas" style="width: 100%;"></div>
				<br />
				<p><strong style="color: #2c3e50;">Telephone</strong>: <em style="color: #394e65;">+65 64744787 or +65 90406463</em><br>
				<strong style="color: #2c3e50;">E-mail</strong>: <a href="mailto:admin@camwerkz.com"><em style="color: #394e65;">admin@camwerkz.com</em></a><br>
				<strong style="color: #2c3e50;">Address</strong>: <em style="color: #394e65;">115A Commonwealth Drive<br>
				#05-07/08/09, Singapore 149596.</em></p>
			</div>
			<div class="col-lg-4">
				<div class="well">
		            <form method="POST" action="http://getfloorspace.com/users" accept-charset="UTF-8">
		            	<div class="form-group">
		                	<input type="text" class="form-control" id="name" name="name" placeholder="Name">
		              	</div>
		              	<div class="form-group">
		                	<input type="text" class="form-control" id="number" name="number" placeholder="Number">
		              	</div>
		              	<div class="form-group">
		                	<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message" style="resize: none;"></textarea>
		              	</div>
		              
		              <button type="submit" class="btn btn-lg" style="width: 100%; background: #FF530D; border: #fe4e07; color: white;">Enquire Now</button>
		            </form>
		            <p style="color: white; margin-top: 10px; margin-bottom: 0px;"><span class="glyphicon glyphicon-info-sign"></span> We at Camwerkz take your enquiry seriously and we will get back to you as soon as we can.</p>
	          	</div>
			</div>
		</div>
	</div> <!-- /container -->
	<div id="footer" style="margin-top: 40px; height: 50px; background: #2c3e50;">
      <div class="container">
        <p class="text-muted" style="float: left; padding-top: 17px; padding-right: 5px; color: white;">© 2014 Camwerkz Pte. Ltd.</p><p style="float: right; padding-top: 17px; padding-right: 5px; color: white;">Your work is our focus. Contact us at <strong>+65 90406463</strong>.</p>
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?language=en&amp;sensor=false"></script>
	<script src="js/gmap.js"></script>
  </body>
</html>