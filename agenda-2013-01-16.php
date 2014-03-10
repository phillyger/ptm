
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
        <div class="one columns centered">
          <h1>Agenda</h1>    
        </div>
        <div class="seven columns centered">
            <p><?php $convert_utc_date= date(DATE_W3C, $curEvt["time"]/1000);
              echo date('l\, jS \of F h:i A', strtotime($convert_utc_date)) ?></p>
        </div>

      </div>  <!-- row -->

      <table class="twelve">
        <tr>
          <td>
            7:30 PM
          </td>
          <td>
                Vice President Calls Meeting to Order
          </td>
          <td>
                Kai Syvertsen
           </td>
        </tr>
        <tr>
          <td>
          </td>
          <td>
            Introduces the Toastmaster
          </td>
          <td>
           Ger O'Sullivan
          </td>
        </tr>
        <tr>
          <td>
          </td>
          <td>
            Theme
          </td>
          <td>
             Do one thing every day that scares you
          </td>
        </tr>  


        <!-- Next Section -->

        <tr>
          <td>
            7:40 PM
          </td>
          <td>
                Toastmaster Introduces:- 
          </td>
          <td>
                
           </td>
        </tr>
        <tr>
          <td>
          </td>
          <td>
            General Evaluator
          </td>
          <td>
           <a href="mailto:vped-9669@toastmastersclubs.org?subject=Accept General Evaluator Role"><span class="has-tip tip-top" data-width="90" title="Click to accept role"><span class="success label">TBD</span></span></a>            
          </td>
        </tr>
        <tr>
          <td>
          </td>
          <td>
            Ah-Counter
          </td>
          <td>
           <a href="mailto:vped-9669@toastmastersclubs.org?subject=Accept Ah-Counter Role"><span class="has-tip tip-top" data-width="90" title="Click to accept role"><span class="success label">TBD</span></span></a>
          </td>
        </tr>  
        <tr>
          <td>
          </td>
          <td>
            Grammerian
          </td>
          <td>
            Peter Chan
          </td>
        </tr>        
        <tr>
          <td>
          </td>
          <td>
            Timer
          </td>
          <td>
           Maria Soltero-Rivera 
          </td>
        </tr>  

        <tr>
          <td>
            8:00 PM
          </td>
          <td>
            Toastmaster Introduces Evaluators &amp; Speakers
          </td>
          <td>
          </td>
        </tr> 

      </table>


<!-- Speaker Table Format --> 
  <table class="twelve speaker">
        <tr>
          <td class="foo">
            Speaker #1:
          </td>
           <td>
              <h6>Aaron Beverly</h6>
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Title:
          </td>
          <td>
           <h6>Panorama Speech Contest</h6>
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Objective:
          </td>
          <td>
           <p>Encourage membership</P>
            <p>Using an innovative approach to engage members of the club to particapate through gamification.</p>
          </td>
        </tr> 
        <tr>
          <td class="foo">
            Time:
          </td>
          <td>
           5-7 mins
          </td>
        </tr> 

      </table> 

 <!-- Speaker Table Format --> 
  <table class="twelve speaker">
        <tr>
          <td class="foo">
            Speaker #2:
          </td>
           <td>
              <h6>Joseph Pinckney</h6>
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Title:
          </td>
           <td>
              <h6>The Road Not Taken</h6>
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Objective:
          </td>
           <td>
              <p>Organize your speech (2nd speech, basic manual).</p>
              <p>Good speech organization is essential if your audience is to understand your presentation. 
                You must take the time to put your ideas together in an orderly manner. 
                You can organize your speech in several different ways; choose the outline that best suits your topic. 
                The opening should catch the audience’s attention, the body must support the idea you want to convey, 
                and the conclusion should reinforce your ideas and be memorable. Transitions between thoughts should be smooth.</p>
          </td>
        </tr> 
        <tr>
          <td class="foo">
            Time:
          </td>
           <td>
              5-7 mins
          </td>
        </tr> 

      </table>   



<!-- Speaker Table Format --> 
  <table class="twelve speaker">
        <tr>
          <td class="foo">
            Speaker #3:
          </td>
           <td>
              <h6>Ibn Abdul-Khaahliq</h6>
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Title:
          </td>
          <td>
           <h6>Never quit</h6>
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Objective:
          </td>
          <td>
           <p>How to Say It:</p> 

           <p>Words are powerful. They convey your message and influence the audience and its perception of you. 
           Word choice and arrangement need just as much attention as speech organization and purpose. 
           Select clear, accurate, descriptive and short words that best communicate your ideas and arrange them 
           effectively and correctly. Every word should add value, meaning, and punch to the speech.</p>
          </td>
        </tr> 
        <tr>
          <td class="foo">
            Time:
          </td>
           <td>
              5-7 mins
          </td>
        </tr> 

      </table>       


      <table class="twelve">
        <tr>
          <td>
            8:30 PM
          </td>
          <td>
                Toastmaster Introduces Table Topics Master
          </td>
          <td>
                Nathaniel Brouhard
           </td>
        </tr>
        <tr>
          <td>
            8:45 PM
          </td>
          <td>
            Toastmaster Introduces the General Evaluator
          </td>
          <td>
<a href="mailto:vped-9669@toastmastersclubs.org?subject=Accept General Evaluator Role"><span class="has-tip tip-top" data-width="90" title="Click to accept role"><span class="success label">TBD</span></span></a>            
          </td>
        </tr>
        <tr>
          <td>
          </td>
          <td>
            Evaluator #1
          </td>
          <td>
            Kai Syvertsen
          </td>
        </tr>  
          <tr>
          <td>
          </td>
          <td>
            Evaluator #2
          </td>
          <td>
            Jane Murray
          </td>
        </tr>
        <tr>
          <td>
          </td>
          <td>
            Evaluator #3
          </td>
          <td>
            Harvey Benschoter 
          </td>
        </tr>

        <tr>
          <td>
          </td>
          <td>
            Timer, Ah-Counter, Grammarian, General Evaluator provides meeting &amp; leader evaluations
          </td>
          <td>
            &nbsp;
          </td>
        </tr>
        <tr>
          <td>
            9:00 PM
          </td>
          <td>
            Vice President Makes Closing Remarks. Welcomes Guests, and Meeting Adjourns
          </td>
          <td>
            Kai Syvertsen
          </td>
        </tr>
      </table>

     </div> <!-- container-overlap -->
    </div>  <!-- container -->



<?php include($dir_path .'/includes/foundation.js.php'); ?>
  <!-- top menu selector --> 
  <script src="/javascripts/custom/top.level.menu.selector.js"></script>
  <script src="javascripts/custom/contact.form.js"></script>

</body>
</html>

