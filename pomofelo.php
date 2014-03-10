
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
        	<div class="twelve columns center">
        		<h2 align="center">Every1Here</h2>
        		<h2 align="center" class="subheader">Attendance Tracking &amp; Agenda Management App</h2>
        		<p><strong>Every1Here</strong> is a mobile app developed for an audience of meeting facilitators. Providing app users with the ability to track attendance and manage meeting agendas gives meeting facilitators a powerful advantage.</p>

        		<p>Previously, a group of meeting facilitors would send several emails, back and forth, to finalize an agenda. This agenda would then have to be updated on the company/club website. No sooner would the agenda be updated
        			on the website, then one of the participants has to cancel at the last minute. Oh no! another update cycle. Bill emails Jane, who then emails Ted, our web developer...you get the idea.</p>

        		<p>By approaching this issue with a different pair of eyes, <strong>Every1Here</strong> allows multiple meeting facilitators to make real-time updates to agenda roles via multiple devices.<p>

        		<p>In plain English, this means that when Bill updates the app agenda on his device, Jane automatically sees the change on her device. Jane no longer needs to update Ted anymore since the agenda is automatically updated on the website too. Have awesome is that! Ted is one happy web developer</p>

        		<p>As for those last minute changes to the agenda, no problem. A couple of clicks in Every1Here and everything is in sync.</p>

        		<p><strong>Every1Here</strong> has a complimentary Members-only application - titled <strong>Every1Speaks</strong>. <strong>Every1Speaks</strong> is currently in development, with an initial deployment in <strong>Android</strong>, followed by <strong>iOS</strong>.</p>

				<p><strong>Every1Speaks</strong> will offer member-only login and progress tracking review information. Check back soon for more information.</p>
        	</div>	
    	</div>

      <div class="row">
        <div class="twelve columns">
        	


			<div class='six columns'>
				
				<h2>Event Tracking</h2>

				<p>Provides a list of upcoming and past meeting events.</p>

				<p>Using the information already available via Meetup.com, the app retrieves the future events specific to this club. The view allows the officers easy access to event information.</p>

				<img src="/images/e1h/e1h_events_upcoming.png"/>
				
				
				</p>
			</div>
			<div class='six columns'>
				<h2>Member Information</h2>

				<p>Provides a listing of all current members of the club.</p>

				<p>The view also displays the number of speeches each member has completed, along with the duration of time since the member has last given a speech.</p>

				<img src="/images/e1h/e1h_member_attendance.png"/>

			</div>


        </div> <!-- end twelve column-->
       </div>  <!-- row hide-for-small-->

       <div class="row">
	 	<div class="twelve columns">


			<div class="six columns">

				<h2>Progress Tracking</h2>

				<p>Provides officers the ability to register member's attendance.</p>

				<p>The view also allows the officer to track the role or roles that the member fullfills for that specific event. </p>

					<img src="/images/e1h/e1h_member_details.png"/>


			</div>   <!-- end six column-->	


	 		<div class="six columns" style="height:400px;">
	 			<h2>Progress Tracking - Cont.</h2>

	 			<p>Provides officers the ability to register speaker &amp; evaluator info.</p>
		 		
		 		<p>If the member is giving a speech, the speech information, along with the evaluator information is captured also.</p>

		 		<img src="/images/e1h/e1h_member_details_more.png"/>

			</div>   <!-- end six column-->	

	 	</div> <!-- end twelve column-->

      </div>  <!-- row -->


       <div class="row">
	 	<div class="twelve columns">
			<div class='six columns'>
				<h2>Guest Attendance</h2>

				<p>Panorama value the attendance of all our guests. The effort and time a guest takes to attend one of our meetings should and is recognized. </p>

				<p>Aside from our customary acknowlegdement of our guests at each meeting, we encourage them to use the app to mark their attendance and provide us with their name and email address</p>

				<p>As president, I want to be able to see the beginning of each member (or future members) journey. By having a digital timeline of attendance, for both members and guests, we can recognize when each
					person attended, how often and in which participatory role.</p> 

				<p>Being able to follow-up on a guest's attendance is important for the following reasons
					<ul>
						<li>recognizing their presence at the meeting</li>
						<li>providing them with any additional support our club can offer.</li>
					</ul>
				</p>

				<p>Bonus: Having the app avoids confusion when it comes to deciphering email addresses :-)</p>

				<img src="/images/e1h/e1h_guest_attendance.png"/>
			</div>   <!-- end six column-->	

			<div class='six columns'>

				<h2>Guests via Meetup.com</h2>

				<img src="/images/e1h/e1h_guest_attendance_meetup.png"/>

	
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

