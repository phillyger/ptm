
 <?php 

    $dir_path = dirname(__FILE__);

    include($dir_path.'/includes/header.php');

  ?>


 <!-- container -->
  <div class="container">
    <div class="container-overlap">
      <div class="row">

       <div class="row">
        <div class="four columns">
          <h3>Aaron Beverly</h3>
          <!-- <h3 class="show-for-medium-down"><small>Contact Info</small></h3> -->
          
          <table class="twelve">
            <tbody>
              <tr>
                <td>Title:</td>
                <td>A Wolf &amp; a Story</td>
              </tr>
              <tr>
                <td>Recorded:</td>
                <td>December 5th, 2012</td>
              </tr>
              <tr>
                <td>Speech:</td>
                <td>3rd speech of the Story Telling Advanced Manual</td>
              </tr>
            </tbody>
          </table>
        </div> <!-- end fourcolumns-->

         <div class="eight columns">
             
                <div class="flex-video widescreen">
                   <iframe width="560" height="315" src="http://www.youtube.com/embed/BfRqYw9-OSQ" frameborder="0" allowfullscreen></iframe>
                </div>
        </div> <!-- end eight columns-->

      </div>  <!-- row -->




     </div> <!-- container-overlap -->

    </div>  <!-- container -->



<?php include($dir_path .'/includes/foundation.js.php'); ?>
  <!-- top menu selector --> 
  <script src="/javascripts/custom/top.level.menu.selector.js"></script>
  <script src="javascripts/custom/contact.form.js"></script>
  <script>
  $(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $("#video_container").fitVids();
  });
  </script>
</body>
</html>

