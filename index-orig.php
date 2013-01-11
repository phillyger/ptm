<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />


	<title>Panorama Toastmasters of Philadelphia</title>


	<meta http-equiv="Content-Language" content="en-us">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">

	<meta name="description" content="Philadelphia's only evening Toastmasters Club.">
    <meta name="keywords" content="toastmasters, philadelphia, evening, fun">

	<meta name="author" content="Panorama Toastmasters">
	<meta name="copyright" content="Panorama Toastmasters Copyright © 2012">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<meta http-equiv="imagetoolbar" content="no">

	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

   <!-- Custom Responsive Images -->

    <script>
  
    //optional: set config options here!
    var rwd_images = { };
    
  </script>

  <!-- <script src="/javascripts/custom/responsiveimgs/responsiveimgs.js"></script> -->


	<!-- Included CSS Files -->
	
	<!-- <link rel="stylesheet" href="stylesheets/foundation.css"> -->
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

  <!-- Custom Modernizr for Foundation -->
  <script src="/javascripts/modernizr.foundation.js"></script>
 
</head>
<body>

    <?php 

    $dir_path = dirname(__FILE__);
    $meetup_controller_file = $dir_path.'/controllers/meetup_panorama.php';

    if (file_exists($meetup_controller_file))
    {
     include($meetup_controller_file); 
    }

    ?>

	
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
                <a class="active" href="#">Sign In</a>
              </li>
            </ul>
          </section>
        </nav>
      </div>
    </div>
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
                <li class="active"><a href="/index.php">Homes</a></li>
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
                <li class="has-flyout">
                  <a href="#">Meetings</a>
                  <a href="#" class="flyout-toggle"><span> </span></a>
                  <ul class="flyout" style="display: none; ">
                    <li><a href="/meetings/venue.php">Venue</a></li>
                    <li><a href="/meetings/agenda.php">Agenda</a></li>
                    <li><a href="/meetings/format.php">Format</a></li>
                    <li><a href="/meetings/calendar.php">Calendar</a></li>
                     <li><a href="/meetings/directions.php">Directions</a></li>
                  </ul>
                </li>
                <li>
                  <a href="/executive-committee.php">Executive Committee</a>
                </li>
                <!--
                <li>
                  <a href="#">Success Stories</a>
                </li>
              -->
                <li>
                  <a href="/faqs.php">FAQs</a>
                </li>
                <li>
                  <a href="/contact-us.php">Contact Us</a>
                </li>
              </ul>
      </div>
  </div>

  <a href="#" id="mobileNav" data-reveal-id="navModal" class="small nice black button show-for-small">Menu</a>


  <!-- container -->
  <div class="container">
    <div class="container-overlap home">
      <div class="row hide-for-small">
        <div class="twelve columns">
          <div id="introBanner" class="orbit">        
            <div id="item1" class="banner-slide orbit-slide">
              <h3>Our Mission</h3>
              <p>The mission of <strong>Panorama Toastmasters</strong> club is to provide a mutually supportive and positive learning environment in which every individual member has the opportunity to develop oral communication and leadership skills, which in turn foster self-confidence and personal growth.</p>
              <img alt="Slide-1" src="/images/notable/slide-1.png">
            </div>
      
            <div id="item2" class="banner-slide orbit-slide">
              <h1>Our Promise</h1>
              <p>To make the task of public speaking</p>
                <ul class="disc">
                  <li>Fun</li>
                  <li>Stress-free</li>
                  <li>Engaging</li>
                </ul>
                <p>All the while, providing you with feedback on your path to world public-speaking domination.</p>
              <img alt="Slide-2" src="/images/notable/slide-2.png">
            </div>
      
            <div id="item3" class="banner-slide orbit-slide">
              <h1>Your Sucess!</h1>
              <p>Like everything in life, the first step is always the hardest. <strong>Be Brave!</strong> Take that first step.</p>
              <p>At <strong>Panorama Toastmasters</strong> , we are dedicated to providing you with the tools and skills you need to ensure your success.</p>
              <img alt="Slide-3" src="/images/notable/slide-3.png">
            </div>
      
            <div id="item4" class="banner-slide orbit-slide">
              <h1>Begin The Journey</h1>
              <p>A life-changing challenge awaits you! So, what are you waiting for?</p>
              <p>Join <strong>Panorama Toastmasters</strong> today to begin your journey.</p>
              <a class="large orange awesome">Join Today! »</a>
              <img alt="Slide-4" src="/images/notable/slide-4.png">
            </div>            
          
            <ul id="slideNav">
              <li data-slide-index="0" class="first active">Our Mission</li>
              <li data-slide-index="1" class="">Our Promise</li>
              <li data-slide-index="2" class="">Your Success</li>
              <li data-slide-index="3" class="">Begin The Journey</li>
            </ul>
          
          </div> <!-- introBanner -->

          <div class="timer">
            <span class="mask">
                <span class="rotator" style="-webkit-transform: rotate(138deg); "></span>
            </span>
              <span class="pause"></span>
          </div>
          <div class="orbit-caption"></div>

          <div class="main-cta">
            <h3>Next Meeting</h3>

            <h4>Date/Time</h4>
            <div>
              <p><?php echo date('l\, jS \of F', strtotime($curEvt["time"])) ?></p>
              <p><?php echo date('h:i A', strtotime($curEvt["time"])) ?></p>
            </div>
            <h4>Location</h4>
            <ul class="meetup-venue-info">
              <li class="venue_name"><?php echo $curEvt["venue_name"] ?></li>
              <li class="venue_address1"><?php echo $curEvt["venue_address1"] ?></li>
              <li class="venue_city"><?php echo $curEvt["venue_city"] ?></li>
              <li class="venue_statezip"><?php echo $curEvt["venue_state"]." ".$curEvt["venue_zip"] ?></li>
            </ul>
      
            <a href="/directions" class="large blue button" id="getDirections">         
              <span>Get Directions »</span>
            </a>
            <small class="centered">Are you attending?<br/><br/>
              <a href="http://www.meetup.com/Panorama-Toastmasters/events/<?php echo $curEvt["id"]?>" target="_blank" data-event="<?php echo $curEvt["id"]?>" class="mu-rsvp-btn">
                <img src="http://www.meetup.com/t/img/api/rbtn/kme5cgolhj415luaakf26uhhse/rsvp_btn.png"/></a>
            </small>
            
          </div> <!-- main-cta -->      

        </div> <!-- end twelve column-->

      </div>  <!-- row hide-for-small-->

