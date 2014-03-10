
 <?php 

    $dir_path = dirname(__FILE__);

    include('./includes/header.php'); 

    $meetup_controller_file = './controllers/meetup_panorama.php';


    if (file_exists($meetup_controller_file))
    {
      // echo $meetup_controller_file;
     include($meetup_controller_file); 
    }


  ?>



  <!-- container -->
  <div class="container">
    <div class="container-overlap home">
      <div class="row hide-for-small">
        <div class="twelve columns">
          <div class="alert-box">
             <a href="" class="close">&times;</a>
             Latest News: Stop by our next meeting at The Watermark.
          </div>
          <div id="introBanner" class="orbit">        
            <div id="item1" class="banner-slide orbit-slide">
              <h3>Our Mission</h3>
              <p>The mission of <strong>Panorama Toastmasters</strong> club is to provide a supportive and positive learning experience in which members are empowered to develop communication and leadership skills, resulting in greater self-confidence and personal growth</p>
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
                <p>All the while, providing you with feedback on your path to public-speaking proficiency.</p>
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
              <a href="/contact.php" class="success button">Join Today! »</a>
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

          <ul class="social" style="text-align:center">
            <li>
              <a class="fc-webicon linkedin" href="http://www.linkedin.com/groups?gid=1076717" target="_blank"> LinkedIn</a>
            </li>
            <li>
              <a class="fc-webicon twitter" href="http://www.twitter.com/panoramatoast" target="_blank"> Twitter</a>
            </li>
            <li>
              <a class="fc-webicon facebook" href="http://www.facebook.com/panoramatoastmasters" target="_blank"> Facebook</a>
            </li>
            <li>
              <a class="fc-webicon youtube" href="http://www.youtube.com/user/panoramatoastmasters"> YouTube</a>
            </li>
          </ul>

            <h3>Next Meeting</h3>

 
            <h4>Date/Time</h4>
            <div>
              <p><?php 
              $convert_utc_date= date(DATE_W3C, $curEvt["time"]/1000);
              echo date('l\, jS \of F', strtotime($convert_utc_date)) ?></p>
              <p><?php echo date('h:i A', strtotime($convert_utc_date)) ?></p>
            </div>
            <h4>Location</h4>
            <ul class="meetup-venue-info">
              <li class="venue_name"><?php echo $curEvt['venue']['name'] ?></li>
              <li class="venue_address1"><?php echo $curEvt['venue']['address1'] ?></li>
              <li class="venue_city"><?php echo $curEvt['venue']['city'] ?></li>
              <li class="venue_statezip"><?php echo $curEvt['venue']['state']." ".$curEvt['venue']['zip'] ?></li>
            </ul>
      
            <a href="/meetings.php" class="large blue button" id="getDirections">           
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
              <p><strong class="">Our Mission</strong></p>
           <p>The mission of <strong>Panorama Toastmasters</strong> club is to provide a supportive and positive learning experience in which members are empowered to develop communication and leadership skills, resulting in greater self-confidence and personal growth.</p>
            </li>
          <li id="nice2Tab">
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
            <p><strong>Your Sucess!</strong></p>
            <p>Like everything in life, the first step is always the hardest. <strong>Be Brave!</strong> Take that first step.</p>
              <p>At <strong>Panorama Toastmasters</strong> , we are dedicated to providing you with the tools and skills you need to ensure your success.</p>
          </li>
            <li id="nice4Tab">
            <p><strong>Begin The Journey</strong></p>
            <p>A life-changing challenge awaits you! So, what are you waiting for?</p>
              <p>Join <strong>Panorama Toastmasters</strong> today to begin your journey.</p>
            <a href="/contact.php" class="success button">Join Today! »</a>
          </li>
        </ul>
        

         <div class="main-cta">
            <h3>Next Meeting</h3>

            <h4>Date/Time</h4>
            <div>
              <p><?php 
              $convert_utc_date= date(DATE_W3C, $curEvt["time"]/1000);
              echo date('l\, jS \of F', strtotime($convert_utc_date)) ?></p>
              <p><?php echo date('h:i A', strtotime($convert_utc_date)) ?></p>
            </div>
            <h4>Location</h4>
            <ul class="meetup-venue-info">
              <li class="venue_name"><?php echo $curEvt['venue']['name'] ?></li>
              <li class="venue_address1"><?php echo $curEvt['venue']['address1'] ?></li>
              <li class="venue_city"><?php echo $curEvt['venue']['city'] ?></li>
              <li class="venue_statezip"><?php echo $curEvt['venue']['state']." ".$curEvt['venue']['zip'] ?></li>
            </ul>
      
            <a href="/meetings.php" class="large blue button" id="getDirections">         
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
     <div class="twelve columns">
       <div class="ptm-divider"></div>
     </div>
    </div>


