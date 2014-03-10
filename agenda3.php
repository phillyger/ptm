
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

    <!-- Todo App Interface -->

    <div id="agendaapp">

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

      
       <div class="row">
          <ul>
            <li>
              <div class="agenda-role">
                
                <label class="time-content">7:30 PM</label>
                <label class="title-content">President Calls Meeting to Order</label>
                <label class="userName-content">Ger O&apos;Sullivan</label>

              </div>
            </li>
          </ul>

          <ul id="agenda-toastmaster-list"></ul>

          <ul>
            <li>
              <div class="agenda-role">
                
                <label class="time-content"></label>
                <label class="title-content">Theme</label>
                <label class="theme-content"></label>

              </div>
            </li>
          </ul>

          <ul>
            <li>
              <div class="agenda-role">
                
                <label class="time-content">7:40 PM</label>
                <label class="title-content">Toastmaster Introduces:</label>
                <label class="theme-content"></label>

              </div>
            </li>
          </ul>

          <ul id="agenda-general-evaluator-list">
          </ul>
          <ul id="agenda-timer-list">
          </ul>
          <ul id="agenda-ah-counter-list">
          </ul>
          <ul id="agenda-grammarian-list">
          </ul>
          <ul id="agenda-ballot-counter-list">
          </ul>

          <ul>
            <li>
              <div class="agenda-role">
                
                <label class="time-content">7:50 PM</label>
                <label class="title-content">Toastmaster Introduces Evaluators &amp; Speakers</label>
                <label class="theme-content"></label>

              </div>
            </li>
          </ul>


                   

        </div>
        <div class="row">
          <div id="speaker-list"></div>
        </div>


        <div class="row">

          <ul id="agenda-table-topics-master-list">
          </ul>

          <ul>
            <li>
              <div class="agenda-role">
                
                <label class="time-content">8:30 PM</label>
                <label class="title-content">Timer, Ah-Counter, Grammarian, General Evaluator provides meeting & leader evaluations</label>
                <label class="theme-content"></label>

              </div>
            </li>
          </ul>


          <ul>
            <li>
              <div class="agenda-role">
                
                <label class="time-content">8:50 PM</label>
                <label class="title-content">President Makes Closing Remarks. Welcomes Guests, and Meeting Adjourns</label>
                <label class="theme-content"><Ger O&apos;Sullivan</label>

              </div>
            </li>
          </ul>


        </div>


   
   

      </div> <!-- container-overlap -->
    </div>  <!-- container -->


    </script>





<?php include($dir_path .'/includes/foundation.js.php'); ?>


    <script type="text/template" id="header-template">

        <div class="agenda-role">
          <label class="header-user-content">Member</label>
          <label class="header-eventRoles-content">Roles</label>
          <label class="header-guestCount-content">#</label>
        </div>

    </script>

    <script type="text/template" id="item-template">

      	<div class="agenda-role">
          
      	  <label class="userId-content"><%= username %></label>
          <label class="eventRoles-content">
             <% eventRoles.forEach(function (item) { %>
                   <%= item.key %> <br/>
              <% }); %>
          </label>
          <label class="guestCount-content"></label>
      	</div>

    </script>


    <script type="text/template" id="item-judge-template">

        <div class="agenda-role">
          
          <label class="userId-content"><%= username %></label>
          <label class="eventRoles-content">
             <% eventRoles.forEach(function (item) { %>
                   <%= item.key %> <br/>
              <% }); %>
          </label>
          <label class="guestCount-content"><%= guestCount %></label>
        </div>

    </script>


    <script type="text/template" id="item-timer-template">
      
        <div class="agenda-role">
          
          <label class="time-content"></label>
          <label class="title-content">Timer</label>
          <label class="userName-content"><%= username %></label>

        </div>
    </script>


    <script type="text/template" id="item-ballot-counter-template">

        <div class="agenda-role">
          
          <label class="userId-content"><%= username %></label>
          <label class="eventRoles-content">
             <% eventRoles.forEach(function (item) { %>
                   <%= item.key %> <br/>
              <% }); %>
          </label>
          <label class="guestCount-content"></label>
        </div>

    </script>


    <script type="text/template" id="item-toastmaster-template">

        <div class="agenda-role">
          
          <label class="time-content">7:35 PM</label>
          <label class="title-content">Introduce the Toastmaster</label>
          <label class="userName-content"><%= username %></label>

        </div>

    </script>


    <script type="text/template" id="item-generalEvaluator-template">
   
        <div class="agenda-role">
          
          <label class="time-content"></label>
          <label class="title-content">General Evaluator</label>
          <label class="userName-content"><%= username %></label>

        </div>

    </script>

    <script type="text/template" id="item-tableTopicsMaster-template">

        <div class="agenda-role">
          
          <label class="time-content">8:15 PM</label>
          <label class="title-content">Table Topics Master</label>
          <label class="userName-content"><%= username %></label>

        </div>

    </script>


    <script type="text/template" id="item-ahCounter-template">

        <div class="agenda-role">
          
          <label class="time-content"></label>
          <label class="title-content">Ah-Counter</label>
          <label class="userName-content"><%= username %></label>

        </div>

    </script>

    <script type="text/template" id="item-grammarian-template">

        <div class="agenda-role">
          
          <label class="time-content"></label>
          <label class="title-content">Grammarian</label>
          <label class="userName-content"><%= username %></label>

        </div>

    </script>
    

   



    <script type="text/template" id="item-speakerTemplate">

     <tbody>
        <tr>
          <td>
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
</tbody>

    </script>

    <script type="text/template" id="stats-template">
      <footer id="footer">
      	 <span id="agenda-count"><strong><%= total %></strong> <%= total == 1 ? 'attendee' : 'attendees' %> </span>
      	<ul id="filters">
      	  <li>
      	    <a href="javascript:void(0)" id="all" class="selected">All</a>
      	  </li>
      	</ul>
      </footer>
    </script>


  </body>

</html>