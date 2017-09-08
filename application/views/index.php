<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Section scroller one-page template</title>
    <meta name="description" content="This one page example has a fixed navbar and full page height sections. Each section is vertically centered on larger screens, and then stack responsively on smaller screens. Scrollspy is used to activate the current menu item. This layout also has a contact form example. Uses animate.css, FontAwesome, Google Fonts (Lato and Bitter) and Bootstrap." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">



    <!--  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/styles.css" />-->
	
	
	
  </head>
  <body ng-app="main-App">
  <div>Added Here to test</div>
   <!-- <nav class="navbar navbar-trans navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapsible">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand text-danger" href="#">BRAND</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar-collapsible">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="#section1">Start</a></li>
                <li><a href="#section2">Next</a></li>
                <li><a href="#section3">Then</a></li>
                <li><a href="#section4">Form</a></li>
                <li><a href="#section5">More</a></li>
                <li><a href="#section6">Last</a></li>
                <li>&nbsp;</li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-heart-o fa-lg"></i></a></li>
            </ul>
        </div>
    </div>
</nav>-->

<div class="container">
		<ng-view>
		</ng-view>
	</div>

<div>Added end Here to test</div>
<!-- <footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-3 column">
                <h4>Information</h4>
                <ul class="nav">
                    <li><a href="about-us.html">Products</a></li>
                    <li><a href="about-us.html">Services</a></li>
                    <li><a href="about-us.html">Benefits</a></li>
                    <li><a href="elements.html">Developers</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-md-3 column">
                <h4>Follow Us</h4>
                <ul class="nav">
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Google+</a></li>
                    <li><a href="#">Pinterest</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-md-3 column">
                <h4>Contact Us</h4>
                <ul class="nav">
                    <li><a href="#">Email</a></li>
                    <li><a href="#">Headquarters</a></li>
                    <li><a href="#">Management</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-md-3 column">
                <h4>Customer Service</h4>
                <ul class="nav">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Delivery Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                </ul>
            </div>
        </div>
        <p class="text-right">©2015</p>
    </div>
</footer>

<div class="scroll-up">
    <a href="#"><i class="fa fa-angle-up"></i></a>
</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="text-center"><img src="//placehold.it/110" class="img-circle"><br>Login</h2>
            </div>
            <div class="modal-body row">
                <h6 class="text-center">COMPLETE THESE FIELDS TO SIGN UP</h6>
                <form class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input-lg" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-danger btn-lg btn-block">Sign In</button>
                        <span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <h6 class="text-center"><a href="">Privacy is important to us. Click here to read why.</a></h6>
            </div>
        </div>
    </div>
</div>-->
    <!--scripts loaded here-->
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	
	<!-- Angular JS -->
	<script src="assets/js/angular.min.js"></script>  
	<script src="assets/js/angular-route.min.js"></script>

	<!-- MY App -->
	<script src="app/routes.js"></script>
	<script src="app/services/myServices.js"></script>
	<script src="app/helper/myHelper.js"></script>

	<!-- App Controller -->
	<script src="app/controllers/UserController.js"></script>
    
    <!--<script src="assets/js/scripts.js"></script>-->
  </body>
</html>