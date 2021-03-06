<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/bare.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
    <title>Team 100 - Home</title>
    <!-- InstanceEndEditable -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="FIRST Robotics Competition Team 100 is a student run, student built robotics team in the San Francisco Bay Area.">
<meta name="author" content="">

<!-- Le styles -->
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

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

<!-- Facebook Like Widget -->
<!-- InstanceBeginEditable name="head" -->
    <!-- InstanceEndEditable -->
<div id="fb-root"></div>
</head>

<body>
<script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="navbar navbar-inverse navbar-fixed-top">
  <div id="sub">
    <div class="row">
      <div class="container"> <a href="index.html"><img src="assets/img/t100-logo.png" width="158" height="43"></a> <a class="pull-right" href="http://www.usfirst.org/"><img src="assets/img/firstlogo.png" width="42" height="43"></a> </div>
    </div>
  </div>
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="index.html">Team 100 Wildhats</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li><a href="first.html">FIRST</a></li>
          <li><a href="team.html">Team</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Media<b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
              <li><a href="videos.html">Videos</a></li>
              <li><a href="photos.html">Photos</a></li>
              <!-- <li><a href="#">Animation</a></li>
              <li><a href="#">Website</a></li>-->
            </ul>
          </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Info<b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
              <li><a href="calendar.html">Calendar</a></li>
              <!--  dba            <li><a href="#">Member Benefits</a></li>
-->
              <li><a href="contact.html">Contact Us</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Robots<b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
              <li><a href="robots.html#Oranghang">2013: Orangahang</a></li>
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
      <img src="assets/img/FRC-ExcelAward'12.gif" class="pull-right"> </div>
  </div>
</div>
<!-- /navigation --> 

<a class="myButton"></a> 

<!-- slideshow -->
<div class="sbody">
  <div class="container">
    <div class="content"><!-- InstanceBeginEditable name="EditRegion1" -->
<?php
$fname = $_POST['realname'];
$email = $_POST['email'];
$umessage = $_POST['message'];

//Sending Email to form owner

$subject = "Submission From Contact Form";
$email_to = "team-100-wildhats-contact@googlegroups.com";
$message = "name: $fname \n $umessage\n"
. "email: $email\n";
mail($email_to, $subject ,$message ) ;

?>
<h1>Thank You for Your Submission</h1>

<p> Your information has been sent, you will now receive our mailer, invitations and other tantalizing offers we have</p>

<p>Again, thank you for your interest in my new web site</p>
<br>
<!-- InstanceEndEditable --></div>
  </div>
</div>
<!-- /container -->

<footer id="ftr">
<!-- Easter Egg! -->
<script type="text/javascript">
if ( window.addEventListener ) {  
  var state = 0, konami = [38,38,40,40,37,39,37,39,66,65];  
  window.addEventListener("keydown", function(e) {  
    if ( e.keyCode == konami[state] ) state++;  
    else state = 0;  
    if ( state == 10 )  
      window.location = "http://www.youtube.com/watch?v=LKN9MouL1s8&list";  
    }, true);  
}  
</script>
<!--Easter Egg!!! -->
<div class="blck">
  <div class="container">
    <div id="social"> 
    <a href="https://plus.google.com/115456650323305387149/posts" target="_blank">
    <img src="assets/img/Google+_with_hat.png" alt="Google+" />
    </a>
    <a href="https://twitter.com/FRCTeam100" target="_blank">
    <img src="assets/img/Twitter_with_Hat.png" alt="Twitter" />
    </a>
    <a href="https://www.facebook.com/team100robotics" target="_blank">
    <img src="assets/img/Facebook_With_Hat.png" alt="Facebook" />
    </a>
    <a href="http://www.youtube.com/user/Team100Wildhats" target="_blank">
    <img src="assets/img/Youtube_with_hat.png" alt="Google+" />
    </a>
    <a href="http://www.flickr.com/photos/team100wildhats" target="_blank">
    <img src="assets/img/Flickr_With_Hat.png" alt="Flickr" />
    </a>
    <a href="http://instagram.com/frcteam100" target="_blank">
    <img src="assets/img/Instagram_With_Hat.png" alt="Instagram" />
    </a>
    <a href="http://ptch.com/frcteam100" target="_blank">
    <img src="assets/img/Ptch_with_hat.png" alt="Ptch" />
    </a>
    </div>
    <h2>Team 100 Wildhats</h2>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="span3">
      <h3 class="makeitorange">FIRST</h3>
      <ul>
        <li><a href="first.html#first">What is FIRST?</a></li>
        <li><a href="first.html#frc">FRC</a></li>
        <li><a href="first.html#ftc">FTC</a></li>
        <li><a href="first.html#fll">FLL</a></li>
        <li><a href="first.html#challenges">Challenges</a></li>
      </ul>
    </div>
    <div class="span3">
      <h3 class="makeitorange">Team</h3>
      <ul>
        <li><a href="team.html#mission">The Mission</a></li>
        <li><a href="team.html#history">History</a></li>
        <li><a href="team.html#sponsors">Sponsors</a></li>
        <li><a href="team.html#outreach">Outreach</a></li>
        <li><a href="team.html#mentors">Mentors and Volunteers</a></li>
        <!--	dba	<li><a href="team.html#business">Business Plan</a></li>
			<li><a href="team.html#blog">Team Blog</a></li>-->
      </ul>
    </div>
    <div class="span3">
      <h3 class="makeitorange">Robots</h3>
      <ul>
        <li><a href="robots.html#Orangahang">2013: Orangahang</a></li>
        <li><a href="robots.html#Kraken">2012: The Kraken</a></li>
        <li><a href="robots.html#Wrath">2011: G-Wrath</a></li>
        <li><a href="robots.html#Hammerhead">2010: Hammerhead</a></li>
        <li><a href="robots.html#LunaBeast">2009: LunaBeast</a></li>
        <li><a href="robots.html#Frog">2008: Ball Frog</a></li>
        <li><a href="robots.html#Tube">2007: Tube-a-saurus</a></li>
      </ul>
    </div>
    <div class="span3">
      <h3 class="makeitorange">Media</h3>
      <ul>
        <li><a href="videos.html">Videos</a></li>
        <li><a href="photos.html">Photos</a></li>
            <!-- dba
			<li><a href="#">3D Animation</a></li>
			<li><a href="#">Website</a></li> -->
      </ul>
      <br>
      <h3><span class="makeitorange">Info</span></h3>
      <ul>
        <li><a href="calendar.html">Calendar</a></li>
        <!-- <li><a href="#">Member Benefits</a></li> -->
        <li><a href="contact.html">Contact Us</a></li>
      </ul>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="span8">
        <div class="fb-like" data-href="http://www.team100.org/" data-send="true" data-width="450" data-show-faces="true" data-colorscheme="dark"></div>
      </div>
    </div>
  </div>
  </footer>
</div>
<!-- End sbody --> 
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
<!-- InstanceEnd --></html>