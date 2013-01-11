
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
         <h3>Panorama Toastmasters Membership Contest</h3>

         <h3 class="subheader">Contest Chair: Aaron Beverly</h3>


         <h5>Prizes</h5>
          <div class="row">
            <div class="four columns">
              <div class="panel radius">
                <h5>1st Place</h5>
                <p>Dues paid for <strong>1 year</strong></p>
              </div>
            </div>
            <div class="four columns">
              <div class="panel blue radius">
                <h5>2nd Place</h5>
                <p>Dues paid for <strong>6 months</strong></p>
              </div>
            </div>
            <div class="four columns">
              <div class="panel green radius">
                <h5>3rd Place</h5>
                <p>Your choice of <strong>3 advanced manuals</strong></p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="six columns">
              <div class="panel callout">
                <h5>Starts</h5>
                <p>December 2012</p>
              </div>
            </div>
            <div class="six columns">
              <div class="panel callout">
                <h5>Ends</h5>
                <p>June 30th, 2013</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="twelve columns">
               <h5>Objective</h5>
                <p>Have the most points by end of the contest</p>

               <h5>Who can Participate?</h5>
                <p>Members and guests (guests must sign up for the contest)</p>

                <h5> Earn Points</h5>
                   
                   <p>You earn points in the following ways<p/>
                    <dl class="tabs">
                      <dd class="active"><a href="#1pt">1 Point</a></dd>
                      <dd><a href="#5pt">5 Points</a></dd>
                      <dd><a href="#10pt">10 Points</a></dd>
                    </dl>
                    <ul class="tabs-content">
                        <li class="active" id="1ptTab">
                          <ul class="circle">
                            <li>
                              Awarded to participant for each guest who comes to the club with you (guest must make it clear that they are there because of the contest participant).
                            </li>
                            <li>
                              Awarded to participant for a free standing guest (explained below) who returns at the behest of a participant.
                            </li>
                            <li>
                              Awarded to participant whose guests visit multiple times. As long as they keep stating they are in the club because of the contest participant. (if it is not stated no point will be awarded).
                            </li>
                          </ul>
                        </li>
                      <li id="5ptTab">
                         <ul class="circle">
                           <li>
                              Awarded to 1 other participant if they encourage a guest to join and the guest acknowledges the participant's encouragement (no acknowledgement no points).
                              <blockquote>
                                <p>This means that if participant #1 brings in guest-A to the club but participant#2 encourages guest-A to join, then Participant#1 receives 11 points (1pt for guest + 10 for membership signup) and participant#2  receives 5 points for the "assist".
                                </p>
                              </blockquote>
                            </li>
                         </ul>
                      </li>
                      <li id="10ptTab">
                         <ul class="circle">
                           <li>
                              Awarded to a participant for each of their guests who <strong>join</strong> the club (guests can join at any point during the contest and still count as 10pts for the person who initially brought them into the club the first time).
                            </li>
                         </ul>
                      </li>
                    </ul>
                  </li>

                <h5>Rules</h5>

                <ul>
                  <li>
                    Participants are to accumulate points to win the grand prizes.
                  </li>
                  <li>
                    All <strong>current</strong> members of Panorama Toastmasters are automatically enrolled for the contest. 
                  </li>
                   <li>
                        A guest can only be at the club at the behest of <strong>1 participant only</strong>.
                  </li>
                  <li>
                    Former members not in current standing are considered guests.
                  </li>
                  <li>
                    Guests can participate in the contest but must sign up to do so.
                  </li>
                  <li>
                    Once a guest signs up for the contest he/she can no longer count as a point for another participant. 
                  </li>
                  <li>
                    Once a guest joins the club he/she is enrolled automatically in the contest if they haven't already and can no longer count as additional points for future meetings.
                    <blockquote>
                      <p> Example:  If participant#1 brings in guest-A and guest-A joins the club. Guest-A is enrolled for the contest and participant#1 gets 11 points for that day (1pt for guest + 10 for membership signup) but can no longer receive future points from guest-A.
                      </p>
                    </blockquote>
                  </li>
                  <li>
                    Guests who visit on their own accord or find the club because of the likes of Facebook, Toastmasters website, etc…are <strong>free standing guests</strong> and are not counted as points for anyone during their first visit. 
                  </li>
                  <li>
                    If it is discovered that a free standing guest is pressured or asked by a participant to state that they are present that day because of the participant, when they are in fact not, then no point will be awarded. If a point has been given it will be taken away at any point the fact is discovered during the contest.
                  </li>
                  <li>
                    A free standing guest can be invited to come back to the club by a participant and a point can be awarded upon their 2nd visit. The participant who initiates the 2nd visit for a free standing guest, will get the 10 points if the guest becomes a member.
                  </li>
                  <li>
                    No officers ( President, VP of Edu, VP of membership and VP of public relations, etc...) can use their officer title or duties to receive points.
                    <blockquote>
                      <p>Example:  If the VP of membership’s duty is to send an email thanking guests for their visit and encouraging them to return he/she cannot receive points for any return visits because it was due to officer duty. However if the VP of membership emails a personal friend and does not use their position or title then points can be rewarded. 
                      </p>
                    </blockquote>
                  </li>
                  <li>
                    <strong>All rules are subject to revision (any new rules will be announced in future meetings and/or emails)</strong>
                  </li>
                  <li>
                    <strong>All disputes and questions should be addressed to the contest chair.</strong>
                  </li>
                </ul>
                  

            </div>
          </div>
         


       </div>
      </div>
     </div> <!-- container-overlap -->
    </div>  <!-- container -->



<?php include($dir_path .'/includes/foundation.js.php'); ?>
  <!-- top menu selector --> 
  <script src="/javascripts/custom/top.level.menu.selector.js"></script>
  <script src="javascripts/custom/contact.form.js"></script>

</body>
</html>