<div class="row">
     <div class="twelve columns" >
      <h3 class="light ">Public Speaking Goes Mobile -  Helping You Measure Your Progress</h3>
     </div>

     <div class="four columns">

      <h4 class="subheader">A Fresh Way to Look at Public Speaking - PoMoFeLo</h4>

      <p>A <strong><u>Po</u></strong>sitive <strong><u>Mo</u></strong>tivational <strong><u>Fe</u></strong>edback <strong><u>Lo</u></strong>op is a termed coined by Panorama to describe this startlingly 
        new approach to improving one's public speaking skills.</p>
      
      <blockquote>Anything worth doing, is worth doing right.<cite>Hunter S. Thompson</cite></blockquote>
      
      <p>Acquiring a new skill requires effort. Effort is demonstrated through grit and dedication. Grit is a trait based on an individual’s passion 
        for a particular long-term goal or end state coupled with a powerful motivation to achieve their respective objective.</p>

       <p>There is no 'magic pill' that one can take to turn someone into a great speaker overnight. It can only be achieved through continued practice.
         </p>

      <p>As a club, our goal is to help in any-and-all ways possible. One approach that sets our club apart from others is this idea of a <strong>PoMoFeLo</strong>. </p>

      

     </div>
     <div class="four columns">
        <img src="/images/e1h/e1h_member_attendance_full.png"/>
     </div>
     <div class="four columns">
      <h4 class="subheader">PoMoFeLo - Explained</h4>
      <blockquote>If you can not measure it, you can not improve it.<cite>Lord Kelvin</cite></blockquote>
        <p>We want to enable you to succeed on your public speaking journey by allowing you to track your progress through the use of technology.</p>
        
        <p>By placing this information into your hands, we are transforming the art of oratory. <strong>We are putting the word 'social' back into 'social networks'.</strong>

          <p>

            <ul class="circle">
              <li>Imagine having access to view your progress on your smartphone, tablet or web.</li>
              <li>Imagine having video of all your speeches available to view on your phone.</li>
              <li>Imagine having the ability to schedule future speeches.</li>
              <li>Imagine having project speech information accessible at a click.</li>
              <li>Imagine receiving notifications of updated agendas, open roles and meeting reminders directly to your phone or tablet.</li>
             <ul> 
          </p>


          <p>Join us on this new revolution. Click <a href="/pomofelo.php">here to find out more.</a></p>
     </div>
</div>



    <div class="row">
     <div class="twelve columns">
       <div class="ptm-divider"></div>
     </div>
    </div>

    

      <div class="row">
          <div class="six columns" style="text-align:center">
            <h3 class="light">Welcome to Toastmasters</h3>
            <div id="video_container">
              <p>Hey, ever wonder what it would be like to attend a meeting?</p>
              <iframe width="420" height="315" src="http://www.youtube.com/embed/rulJAYfDLjA" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="six columns" style="text-align:center">
            <h3 class="light">Follow Us!</h3>
            <p>Keep up-to-date with all the latest news on our club's happenings.</p>
            <div>
<a class="twitter-timeline" href="https://twitter.com/panoramatoast" data-widget-id="278872994930114560">Tweets by @panoramatoast</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

          </div>
      </div>



      
    </div>  <!-- container-overlap -->



  </div><!-- container -->



<?php include($dir_path .'/includes/foundation.js.php'); ?>

<!-- Initialize fitVids --> 
  <script src="/javascripts/custom/jquery.fitvids.js"></script>

 <!-- Initialize Orbit Slider Activate Tabs - HomePage-->
  <script src="/javascripts/custom/orbit.slider.activate.tabs.js"></script>

 <!-- Initialize Orbit Slider Activate Tabs -->
  <script src="/javascripts/custom/mobile.reveal.menu.display.js"></script>

  <!-- top menu selector --> 
  <script src="/javascripts/custom/top.level.menu.selector.js"></script>

  <script>
  $(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $("#video_container").fitVids();
  });
</script>


</body>
</html>
