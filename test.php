
 <?php 

    include('includes/header.php'); 

    $dir_path = dirname(__FILE__);
    $meetup_controller_file = $dir_path.'/controllers/meetup_panorama.php';

    if (file_exists($meetup_controller_file))
    {
     include($meetup_controller_file); 
    }
  ?>



<?php include('includes/footer.php'); ?>
