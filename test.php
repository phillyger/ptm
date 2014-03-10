
 <?php 

    include('includes/header.php'); 

    $dir_path = dirname(__FILE__);
    $meetup_controller_file = $dir_path.'/controllers/meetup_panorama.php';

    if (file_exists($meetup_controller_file))
    {
     include($meetup_controller_file); 
    }
  ?>

<!-- container -->
  <div class="container">
    <div class="container-overlap home">

	<a href="/pdf/Certificate.pdf">Click to Download PDF</a>

      
    </div>  <!-- container-overlap -->



  </div><!-- container -->

<?php include('includes/footer.php'); ?>
