
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
                President Calls Meeting to Order
          </td>
          <td>
              Ger O'Sullivan (Aaron Beverly - substituting)
           </td>
        </tr>
        <tr>
          <td>
          </td>
          <td>
            Introduces the Toastmaster
          </td>
          <td>
          Jeff Maher
          </td>
        </tr>
        <tr>
          <td>
          </td>
          <td>
            Theme
          </td>
          <td>
             Succint
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
          Kai Syvertsen
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
           <a href="mailto:vped-9669@toastmastersclubs.org?subject=Accept Grammerian Role"><span class="has-tip tip-top" data-width="90" title="Click to accept role"><span class="success label">TBD</span></span></a>
          </td>
        </tr>        
        <tr>
          <td>
          </td>
          <td>
            Timer
          </td>
          <td>
           <a href="mailto:vped-9669@toastmastersclubs.org?subject=Accept Timer Role"><span class="has-tip tip-top" data-width="90" title="Click to accept role"><span class="success label">TBD</span></span></a>
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
              <h6>
 Jim Lockwood
              </h6>
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Title:
          </td>
           <td>
             2nd Speech (Competent Communicator)
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Objective:
          </td>
           <td>
            Get To The Point
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

          <tr>
          <td>
            Evaluator #1
          </td>
          <td>
         Nathaniel Brouhard

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
             <h6>
           Amy Chan
           </h6>
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Title:
          </td>
          <td>
           Icebreaker
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Objective:
          </td>
          <td>
            Introductory Speech
          </td>
        </tr> 
        <tr>
          <td class="foo">
            Time:
          </td>
           <td>
              4-6 mins
          </td>
        </tr> 
                  <tr>
          <td>
            Evaluator #2
          </td>
          <td>
          Isabel Brouhard

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
             <h6>
           Jay Roth
           </h6>
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Title:
          </td>
          <td>
           Icebreaker
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Objective:
          </td>
          <td>
            Introductory Speech
          </td>
        </tr> 
        <tr>
          <td class="foo">
            Time:
          </td>
           <td>
              4-6 mins
          </td>
        </tr> 

                  <tr>
          <td>
            Evaluator #3
          </td>
          <td>
          Amol Joshi 

          </td>
        </tr>

      </table>   

      <!-- Speaker Table Format --> 
  <table class="twelve speaker">
        <tr>
          <td class="foo">
            Speaker #4:
          </td>
           <td>
             <h6>
           Aaron Beverly
           </h6>
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Title:
          </td>
          <td>
           What it's all about.....
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Objective:
          </td>
          <td>
            The Entertaining Speech (Advanced Manual) 
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

                  <tr>
          <td>
            Evaluator #4
          </td>
          <td>
          Peter Chan

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
            <a href="mailto:vped-9669@toastmastersclubs.org?subject=Sumbit for Table Topics Role"><span class="has-tip tip-top" data-width="90" title="Click to accept role"><span class="success label">TBD</span></span></a>             
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
            President Makes Closing Remarks. Welcomes Guests, and Meeting Adjourns
          </td>
          <td>
            Ger O'Sullivan
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

