
 <?php 

    $dir_path = dirname(__FILE__);

    include($dir_path.'/includes/header.php');

  ?>


 <!-- container -->
  <div class="container ">
    <div class="container-overlap">
  		<div class="row">
  			<div class="twelve columns faqs">
	  			<h1 class="show-for-large-up">Frequently Asked Questions</h1>
	  			<h1 class="show-for-medium"><small>Frequently Asked Questions</small></h1>
	  			<h3 class="show-for-small"><small>Frequently Asked Questions</small></h3>
	  			<dl>
	  				<dt>
	  					I would like to check out a Panorama Toastmasters meeting. What should I do?
	  				</dt>

	  				<dd>
	  					<p>
	  					As a guest, it is absolutely <strong>FREE</strong> to attend. Guests are welcome to attend any of our scheduled 
	  					meetings (click <a href="/meetings.php">here</a> to see upcoming meeting). 
	  					We strongly encourage you to check out one of our regular meetings. Feel free to bring along a friend or two.
	  					</p>
	  				</dd>

					<dt>
						What if I decide to join Toastmasters? Is there a membership fee?
					</dt>

					<dd><p>
						Having attended one or two of our Toastmasters meetings as a guest and have made a decision that you would like to join, 
						the next step is to contact our <a href="/executive-committee.php">VP of Membership</a>, Jeff Maher or send an email 
						indicating your interest to join to the following address <a href="mailto:vpm-9669@toastmastersclubs.org">vpm-9669@toastmastersclubs.org</a>. 
						</p>
						<p>
						<a href="http://www.Toastmasters.org">Toastmasters</a> is a non-profit organization. 
						In order to operate successfully, the organization charges a bi-annual fee for membership. 
						Members pay dues every <strong>6 months(~$40-$45)</strong> which cover national, 
						as well as local operating costs. There is also a one-time initial membership fee of $20, 
						which goes goes towards your new member materials (manuals, etc). The manuals consist of a 
						competent communicator workbook, along with a leadership workbook. Together the two workbooks 
						provide a comprehensive knowledge-base from which to grow and develop your communication and 
						leadership skills.
						</p>
						<p>	
						** Note that dues may be <strong>tax deductible</strong> as a work-related expense (check with your accountant). 
						In addition, we encourage you to ask your employer about sponsoring you as a toastmaster, 
						as the cost is significantly cheaper relative to other professional development programs.
						</p>
					</dd>
					<dt>How many people usually attend meetings?</dt>
					<dd><p>Meeting attendance varies but typically there are around ~15-20 people who attend meetings each week. It is a very low pressure, supportive environment.</p></dd>
					<dt>I am really bad at public speaking. Will I embarrass myself as new person?</dt>
					<dd><p>No way! People who join Toastmasters do so because they want to work on their public speaking. We have a supportive environment and we all remember our first time speaking where many of us probably had similar concerns. Our members vary widely in their experience but we all do our best to help each other become better speakers. I bet you are not as bad as you think!</p></dd>
					<dt>Am I pressured or forced to do anything as a member of Toastmasters?</dt>

					<dd>
						<p>
						Very simply and boldy, <strong>No</strong>. While there are tasks and speeches outlined in the Toastmasters manual that we 
						encourage members to complete, it is very much up to you what you want to get out of the club. 
						You are welcome to go at your own pace and focus on whatever development areas you wish. 
						</p>
					</dd>


					<dt>Where does the name Panorama come from?</dt>

					<dd><p>
						The club was originally founded in the Panorama room of 1500 Locust St. While we now meet at the Watermark, 
						we keep the name to reflect the heritage of the club.
						</p>
					</dd>

	  			</dl>
	  			
	  			
	  			

			</div> <!-- end one columns -->
		<div> <!-- row --> 
     </div> <!-- container-overlap -->
    </div>  <!-- container -->

    <?php include($dir_path .'/includes/foundation.js.php'); ?>


 <!-- top menu selector --> 
  <script src="/javascripts/custom/top.level.menu.selector.js"></script>

<script> 

$(document).ready(function(){
	dynamicFaq();
});

function dynamicFaq(){
	$('.faqs dd').hide();
	$('.faqs dt').bind('click', function(){
		$(this).toggleClass('open').next().slideToggle();

	});
}

</script>

</body>
</html>

