
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
           <a href="mailto:vped-9669@toastmastersclubs.org?subject=Accept Toastmaster Role"><span class="has-tip tip-top" data-width="90" title="Click to accept role"><span class="success label">TBD</span></span></a>
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
           Leslie Sink
          </td>
        </tr>
        <tr>
          <td>
          </td>
          <td>
            Ah-Counter
          </td>
          <td>
           Maria-Soltero Rivera
          </td>
        </tr>  
        <tr>
          <td>
          </td>
          <td>
            Grammerian
          </td>
          <td>
           Peter Chan
          </td>
        </tr>        
        <tr>
          <td>
          </td>
          <td>
            Timer
          </td>
          <td>
           Weidi Martinez
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
                Rob Chesnick
              </h6>
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Title:
          </td>
           <td>
            
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
              5-7 mins
          </td>
        </tr> 

          <tr>
          <td>
            Evaluator #1
          </td>
          <td>
            
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
                Andrea Blassingame
              </h6>
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Title:
          </td>
           <td>
            
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
              5-7 mins
          </td>
        </tr> 

          <tr>
          <td>
            Evaluator #2
          </td>
          <td>
            
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
                Isabel Brouhard
              </h6>
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Title:
          </td>
           <td>
            
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Objective: Get To The Point
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
              5-7 mins
          </td>
        </tr> 

          <tr>
          <td>
            Evaluator #3
          </td>
          <td>
            
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
                Albi Dhimitri
              </h6>
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Title: #5. Climate Change
          </td>
          <td>
           &nbsp;
          </td>
        </tr> 

        <tr>
          <td class="foo">
           
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
              5-7 mins
          </td>
        </tr> 

<tr>
          <td>
            Evaluator #4
          </td>
          <td>
          
          </td>
        </tr>

      </table>   

<!-- Speaker Table Format --> 
  <table class="twelve speaker">
        <tr>
          <td class="foo">
            Speaker #5:
          </td>
           <td>
               <h6>
                Kai Syvertsen
              </h6>
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Title:  Speech #10 - Exposure
          </td>
          <td>
           &nbsp;
          </td>
        </tr> 

        <tr>
          <td class="foo">
             Objective: To inspire an audience
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
              &nbsp;
          </td>
        </tr> 
                  <tr>
          <td>
            Evaluator #5
          </td>
          <td>
        Jeff Maher
          </td>
        </tr>

      </table>       

<!-- Speaker Table Format --> 
  <table class="twelve speaker">
        <tr>
          <td class="foo">
            Speaker #6:
          </td>
           <td>
              <h6>
                Ger O'Sullivan
              </h6>
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Title: Speech #10 - In The Loop
          </td>
          <td>
           
          </td>
        </tr> 

        <tr>
          <td class="foo">
             Objective: To inspire an audience
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
              
          </td>
        </tr> 

                  <tr>
          <td>
            Evaluator #6
          </td>
          <td>
          <a href="mailto:vped-9669@toastmastersclubs.org?subject=Accept Evaluator Role"><span class="has-tip tip-top" data-width="90" title="Click to accept role"><span class="success label">TBD</span></span></a>            

          </td>
        </tr>

      </table>   


      <!-- Speaker Table Format --> 
  <table class="twelve speaker">
        <tr>
          <td class="foo">
            Speaker #7:
          </td>
           <td>
              <h6>
               Stacey Greene
              </h6>
          </td>
        </tr> 

        <tr>
          <td class="foo">
            Title:
          </td>
          <td>
           &nbsp;
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
              &nbsp;
          </td>
        </tr> 

                  <tr>
          <td>
            Evaluator #7
          </td>
          <td>
          <a href="mailto:vped-9669@toastmastersclubs.org?subject=Accept Evaluator Role"><span class="has-tip tip-top" data-width="90" title="Click to accept role"><span class="success label">TBD</span></span></a>            

          </td>
        </tr>

      </table>   



      <!-- Speaker Table Format --> 
  <table class="twelve speaker">
        <tr>
          <td class="foo">
            Speaker #8:
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
           &nbsp;
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
              &nbsp;
          </td>
        </tr> 

                  <tr>
          <td>
            Evaluator #8
          </td>
          <td>
          <a href="mailto:vped-9669@toastmastersclubs.org?subject=Accept Evaluator Role"><span class="has-tip tip-top" data-width="90" title="Click to accept role"><span class="success label">TBD</span></span></a>            

          </td>
        </tr>

      </table>  

      <table class="twelve">
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

