<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Thank You</title>
</head>

<html lang="en"><!-- InstanceBegin template="/Templates/basic page.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="title" -->
<title>Team 100 - FIRST</title>
<!-- InstanceEndEditable -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="FIRST Robotics Competition Team 100 is a student run, student built robotics team in the San Francisco Bay Area.">
<meta name="author" content="morops">
<!-- Le styles -->
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="assets/css/bootstrap-docstyles.css" rel="stylesheet">
<!-- Le HTML5 shim4, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>4
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="assets/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

<style type="text/css">
body {
        padding-top: 80px; /* 80px to make the container go all the way to the bottom of the topbar */
      }
</style>

<!-- Krakenize 

	<!-- raptorize file    
	<script src="jquery.raptorize.1.0.js"></script>
	
	<!-- For the button version
	<script type="text/javascript">
		$(window).load(function() {
			$('.myButton').raptorize();
		});
	</script>
	
	<!-- For the Konami Code version 
	<script type="text/javascript">
		$(window).load(function() {
			$('.myButton').raptorize({
				'enterOn' : 'konami-code'
			});
		});
	</script>
	
	<!-- For the Timer version -->
<!-- <script type="text/javascript">
		$(window).load(function() {
			$('.button').raptorize({
				'enterOn' : 'timer',
				'delayTime' : 2000
			});
		});
	</script>	
	/krakenize *anchor element must be added to restore functionality* -->
<!-- Facebook Like Widget -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
</head>
<body>
<!-- InstanceBeginRepeat name="Navigation" --><!-- InstanceBeginRepeatEntry -->
<div class="navbar navbar-inverse navbar-fixed-top">
  <div id="sub">
    <div class="row">
      <div class="container"><a href="index.html"><img src="assets/img/t100-logo.png" width="158" height="43"></a><a class="pull-right" href="http://www.usfirst.org/"><img src="assets/img/firstlogo.png" width="42" height="43"></a></div>
    </div>
  </div>
   <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.html">Team 100 Wildhats</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li><a href="first.html">FIRST</a></li>
          <li><a href="team.html">Team</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Media<b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
              <li><a href="videos.html">Videos</a></li>

            </ul>
          </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Info<b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
              <li><a href="calendar.html">Calendar</a></li>

              <li><a href="#">Contact Us</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Robots<b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
        <li><a href="robots.html#Kraken">2012: The Kraken</a></li>
        <li><a href="robots.html#Wrath">2011: G-Wrath</a></li>
        <li><a href="robots.html#Hammerhead">2010: Hammerhead</a></li>
        <li><a href="robots.html#LunaBeast">2009: LunaBeast</a></li>
        <li><a href="robots.html#Frog">2008: Ball Frog</a></li>
        <li><a href="robots.html#Tube">2007: Tube-a-saurus</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
      <img src="assets/img/FRC-ExcelAward'12.gif" class="pull-right"></div>
  </div>
</div>
<!-- /navigation -->

<?php
$fname = $_POST['realname'];
$email = $_POST['email'];
$umessage = $_POST['message'];

//Sending Email to form owner

$subject = "Submission From Contact Form";
$email_to = "team100wildhats@gmail.com";
$message = "name: $fname \n $umessage\n"
. "email: $email\n";
mail($email_to, $subject ,$message ) ;
?>
<h1>Thank You for Your Submission</h1>

<p> Your information has been sent. We will reply soon.</p>

<p>Again, thank you for your interest in the Team 100 Wildhats web site</p>

<!-- I know the return to index link isn't necessary, but the one on the top bar isn't very clear -->
<p><a href="index.html">Return to Index</a></p>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>
</body>
</html>