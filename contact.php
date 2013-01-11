
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

       <div class="row">
        <div class="four columns hide-for-small">
          <h3>Contact Info</h3>
          <!-- <h3 class="show-for-medium-down"><small>Contact Info</small></h3> -->
          
                <p>The Watermark at Logan Square<br/>
                  **4th floor**<br/>2 Franklin Town Blvd<br/>
      Philadelphia, PA 19103</p>

        Email: vpm-9669@toastmastersclubs.org<br>
        Web: panoramatoastmasters.org</p>
        </div> <!-- end fourcolumns-->

         <div class="eight columns">
             <div class="six columns end">
                <div id="contact_form">
                  <form name="contact" method="post" action="">
                  
                     <h3 class="show-for-large-up">Keep in touch</h3>
                     <h3 class="show-for-medium-down"><small>Keep in touch</small></h3>

                    <!-- Last Name -->
                     <label>Name</label>
                      <input id="name" name="name" type="text"></input>
                      <label class="error" for="name" id="name_error">This field is required.</label>

                    <!-- Email Address -->
                      <label>Email Address</label>
                      <input id="email" name="email" type="email"></input>
                      <label class="error" for="name" id="email_error">This field is required.</label>

                    <!-- Email Address -->
                      <label>Subject</label>
                      <input id="subject" name="subject" type="text"></input>
                      <label class="error" for="name" id="subject_error">This field is required.</label>


                    <!-- Comments -->
                      <label>Comments</label>
                      <textarea id="message" name="message" rows="10"></textarea>
                      <label class="error" for="name" id="message_error">This field is required.</label>

                      <div style="display:none">
                        <label for="contact-spam-check">Do not fill out this field:</label>
                        <input name="spam-check" type="text" value="" id="contact-spam-check" />
                      </div>

                      
                      
                      <input type="submit" class="large blue button" name="submit" id="submit_btn" value="Submit">
                      

                     
                  </form>
                   <br/>

                </div> <!-- end contact_form-->
             </div> <!-- end eight columns-->
        </div> <!-- end eight columns-->

      </div>  <!-- row -->




     </div> <!-- container-overlap -->

    </div>  <!-- container -->



<?php include($dir_path .'/includes/foundation.js.php'); ?>
  <!-- top menu selector --> 
  <script src="/javascripts/custom/top.level.menu.selector.js"></script>
  <script src="javascripts/custom/contact.form.js"></script>

</body>
</html>

