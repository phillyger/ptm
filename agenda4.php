
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



    <!-- E1H App Interface -->

    <div id="agendaapp">
      <div class="title">
        <h1>Every1Here Attendance</h1>
      </div>

      <div class="content">
      </div>
    </div>

    <div id="credits">
      Powered by <a href="https://www.parse.com">Parse</a> using the <a href="https://www.parse.com/docs/js_guide">JavaScript SDK</a>
    </div>

    <!-- Templates -->

    <script type="text/template" id="manage-agendaList-template">
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
              Ger OSullivan
           </td>
        </tr>


         <tr id="agenda-toastmaster-list"></tr>


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



        <tr id="agenda-general-evaluator-list"></tr>

        <tr id="agenda-table-topics-master-list"></tr>

        <tr id="agenda-timer-list"></tr>

        <tr id="agenda-ah-counter-list"></tr>

        <tr id="agenda-grammarian-list"></tr>



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


      <table class="twelve">

         <!-- <tr id="agenda-table-topics-master-list"></tr> -->

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
            Ger OSullivan
          </td>
        </tr>
      </table>
</script>

     </div> <!-- container-overlap -->
    </div>  <!-- container -->



    <script type="text/template" id="item-toastmaster-template">

          <td>
          </td>
          <td>
            Introduces the Toastmaster
          </td>
          <td>
           <%= username %>
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

    </script>


    <script type="text/template" id="item-generalEvaluator-template">
          <td>
          </td>
          <td>
            General Evaluator
          </td>
          <td>
            <%= username %>
          </td>
    </script>


    <script type="text/template" id="item-ahCounter-template">

          <td>
          </td>
          <td>
            Ah-Counter
          </td>
          <td>
            <%= username %>
          </td>

    </script>



    <script type="text/template" id="item-grammarian-template">

          <td>
          </td>
          <td>
            Grammarian
          </td>
          <td>
            <%= username %>
          </td>

    </script>

    <script type="text/template" id="item-timer-template">

          <td>
          </td>
          <td>
            Timer
          </td>
          <td>
            <%= username %>
          </td>

    </script>

    <script type="text/template" id="item-tableTopicsMaster-template">

          <td>
            8:30 PM
          </td>
          <td>
                Toastmaster Introduces Table Topics Master
          </td>
          <td>
              <%= username %>       
           </td>

    </script>


     <script type="text/template" id="item-speakerTemplate">

      <tr>
        <td >
          Speaker:
        </td>
         <td>
            <h6>
              <%= username %>
            </h6>
        </td>
      </tr> 

      <tr>
        <td >
          Speech Number:
        </td>
         <td>
            <h6>
             <%= speechInfo.projectNum %>.  <%= speechInfo.projectTitle %>
            </h6>
        </td>
      </tr> 

      <tr>
        <td>
          Title:
        </td>
         <td>
            <h6>
              <%= speechInfo.speechTitle %>
            </h6>
        </td>
      </tr> 

      <tr>
        <td>
          Summary:
        </td>
         <td>
            <%= speechInfo.summary %>
        </td>
      </tr> 

      <tr>
        <td>
          Objectives:
        </td>
         <td>
            <% speechInfo.objectives.forEach(function (item) { %>
                 <%= item %> <br/>
            <% }); %>
        </td>
      </tr> 

      <tr>
        <td>
          Time:
        </td>
         <td>
             <%= speechInfo.speechLength %>
        </td>
      </tr> 

        <tr>
        <td>
          Evaluator
        </td>
        <td>
            <%= speechInfo.evaluatorName %>
        </td>
      </tr>


    </script>



<?php include($dir_path .'/includes/foundation.js.php'); ?>
  <!-- top menu selector --> 
  <script src="/javascripts/custom/top.level.menu.selector.js"></script>
  <script src="javascripts/custom/contact.form.js"></script>

</body>
</html>

