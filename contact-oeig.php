
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
        <div class="four columns">
          <h3 class="show-for-large-up">Contact Info</h3>
          <h3 class="show-for-medium-down"><small>Contact Info</small></h3>
          
                <p>The Watermark at Logan Square<br/>
                  **4th floor**<br/>2 Franklin Town Blvd<br/>
      Philadelphia, PA 19103</p>

        Email: vpm-9669@toastmastersclubs.org<br>
        Web: panoramatoastmasters.org</p>
        </div>
         <div class="eight columns">
            <form action="http://ec2-107-20-252-228.compute-1.amazonaws.com/php/contact-send.php" class="custom" method="post">
             
              <div class="six columns">
               <h3 class="show-for-large-up">Keep in touch</h3>
               <h3 class="show-for-medium-down"><small>Keep in touch</small></h3>

              <!-- Last Name -->
               <label class="show-for-large-up">Name</label>
                <input class="show-for-large-up" id="name" name="name" type="text"></input>
                <input class="show-for-medium-down" id="name" name="name" type="text" placeholder="Name"></input>

              <!-- Email Address -->
                <label class="show-for-large-up">Email Address</label>
                <input class="show-for-large-up" id="email" name="id" type="text"></input>
                <input class="show-for-medium-down" id="email" name="id" type="email" placeholder="Email Address"></input>

              <!-- Email Address -->
                <label class="show-for-large-up">Subject</label>
                <input class="show-for-large-up" id="subject" name="subject" type="text"></input>
                <input class="show-for-medium-down" id="subject" name="subject" type="text" placeholder="Subject"></input>


              <!-- Comments -->
                <label class="show-for-large-up">Comments</label>
                <textarea class="show-for-large-up" id="comments" name="comments" rows="10"></textarea>
                <textarea class="show-for-medium-down" id="comments" name="comments" placeholder="Comments" rows="5"></textarea>

                <div class="hidden">
                  <label for="contact-spam-check">Do not fill out this field:</label>
                  <input name="spam-check" type="text" value="" id="contact-spam-check" />
                </div>

                <input type="submit" class="large blue button" value="Submit">
                <br/>
            </form>

             </div> 
               <div class="six columns"/>


            </form>
          </div>
      </div>  <!-- row -->

     </div> <!-- container-overlap -->

    </div>  <!-- container -->



<?php include($dir_path .'/includes/foundation.js.php'); ?>
  <!-- top menu selector --> 
  <script src="/javascripts/custom/top.level.menu.selector.js"></script>
  <script>document.write('<script src="javascripts/custom/jquery-1.7.1.min.js"><\/script>')</script>

</body>
</html>

