
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
        <div class="centered columns">
          <h1 style="text-align:center">Panorama International Speech Contest</h1> 
          <h1 style="text-align:center">and</h1>
          <h1 style="text-align:center">Evaluation Contest</h1>     
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
              Contest Chair Introduction
          </td>
          <td>
              Aaron Beverly
           </td>
        </tr>
        <tr>
          <td>
          </td>
          <td>
            
          </td>
          <td>
          
        </td>
        </tr>
        <tr>
          <td>
            7:40 PM
          </td>
          <td>
                Chair Contest Starts Meeting With Table Topics
          </td>
          <td>
            Aaron Beverly
           </td>
        </tr>

        <!-- Next Section -->

        <tr>
          <td>
            7:40 PM
          </td>
          <td>
                Chief Judge Instructs Judges/Timers/Ballot Counters
          </td>
          <td>
              Position Taken
           </td>
        </tr>
        <tr>
          <td>
          </td>
          <td>
            Judge #1
          </td>
          <td>
           Position Taken
          </td>
        </tr>
        <tr>
          <td>
          </td>
          <td>
            Judge #2
          </td>
          <td>
          Position Taken
        </td>
        </tr>  
        <tr>
          <td>
          </td>
          <td>
            Judge #3
          </td>
          <td>
            Position Taken
          </td>
        </tr>
        <tr>
          <td>
          </td>
          <td>
            Judge #4
          </td>
          <td>
            Position Taken
          </td>
        </tr>         
        <tr>
          <td>
          </td>
          <td>
            Timer #1
          </td>
          <td>
          Position Taken 
          </td>
        </tr>  
        <tr>
          <td>
          </td>
          <td>
            Timer #2
          </td>
          <td>
           Position Taken
          </td>
        </tr>  

        <tr>
          <td>
          </td>
          <td>
            Ballot Counter #1
          </td>
          <td>
           Position Taken
          </td>
        </tr>  


        <tr>
          <td>
          </td>
          <td>
            Ballot Counter #2
          </td>
          <td>
         Position Taken
          </td>
        </tr>  
 

        <tr>
          <td>
            8:00 PM
          </td>
          <td>
            Contest Chair Introduces Speech Contest &amp; Evaluation Contest Participants
          </td>
          <td>
          </td>
        </tr> 

      </table>



 <!-- Speaker Table Format --> 
  <table class="twelve speaker">
        <tr>
          <td class="foo">
            Speech Contestant #1:
          </td>
           <td>
              <h6>
                Mark Margulies 
              </h6>
          </td>
        </tr> 

      </table>   


 <!-- Speaker Table Format --> 
  <table class="twelve speaker">
        <tr>
          <td class="foo">
            Speech Contestant #2:
          </td>
           <td>
              <h6>
                Jim Lockwood
              </h6>
          </td>
        </tr> 

      </table> 

 <!-- Speaker Table Format --> 
  <table class="twelve speaker">
        <tr>
          <td class="foo">
            Evaluator Contestant #1:
          </td>
           <td>
              <h6>
                Amol Joshi
              </h6>
          </td>
        </tr> 

      </table> 



      <table class="twelve">
        <tr>
          <td>
          </td>
          <td>
            Judges present results
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

