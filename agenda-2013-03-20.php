
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
                Rob Chesnick
           </td>
        </tr>
        <tr>
          <td>
          </td>
          <td>
            Introduces the Toastmaster
          </td>
          <td>
           Stacey Greene
          </td>
        </tr>
        <tr>
          <td>
          </td>
          <td>
            Theme
          </td>
          <td>
             &nbsp;
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
           Edna Smith
          </td>
        </tr>
        <tr>
          <td>
          </td>
          <td>
            Ah-Counter
          </td>
          <td>
           Ger O'Sullivan
          </td>
        </tr>  
        <tr>
          <td>
          </td>
          <td>
            Grammerian
          </td>
          <td>
           Ger O'Sullivan
          </td>
        </tr>        
        <tr>
          <td>
          </td>
          <td>
            Timer
          </td>
          <td>
          Joseph Pinckney
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
 David Slobtkin
              </h6>
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Title:
          </td>
           <td>
              Sports = Success
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Objective:
          </td>
           <td>
            Speech #3 - Get To The Point
          </td>
        </tr> 
        <tr>
          <td class="foo">
            Time:
          </td>
           <td>
             5-7 minutes
          </td>
        </tr> 
        <tr>
          <td class="foo">
            Evaluator:
          </td>
           <td>
             Peter Chan
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
            Jamie Goslee
             </h6>
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Title:
          </td>
          <td>
           Opening Arguments
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Objective:
          </td>
          <td>
            &nbsp;
          </td>
        </tr> 
        <tr>
          <td class="foo">
            Time:
          </td>
           <td>
              5-7 minutes
          </td>
        </tr> 
        <tr>
          <td class="foo">
            Evaluator:
          </td>
           <td>
             Nathanael Brouhard
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
           Kai Syvertsen
         </h6>
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Title:
          </td>
          <td>
           The Adventure: BHAG revisited
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Objective:
          </td>
          <td>
&nbsp;
          </td>
        </tr> 
        <tr>
          <td class="foo">
            Time:
          </td>
           <td>
              5-7 minutes
          </td>
        </tr> 
        <tr>
          <td class="foo">
            Evaluator:
          </td>
           <td>
          Jeff Maher

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
            8:45 PM
          </td>
          <td>
            Toastmaster Introduces the General Evaluator
          </td>
          <td>
          Edna Smith
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
            Rob Chesnick
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