<div class="row show-for-small about-tabs">
      <div class="twelve columns little-bump">
        <dl class="nice tabs">
          <dd><a href="#nice1" class="active">Our Mission</a></dd>
            <dd><a href="#nice2">Our Promise</a></dd>
            <dd><a href="#nice3">Your Sucess!</a></dd>
            <dd><a href="#nice4">Begin The Journey</a></dd>           
        </dl>
        
        <ul class="nice tabs-content">
          <li class="active" id="nice1Tab">
            <img alt="Slide-1" src="/images/notable/slide-1-sml.png?full=/images/notable/slide-1.png">
              <p><strong class="">Our Mission</strong></p>
           <p>The mission of <strong>Panorama Toastmasters</strong> club is to provide a mutually supportive and positive learning environment in which every individual member has the opportunity to develop oral communication and leadership skills, which in turn foster self-confidence and personal growth.</p>
            </li>
          <li id="nice2Tab">
            <img alt="Slide-2" src="/images/notable/slide-2-sml.png?full=/images/notable/slide-2.png">
            <p><strong>Our Promise</strong></p>
             <p>To make the task of public speaking</p>
                <ul class="disc">
                  <li>Fun</li>
                  <li>Stress-free</li>
                  <li>Engaging</li>
                </ul>
                <p>All the while, providing you with feedback on your path to world public-speaking domination.</p>
          </li>
          <li id="nice3Tab">
            <img alt="Slide-3" src="/images/notable/slide-3-sml.png?full=/images/notable/slide-3.png">
            <p><strong>Your Sucess!</strong></p>
            <p>Like everything in life, the first step is always the hardest. <strong>Be Brave!</strong> Take that first step.</p>
              <p>At <strong>Panorama Toastmasters</strong> , we are dedicated to providing you with the tools and skills you need to ensure your success.</p>
          </li>
            <li id="nice4Tab">
            <img alt="Slide-4" src="/images/notable/slide-4-sml.png?full=/images/notable/slide-4.png">
            <p><strong>Begin The Journey</strong></p>
            <p>A life-changing challenge awaits you! So, what are you waiting for?</p>
              <p>Join <strong>Panorama Toastmasters</strong> today to begin your journey.</p>
              <a class="large orange awesome">Join Today! »</a>
          </li>
        </ul>
        

         <div class="main-cta">
            <h3>Next Meeting</h3>

            <h4>Date/Time</h4>
            <div>
              <p><?php echo date('l\, jS \of F', strtotime($curEvt["time"])) ?></p>
              <p><?php echo date('h:i A', strtotime($curEvt["time"])) ?></p>
            </div>
            <h4>Location</h4>
            <ul class="meetup-venue-info">
              <li class="venue_name"><?php echo $curEvt["venue_name"] ?></li>
              <li class="venue_address1"><?php echo $curEvt["venue_address1"] ?></li>
              <li class="venue_city"><?php echo $curEvt["venue_city"] ?></li>
              <li class="venue_statezip"><?php echo $curEvt["venue_state"]." ".$curEvt["venue_zip"] ?></li>
            </ul>
      
            <a href="/directions" class="large blue button" id="getDirections">         
              <span>Get Directions »</span>
            </a>
            <small class="centered">Are you attending?<br/><br/>
              <a href="http://www.meetup.com/Panorama-Toastmasters/events/<?php echo $curEvt["id"]?>" target="_blank" data-event="<?php echo $curEvt["id"]?>" class="mu-rsvp-btn">
                <img src="http://www.meetup.com/t/img/api/rbtn/kme5cgolhj415luaakf26uhhse/rsvp_btn.png"/></a>
            </small>
            
          </div> <!-- main-cta -->      


        <br>
      </div> <!-- twelve columns little-bump-->

    </div>  <!-- row show-for-small about-tabs -->


    

      <div class="row">
          <div class="seven columns centered" style="text-align:center">
            <h3 class="light">A Welcome Message From Our Club President</h3>
            <div>
              
            </div>
          </div>
      </div>


