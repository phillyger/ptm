
 <?php 

    $dir_path = $_SERVER['DOCUMENT_ROOT'];

    include($dir_path.'/includes/header.php'); 

    $meetup_controller_file = $dir_path.'/controllers/meetup_panorama.php';

    if (file_exists($meetup_controller_file))
    {
     include($meetup_controller_file); 
    }
  ?>


<?php include($dir_path . '/includes/foundation.js.php'); ?>

 <!-- Initialize Orbit Slider Activate Tabs - HomePage-->
  <script src="/javascripts/custom/orbit.slider.activate.tabs.js"></script>

 <!-- Initialize Orbit Slider Activate Tabs -->
  <script src="/javascripts/custom/mobile.reveal.menu.display.js"></script>
  
</body>
</html>