
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
      Powered by <a href="http://www.brilliantage.com">Every1Here mobile application</a> created by <a href="http://www.brilliantage.com">Brilliant Age</a>
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
              <div id="agenda-role-president">
                
                <label class="time-content">7:30 PM</label>
                <label class="title-content"><strong>President Calls Meeting to Order</strong></label>
                <label class="userName-content">Ger O&apos;Sullivan</label>

              </div>
            </li>
          </ul>

          <ul>
            <li>
              <div class="agenda-role">
                
                <label class="time-content">7:35 PM</label>
                <label class="title-content"><strong>President Introduces the Toastmaster</strong></label>
                <label class="userName-content"></label>

              </div>
            </li>
            <li>
              <div id="agenda-role-toastmaster">
    
                <label class="time-content"></label>
                <label class="title-content">Toastmaster of the day</label>
                <label class="userName-content"><a href="mailto:vped-9669@toastmastersclubs.org?subject=Accept Toastmaster Role"><span class="success alert round label">Open Role</span></a></label>

              </div>
            </li>

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
                <label class="title-content"><strong>Toastmaster Introduces:</strong></label>
                <label class="theme-content"></label>

              </div>
            </li>
            <li>
              <div id="agenda-role-general-evaluator">
          
                <label class="time-content"></label>
                <label class="title-content">General Evaluator</label>
                <label class="userName-content"><a href="mailto:vped-9669@toastmastersclubs.org?subject=Accept General Evaluator Role"><span class="success alert round label">Open Role</span></a></label>

              </div>
            </li>
            <li>
              <div id="agenda-role-timer">
          
                <label class="time-content"></label>
                <label class="title-content">Timer</label>
                <label class="userName-content"><a href="mailto:vped-9669@toastmastersclubs.org?subject=Accept Timer Role"><span class="success alert round label">Open Role</span></a></label>

              </div>
            </li>

            <li>
              <div id="agenda-role-ah-counter">
          
                <label class="time-content"></label>
                <label class="title-content">Ah-Counter</label>
                <label class="userName-content"><a href="mailto:vped-9669@toastmastersclubs.org?subject=Accept Ah-Counter Role"><span class="success alert round label">Open Role</span></a></label>

              </div>
            </li>

            <li>
              <div id="agenda-role-grammarian">
          
                <label class="time-content"></label>
                <label class="title-content">Grammarian</label>
                <label class="userName-content"><a href="mailto:vped-9669@toastmastersclubs.org?subject=Accept Grammarian Role"><span class="success alert round label">Open Role</span></a></label>

              </div>
            </li>


            <li>
              <div class="agenda-role">
                
                <label class="time-content">7:50 PM</label>
                <label class="title-content"><strong>Toastmaster Introduces Speakers &amp; Evaluators</strong></label>
                <label class="theme-content"></label>

              </div>
            </li>
          </ul>


                   

        </div>

        
        <div id="speaker-list">
          <div class="row">
            <table id="speaker_1">
            <thead>
            <tr>
               <th>Speaker #1</th>
               <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody id="speaker_1_tbody">
                <tr>
                  <td>
                    Speaker:
                  </td>
                   <td>
                      <h6>
                        <a href="mailto:vped-9669@toastmastersclubs.org?subject=Accept Speaker Role"><span class="success alert round label">Open Role</span></a>
                      </h6>
                  </td>
                </tr> 

                <tr>
                  <td >
                    Speech Number:
                  </td>
                   <td>
                      <h6>
                      TBD
                      </h6>
                  </td>
                </tr> 

                <tr>
                  <td>
                    Title:
                  </td>
                   <td>
                      <h6>
                       TBD
                      </h6>
                  </td>
                </tr> 

                <tr>
                  <td>
                    Summary:
                  </td>
                   <td>
                      TBD
                  </td>
                </tr> 

                <tr>
                  <td>
                    Objectives:
                  </td>
                   <td>
                   TBD
                  </td>
                </tr> 

                <tr>
                  <td>
                    Time:
                  </td>
                   <td>
                       TBD
                  </td>
                </tr> 

                  <tr>
                  <td>
                    Evaluator
                  </td>
                  <td>
                     TBD
                  </td>
                </tr>
          </tbody>
          </table>
        </div>

      </div>


              <div id="speaker-list">
          <div class="row">
            <table id="speaker_2">
            <thead>
            <tr>
               <th>Speaker #2</th>
               <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody id="speaker_2_tbody">
                <tr>
                  <td>
                    Speaker:
                  </td>
                   <td>
                      <h6>
                         <a href="mailto:vped-9669@toastmastersclubs.org?subject=Accept Speaker Role"><span class="success alert round label">Open Role</span></a>
                      </h6>
                  </td>
                </tr> 

                <tr>
                  <td >
                    Speech Number:
                  </td>
                   <td>
                      <h6>
                      TBD
                      </h6>
                  </td>
                </tr> 

                <tr>
                  <td>
                    Title:
                  </td>
                   <td>
                      <h6>
                       TBD
                      </h6>
                  </td>
                </tr> 

                <tr>
                  <td>
                    Summary:
                  </td>
                   <td>
                      TBD
                  </td>
                </tr> 

                <tr>
                  <td>
                    Objectives:
                  </td>
                   <td>
                   TBD
                  </td>
                </tr> 

                <tr>
                  <td>
                    Time:
                  </td>
                   <td>
                       TBD
                  </td>
                </tr> 

                  <tr>
                  <td>
                    Evaluator
                  </td>
                  <td>
                     TBD
                  </td>
                </tr>
          </tbody>
          </table>
        </div>

      </div>


        <div id="speaker-list">
          <div class="row">
            <table id="speaker_3">
            <thead>
            <tr>
               <th>Speaker #3</th>
               <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody id="speaker_3_tbody">
                <tr>
                  <td>
                    Speaker:
                  </td>
                   <td>
                      <h6>
                         <a href="mailto:vped-9669@toastmastersclubs.org?subject=Accept Speaker Role"><span class="success alert round label">Open Role</span></a>
                      </h6>
                  </td>
                </tr> 

                <tr>
                  <td >
                    Speech Number:
                  </td>
                   <td>
                      <h6>
                      TBD
                      </h6>
                  </td>
                </tr> 

                <tr>
                  <td>
                    Title:
                  </td>
                   <td>
                      <h6>
                       TBD
                      </h6>
                  </td>
                </tr> 

                <tr>
                  <td>
                    Summary:
                  </td>
                   <td>
                      TBD
                  </td>
                </tr> 

                <tr>
                  <td>
                    Objectives:
                  </td>
                   <td>
                   TBD
                  </td>
                </tr> 

                <tr>
                  <td>
                    Time:
                  </td>
                   <td>
                       TBD
                  </td>
                </tr> 

                  <tr>
                  <td>
                    Evaluator
                  </td>
                  <td>
                     TBD
                  </td>
                </tr>
          </tbody>
          </table>
        </div>

      </div>



        <div id="speaker-list">
          <div class="row">
            <table id="speaker_3">
            <thead>
            <tr>
               <th>Speaker #4</th>
               <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody id="speaker_4_tbody">
                <tr>
                  <td>
                    Speaker:
                  </td>
                   <td>
                      <h6>
                         <a href="mailto:vped-9669@toastmastersclubs.org?subject=Accept Speaker Role"><span class="success alert round label">Open Role</span></a>
                      </h6>
                  </td>
                </tr> 

                <tr>
                  <td >
                    Speech Number:
                  </td>
                   <td>
                      <h6>
                      TBD
                      </h6>
                  </td>
                </tr> 

                <tr>
                  <td>
                    Title:
                  </td>
                   <td>
                      <h6>
                       TBD
                      </h6>
                  </td>
                </tr> 

                <tr>
                  <td>
                    Summary:
                  </td>
                   <td>
                      TBD
                  </td>
                </tr> 

                <tr>
                  <td>
                    Objectives:
                  </td>
                   <td>
                   TBD
                  </td>
                </tr> 

                <tr>
                  <td>
                    Time:
                  </td>
                   <td>
                       TBD
                  </td>
                </tr> 

                  <tr>
                  <td>
                    Evaluator
                  </td>
                  <td>
                     TBD
                  </td>
                </tr>
          </tbody>
          </table>
        </div>

      </div>

        <div class="row">

          <ul>
            <li>
              <div class="agenda-role">
                
                <label class="time-content">8:15 PM</label>
                <label class="title-content"><strong>Toastmaster Introduces Table TopicsMaster</strong></label>
                <label class="theme-content"></label>

              </div>
            </li>

            <li>
              <div id="agenda-table-topics-master-list">
    
                <label class="time-content"></label>
                <label class="title-content">Conduct Table Topics Session</label>
                <label class="userName-content"><a href="mailto:vped-9669@toastmastersclubs.org?subject=Accept Table Topics Role"><span class="success alert round label">Open Role</span></a></label>

              </div>
            </li>


            <li>
              <div class="agenda-line-item-no-time">
                
                <label class="time-content"></label>
                <label class="title-content">Returns control to the Toastmaster</label>
                <label class="theme-content"></label>

              </div>
            </li>

          </ul>



          <ul>
            <li>
              <div class="agenda-role">
                
                <label class="time-content">8:30 PM</label>
                <label class="title-content"><strong>Toastmaster Introduces the General Evaluator</strong></label>
                <label class="tuserName-content"></label>

              </div>
            </li>

            <li>
              <div class="agenda-line-item-no-time">
                
                <label class="time-content"></label>
                <label class="title-content">General Evaluator calls for reports</label>
                <label class="userName-content"></label>

              </div>
            </li>

            <li>
              <div class="agenda-line-item-no-time">
                
                <label class="time-content"></label>
                <label class="title-content">Timer</label>
                <label class="userName-content"></label>

              </div>
            </li>

            <li>
              <div class="agenda-line-item-no-time">
                
                <label class="time-content"></label>
                <label class="title-content">Ah-Counter</label>
                <label class="userName-content"></label>

              </div>
            </li>
    
            <li>
              <div class="agenda-line-item-no-time">
                
                <label class="time-content"></label>
                <label class="title-content">Grammarian</label>
                <label class="theme-content"></label>

              </div>
            </li>


            <li>
              <div class="agenda-line-item-no-time">
                
                <label class="time-content"></label>
                <label class="title-content">General Evaluator provides meeting & leader evaluations</label>
                <label class="theme-content"></label>

              </div>
            </li>

            <li>
             <div class="agenda-line-item-no-time">
                
                <label class="time-content"></label>
                <label class="title-content">Returns control to the Toastmaster</label>
                <label class="theme-content"></label>

              </div>
            </li>
     
    

          </ul>


          <ul>
            <li>
              <div class="agenda-role">
                
                <label class="time-content">8:50 PM</label>
                <label class="title-content"><strong>Toastmaster Presents Awards</strong></label>
                <label class="theme-content"></label>

              </div>
            </li>


            <li>
              <div class="agenda-role">
                
                <label class="time-content"></label>
                <label class="title-content">Returns control to the Toastmaster</label>
                <label class="theme-content"></label>

              </div>
            </li>
          </ul>


          <ul>
            <li>
              <div class="agenda-role">
                
                <label class="time-content">8:55 PM</label>
                <label class="title-content"><strong>President Makes Closing Remarks. Welcomes Guests, and Meeting Adjourns</strong></label>
                <label class="theme-content">Ger O&apos;Sullivan</label>

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
      
          <%= username %>
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

        <%= username %>

    </script>




    <script type="text/template" id="item-tableTopicsMaster-template">

        <%= username %>

    </script>


    <script type="text/template" id="item-ahCounter-template">

        <%= username %>

    </script>

    <script type="text/template" id="item-grammarian-template">

        <%= username %>

    </script>
    

       <script type="text/template" id="item-generalEvaluator-template">
            <%= username %>
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