
 <?php 

    $dir_path = dirname(__FILE__);

    include($dir_path.'/includes/header.php');

    $meetup_controller_file = $dir_path.'/controllers/meetup_panorama.php';


    if (file_exists($meetup_controller_file))
    {
      // echo $meetup_controller_file;
     include($meetup_controller_file); 
    }

  ?>


 <!-- container -->
  <div class="container">
    <div class="container-overlap">
      <div class="row">
        <div class="twelve columns">
        	


			<div class='six columns'>
				<h2>Location</h2>
				<p>The Watermark is located <strong>just past the corner of 17th and Vine St</strong>, just north of center city.</p>

				<img src="http://maps.googleapis.com/maps/api/staticmap?center=2+Franklin+Town+Boulevard,Philadelphia,PA+19103&zoom=17&sensor=true&size=400x300&key=AIzaSyA9td8qX4agF5sW6B-wcn_nvCnAalZ7C80&markers=color:red%7Ccolor:red%7Clabel:A%7C39.959933,-75.168113"/>
				
				<br/>
				    <address>
				      <strong>The Watermark at Logan Square</strong><br />
				      2 Franklin Town Boulevard <br />
				      Philadelphia, PA 19103
				    </address>
				<br/>
				<p>Click <a href="https://maps.google.com/maps/ms?msid=208609720381084103713.0004cde9d7eb7540ddfdc&msa=0&ll=39.959935,-75.168114&spn=0.006932,0.01561" target="_blank">here</a> to view larger map.
			
				</p>
			</div>
			<div class='six columns'>
				<h2>Transporation</h2>
				<p><strong>PARKING IS FREE after 6:30PM on Wednesday</strong> (Note: Below <strong>Spring Garden</strong>).</p>

				<p>Parking typically available on 17th or 18th street just past Vine Street.</p>

				<p>For additional information on parking deals, please check the following site <a href="http://www.visitphilly.com/parkingdeals/" target="_blank">VisitPhilly.com</a></p>

			 	<h3>Bus</h3> 

			 	<p>Take the Septa <strong>#2</strong> bus North to <strong>16th & Callowhill</strong>, walk across to 17th and head toward Franklin Blvd</p>

				<h3>Subway</h3>

				<p>Take the <strong>Broad St</strong> line to <strong>Race/Vine Station</strong>, walk west on vine st to 17th and head north to franklin town blvd.</p>
			</div>


        </div> <!-- end twelve column-->
       </div>  <!-- row hide-for-small-->

       <div class="row">
	 	<div class="twelve columns">


			<div class="six columns">

				<h2>Next Meeting</h2>
				<div class="main-cta" style="right: 0px; left: 0px; position: relative; top: 0px;">
		            

		            <h4>Date/Time</h4>
		            <div>
		              <p><?php 
		              $convert_utc_date= date(DATE_W3C, $curEvt["time"]/1000);
		              echo date('l\, jS \of F', strtotime($convert_utc_date)) ?></p>
		              <p><?php echo date('h:i A', strtotime($convert_utc_date)) ?></p>
		            </div>

		           	<h4>Location</h4>
		            <div>
		                          <ul class="meetup-venue-info">
              <li class="venue_name"><?php echo $curEvt['venue']['name'] ?></li>
              <li class="venue_address1"><?php echo $curEvt['venue']['address1'] ?></li>
              <li class="venue_city"><?php echo $curEvt['venue']['city'] ?></li>
              <li class="venue_statezip"><?php echo $curEvt['venue']['state']." ".$curEvt['venue']['zip'] ?></li>
            </ul>
		            </div>
		            		            
		      
		            <small class="centered">Are you attending?<br/><br/>
		              <a href="http://www.meetup.com/Panorama-Toastmasters/events/<?php echo $curEvt["id"]?>" target="_blank" data-event="<?php echo $curEvt["id"]?>" class="mu-rsvp-btn">
		                <img src="http://www.meetup.com/t/img/api/rbtn/kme5cgolhj415luaakf26uhhse/rsvp_btn.png"/></a>
		            </small>
	            
	          	</div> <!-- main-cta -->   

			</div>   <!-- end six column-->	


	 		<div class="six columns" style="height:400px;">
	 			<h2>The Watermark</h2>
		 		<div id="thewatermark">
				  <img src="/images/orbit/meetings/slider-img-1.jpeg" />
				  <img src="/images/orbit/meetings/slider-img-2.jpeg" />
				  <img src="/images/orbit/meetings/slider-img-3.jpeg" />
				</div>
			</div>   <!-- end six column-->	

	 	</div> <!-- end twelve column-->

      </div>  <!-- row -->


       <div class="row">
	 	<div class="twelve columns">
			<div class='six columns'>
				<h2>Meeting Role Definitions</h2>
					<ul>
						<li><strong>Evaluator</strong>: Assesses speeches and delivers feedback to the speaker and club.</li>
						<li><strong>General Evaluator</strong>: Provides an overall evaluation of the meeting and introduces the evaluation team.</li>
						<li><strong>Grammarian</strong>: Listens for filler words (uhm, ahs, etc.) and evaluates the presenter’s wording for grammatical mistakes. Also provides a ‘Word of the Day’.</li>
						<li><strong>Speaker</strong>: Delivers a speech and receives feedback from an Evaluator.</li>
						<li><strong>Table Topics Master</strong>: Provides topics for the improvisational portion of the meet</li>
						<li><strong>Timer</strong>: Times each meeting segment and provides visual feedback to the speaker to let him/her know when time runs out.</li>
						<li><strong>Toastmaster</strong>: Runs the meeting and transitions between segments. Provides a theme for the meeting.</li>
					</ul>
			</div>   <!-- end six column-->	

			<div class='six columns'>

				<h2>Meeting Format</h2>

				<ol>
					<li><strong>Kickoff</strong>: Toastmaster is introduced and theme for the meeting is announced.</li>
					<li><strong>Rules</strong>: The General Evaluator, Grammarian, and Timer explain the rules for the meeting.</li>
					<li><strong>Speeches</strong>: 2 to 4 speakers deliver speeches. Speeches are typically 5 to 7 minutes in length.</li>
					<li><strong>Table Topics</strong>: The improvisational speech portion. Audience members can volunteer to make a short speech based on a topic given on the spot. These range in length from 30 seconds to 3 minutes. No one is forced to participate.</li>
					<li><strong>Evaluations</strong>: Assessments are given for each of the speakers before the club.</li>
					<li><strong>Announcements</strong>: Club business and/or other announcements.</li>
				</ol>
			</div>   <!-- end six column-->	
      



	 	</div> <!-- end twelve column-->

      </div>  <!-- row -->

     </div> <!-- container-overlap -->

    </div>  <!-- container -->



<?php include($dir_path .'/includes/foundation.js.php'); ?>
  <!-- top menu selector --> 
  <script src="/javascripts/custom/top.level.menu.selector.js"></script>

  <script>
	$(document).ready(function() {


	        
        $(window).load(function() {
	       $("#thewatermark").orbit();
	   });

	});
</script>


</body>
</html>

