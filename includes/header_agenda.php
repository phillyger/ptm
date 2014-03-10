<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="/javascripts/custom/parse/underscore-1.1.6.js"></script>
  <script src="//www.parsecdn.com/js/parse-1.2.9.min.js"></script>
  <script src="/javascripts/custom/parse/agenda.js"></script>

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />


	<title>Panorama Toastmasters of Philadelphia</title>

  <meta name="google-site-verification" content="TV6rulcHKWl38lhBbVmJwLb2Z-5QiQOe8vGVmVcCFkQ">
	<meta http-equiv="Content-Language" content="en-us">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">

	<meta name="description" content="Philadelphia's only evening Toastmasters Club.">
    <meta name="keywords" content="toastmasters, philadelphia, evening, fun">

	<meta name="author" content="Brilliant Age, Inc">
	<meta name="copyright" content="Brilliant Age, Inc Copyright © 2012">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<meta http-equiv="imagetoolbar" content="no">




	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Included CSS Files -->
	
	<!-- <link rel="stylesheet" href="stylesheets/foundation.css">  -->
	<link rel="stylesheet" href="/stylesheets/fc-webicons.css">


	<!--[if lt IE 9]>
		<link rel="stylesheet" href="stylesheets/ie.css">
	<![endif]-->


	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	  <!-- Included CSS Files, use foundation.css if you do not want minified code -->
  <link rel="stylesheet" href="/stylesheets/foundation.min.css">
  <link rel="stylesheet" href="/stylesheets/app.css">
  <link rel="stylesheet" href="/stylesheets/custom/parse/agenda.css">

  <!-- Custom Modernizr for Foundation -->
  <script src="/javascripts/modernizr.foundation.js"></script>




</head>
<body>
	
  	<div class="row">
      <div class="twelve columns">
        <div class="fixed contain-to-grid">
        <nav class="top-bar">
          <ul>
            <!-- Title Area -->
            <li class="name">
              <h1>
                <a href="#">
                  Panorama Toastmasters
                </a>
              </h1>
            </li>
            <li class="toggle-topbar"><a href="#"></a></li>
          </ul>

          <section>
            

            <!-- Right Nav Section -->
            <ul class="right">
              <li class="divider show-for-medium-and-up"></li>
              <li>
                <a href="#" id="login" data-reveal-id="loginModal" class="active toggle-topbar">Sign In</a>
              </li>
            </ul>
          </section>
        </nav>
      </div>
    </div>
  </div>

    <div id="loginModal" class="reveal-modal">
    <h3 class="home">Panorama Toastmasters Login</h3>
    <input class="" id="username" type="text" placeholder="User Name"></input>
    <input class="" id="password" type="password" placeholder="Password"></input>
    <p>Coming Soon!! A members-only access area.</p>
    <a class="close-reveal-modal">×</a>
  </div>


  <div class="row">
      <div class="two columns logo">
          <img src="/images/top-bar/BlueLogo-lrg.jpeg" />
      </div>
      <div class="ten columns banner">
          <img src="/images/top-bar/where_leaders_are_made-lrg.jpeg" />
      </div>
  </div> 


    <div class="row hide-for-small">
      <div class="twelve columns">
<!-- Entire Navbar Code -->
          <ul class="nav-bar">
                <li class=""><a href="/index.php">Home</a></li>
                <!--
                <li class="has-flyout">
                  <a href="#">About Us</a>
                  <a href="#" class="flyout-toggle"><span> </span></a>
                  <ul class="flyout" style="display: none; ">
                    <li><a href="/ab">Our Club</a></li>
                    <li><a href="#">Our History</a></li>
                  </ul>
                </li>
              -->
                <li>
                  <a href="/meetings.php">Meetings</a>

                  <!--
                  <a href="#" class="flyout-toggle"><span> </span></a>

                  
                  <ul class="flyout" style="display: none; ">
                    <li><a href="/meetings/venue.php">Venue</a></li>
                    <li><a href="/meetings/agenda.php">Agenda</a></li>
                    <li><a href="/meetings/format.php">Format</a></li>
                    <li><a href="/meetings/calendar.php">Calendar</a></li>
                     <li><a href="/meetings/directions.php">Directions</a></li>
                  </ul>
                -->
                </li>
                 <li>
                  <a href="/agenda.php">Agenda</a>
                </li>
                <li>
                  <a href="/contests.php">Contests</a>
                </li>
                <li>
                  <a href="/video.php">Video</a>
                </li>
                <li>
                  <a href="/faqs.php">FAQs</a>
                </li>
                <li>
                  <a href="/executive-committee.php">Committee</a>
                </li>
                <li>
                  <a href="/contact.php">Contact Us</a>
                </li>
              </ul>
      </div>
  </div>

  <a href="#" id="mobileNav" data-reveal-id="navModal" class="small nice radius button show-for-small">Menu</a>
  <div id="navModal" class="reveal-modal">
    <h3 class="home">Panorama Toastmasters</h3>
    <dl class="nice tabs vertical">
      <dd><a href="/index.php">Home</a></dd>
      <dd><a href="/meetings.php">Meetings</a></dd>
      <dd><a href="/agenda.php">Agenda</a></dd>
      <dd><a href="/contests.php">Contest</a></dd>
       <dd><a href="/video.php">Video</a></dd>
      <dd><a href="/faqs.php">FAQs</a></dd>
      <dd><a href="/executive-committee.php">Committee</a></dd>
      <dd><a href="/contact.php">Contact Us</a></dd>
    </dl>
    <a class="close-reveal-modal">×</a>
  </div>



