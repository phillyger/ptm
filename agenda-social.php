
 <?php 

    $dir_path = dirname(__FILE__);

    include($dir_path.'/includes/header_agenda.php');

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

      
       <div class="row">
        <div class="twelve columns centered">
          <h1>Social Evening - Open to All</h1>
          <h1 class="subheader">Con Murphy's Pub (upper floor)</h1>
          <h2 class="subheader">1700 Benjamin Franklin Pkwy, Philadelphia, PA 19103</h2>
           <h2 class="subheader">7PM - 9PM</h2>

            <h3 class="subheader">Members and Guests welcome.</h3>
          </div>
        </div>  <!-- row -->
    </div>  <!-- container-overlap -->
 </div>  <!-- container -->



<?php include($dir_path .'/includes/foundation.js.php'); ?>




  </body>

</html>