<!--
      <div class="row">
          <div class="twelve columns">
            <div class="panorama-toastmaster-divider">
            </div>
          </div>
      </div>
-->

      <div class="row hide-for-small">
          <div class="twelve columns">
              <hr/>
          </div>
      </div>

      <div class="row">
          <div class="seven columns centered" style="text-align:center">
            <h3 class="light">Learn to be a leader!</h3>
            <div>
              
            </div>
          </div>
      </div>

    </div>  <!-- container-overlap -->

  </div><!-- container -->

<div id="navModal" class="reveal-modal">
  <h3 class="home">Panorama Toastmasters</h3>
  <dl class="nice tabs vertical">
    <dd><a href="/" class="active">Home</a></dd>
    <dd><a href="/meetings">Meetings</a></dd>
    <dd><a href="/executive">Executive Committee</a></dd>
    <dd><a href="/faqs">FAQs</a></dd>
    <dd><a href="/contact">Contact Us</a></dd>
  </dl>
  <a class="close-reveal-modal">×</a>
</div>

<!-- <div class="reveal-modal-bg" style="opacity: 0.8; display: block; cursor: pointer; "></div> -->

	<!-- Included JS Files-->
  
  
  <!-- Included JS Files (Uncompressed) -->
  
  
  <script src="/javascripts/jquery.js"></script>
  
  <script src="/javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="/javascripts/jquery.foundation.forms.js"></script>
  
  <script src="/javascripts/jquery.foundation.reveal.js"></script>
  
  <script src="/javascripts/jquery.foundation.orbit.js"></script>
  
  <script src="/javascripts/jquery.foundation.navigation.js"></script>
  
  <script src="/javascripts/jquery.foundation.buttons.js"></script>
  
  <script src="/javascripts/jquery.foundation.tabs.js"></script>
  
  <script src="/javascripts/jquery.foundation.tooltips.js"></script>
  
  <script src="/javascripts/jquery.foundation.accordion.js"></script>
  
  <script src="/javascripts/jquery.placeholder.js"></script>
  
  <script src="/javascripts/jquery.foundation.alerts.js"></script>
  
  <script src="/javascripts/jquery.foundation.topbar.js"></script>
  
  <script src="/javascripts/jquery.foundation.joyride.js"></script>
  
  <script src="/javascripts/jquery.foundation.clearing.js"></script>
  
  <script src="/javascripts/jquery.foundation.magellan.js"></script>
  
  
  
  <!-- Included JS Files (Compressed) -->
  <script src="/javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="/javascripts/app-index-only.js"></script>


  

</body>
</html>
<script type="text/javascript">
   $(window).load(function() {
       $('#featured').orbit({
       	bullets: true
       });
   });

   $(window).load(function() {
       $('#featuredContent').orbit({ fluid: '2x1' });
   });

  $(document).ready(function() {
    $("#mobileNav").click(function() {
      $("#navModal").reveal();
    });

    $('#navModal a.close-reveal-modal').trigger('reveal:close');
  });
</script>
