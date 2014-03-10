// An example Parse.js Backbone application based on the todo app by
// [Jérôme Gravel-Niquet](http://jgn.me/). This demo uses Parse to persist
// the todo items and provide user authentication and sessions.

$(function() {

  Parse.$ = jQuery;

  // Initialize Parse with your Parse application javascript keys
  // Parse.initialize("DUW4o1VHHIattNSNAeHmKCzNVWT09qB05SJV2Jzt", "G6r8YIahgEpGYEdvmrF3LK5LAOthcdxkmQwzJLKP");  // Dev
  Parse.initialize("CzxhhRu2NJF9o1IM85xkRedx2ySoaA6G4rv4jRkc", "BX2a8ye3Z5JH2FV0fQqog3gz9B85N5akWkjnA4NE"); //Prod
  

  // Attendance Model
  // ----------

  // Our Attendance model has `name`, `order`, and `status` attributes.
  var Attendance = Parse.Object.extend("Attendance", {
    // Default attributes for the agenda.
    defaults: {
      username: "no name...",
      eventRoles: 0,
      guestCount:0,
      speechInfo: ""
    },

    // Ensure that each agenda created has `name`.
    initialize: function() {
      if (!this.get("username")) {
        this.set({"username": this.defaults.username});
      } else if (!this.get("eventRoles")) {
        this.set({"eventRoles": this.defaults.eventRoles});
      } else if (!this.get("guestCount")) {
        this.set({"guestCount": this.defaults.guestCount});
      } 

    }
  });


  // This is the transient application state, not persisted on Parse
  var AppState = Parse.Object.extend("AppState", {
    defaults: {
      filter: "all"
    }
  });



  // Event Role Model
  // ----------
// enum instance members, optional
var Event = Parse.Object.extend("Event", {
    print : function() {
        console.log("Event " + this.get("name"));
    }
});


var EventRole = Parse.Object.extend("EventRoles", {
    print : function() {
        console.log("I am " + this.get("roleName"));
    }
});

// enum creation
var EventRoleList = Parse.Collection.extend({

    // Reference to this collection's model.
    model : EventRole,


    initialize: function () {
        // do somthing
    },

    // unmaskRoles: function(eventRoles) {
    //    var roleNameArray = new Array();
    //    console.log('EventRoles: ' + eventRoles);
    //    var eventRoleList = this.models.length;
    //    var roleValueList = this.pluck('roleValue');
    //    var roleNameList = this.pluck('roleName');
    //    var myEventRoles = _.filter(roleValueList, function(evtVal){ return eventRoles & evtVal; });

    //    // var listOfEventRoles = _.pick(this, 'roleValue', 'roleName'); 
    //   _.each(myEventRoles,
    //     function(element, index, list) {
    //       var roleValueIndex = _.indexOf(roleValueList, element);

    //       if (roleValueIndex != -1) {

    //         roleNameArray.push(roleNameList[roleValueIndex]);
           
    //       }

    //     });

    //   return roleNameArray;
    // },

    unmaskRoles: function(eventRoles) {
       var roleArray = new Array();
       console.log('EventRoles: ' + eventRoles);
       var eventRoleList = this.models.length;
       var roleValueList = this.pluck('roleValue');
       var roleNameList = this.pluck('roleName');
       var myEventRoles = _.filter(roleValueList, function(evtVal){ return eventRoles & evtVal; });

       // var listOfEventRoles = _.pick(this, 'roleValue', 'roleName'); 
      _.each(myEventRoles,
        function(element, index, list) {
          var roleValueIndex = _.indexOf(roleValueList, element);

          if (roleValueIndex != -1) {

            roleArray.push({
                key:   roleNameList[roleValueIndex],
                value: roleValueList[roleValueIndex]
            });
           
          }

        });

      return roleArray;
    },


});






  // Speech Model
  // ----------

  var Speech = Parse.Object.extend("Speech", {
      print : function() {
          console.log("Speech: " + this.get("title"));
      }
  });

  // Speech List Collection
  // ---------------
  var SpeechList = Parse.Collection.extend({

    /** @class SpeechList
     * @author Ger O'Sullivan
     * @augments Backbone.Collection
     * @contructs SpeechList object */

    // Reference to this collection's model.
    model: Speech,

    initialize: function () {
        // do somthing
        
    },

    /** Renders the speech info.
     * @param {Object} anAttendance The attendance object.
     * @param {String} managedViewList The view object.
     * @return {Nothing} . */
    speechInfo: function(anAttendance, managedViewList) {

      var speechListLength = this.models.length;

      if (speechListLength > 0) {

          var self = this;
          var eventIdArg = anAttendance.get("eventId");
          var userIdArg = anAttendance.get("userId");
          

          /**  Speech List Find
          *  Find the record(s) within the speech list collection 
          *  that match the id values for both eventId and userId. 
          */
          this.query.equalTo("eventId", eventIdArg);
          this.query.equalTo("userId", userIdArg);
          this.query.find().then(
            function(results) {

              // for the collection of results returned (should only be one)
              _.each(results, function(result) {

                if (result.get("tm_ccId"))
                  var tmcc_id = result.get('tm_ccId').id;

                if (result.get("title"))
                  var speechTitle = result.get('title');

                if (result.get("evaluatorId")) {
                  // get the evaluator id (Parse pointer objects are stored as JSON object containing id attribute)
                  var evaluator_id = result.get("evaluatorId").id;
                  // get the tm_ccId (Parse pointer objects are stored as JSON object containing id attribute)


                  /**  Parse.Promise in Series
                    *  Establish a promise that completes serial promises before executing the call to 
                    *  render the results in the SpeechListView 
                    */
                  self.fetchUserById(evaluator_id).then(      // fetch the User record by the evaluator id
                    function(userResult) {

                      /** fetch the speech record corresponding to the TM_CCId 
                      *   include the result from previous promise in order to
                      *   write the evaluator to the attendance record for the
                      *   subsequent promise call.  
                      */
                      return self.fetchSpeechById(userResult, tmcc_id, speechTitle, anAttendance);


                    }).then(function(tmCCResult){

                      // render the attendance record to the SpeakerListItemView
                      var view = new SpeakerListItemView({model: anAttendance});
                      console.log("Speech Info:" + anAttendance.get("speechInfo").evaluatorName);
                      // managedViewList.$("#speaker-list").append(view.render().el);
                      managedViewList.$("#speaker_1_tbody").replaceWith(view.render().el);
                      

                    });
                  } else {

                      self.fetchSpeechById(null, tmcc_id, speechTitle, anAttendance).then(function(tmCCResult){

                        // render the attendance record to the SpeakerListItemView
                        var view = new SpeakerListItemView({model: anAttendance});
                        console.log("Speech Info:" + anAttendance.get("speechInfo").evaluatorName);
                        // managedViewList.$("#speaker-list").append(view.render().el);
                        managedViewList.$("#speaker_1_tbody").replaceWith(view.render().el);

                      });

                  }

                }); // end each

            }); // end find

      } // end if speechlength

    }, // end speechInfo


    /** Gets user object record by ID. If the user object doesn't have data based on the ID, an empty string is returned.
     * @param {String} id The user id value.
     * @return {Object} The user object. */
    fetchUserById: function (id) {

      var userQuery = new Parse.Query(Parse.User);
      // userQuery.equalTo(objectId, evalId);  // find all the women
      return userQuery.get(id, {
        success: function(userResult) {
          // Do stuff
          console.log("Evaluator: " + userResult.get("username"));
          // evaluatorName = userResult.get("username");
          // response.success();
        
        }, error: function() {
            // promise.reject();

        }  // end error
          
      }); // end get
    },

    /** Gets speech object record by ID. If the speech object doesn't have data based on the ID, an empty string is returned.
     * if found, the attendance record is updated with the fetched value.
     * @param {Object} userResult The user object.
     * @param {String} id The speech id value.
     * @param {Object} anAttendance The attendance object.
     * @return {Object} The sppech object. */
    fetchSpeechById: function (userResult, id, speechTitle, anAttendance) {



      var evaluatorName = (userResult != null) ? userResult.get("username") : null;
      var TM_CC = Parse.Object.extend("TM_CC");
      var tmCCQuery = new Parse.Query(TM_CC);

      // tmCCQuery.equalTo("tm_ccId", tm_ccIdVar.id);
      return tmCCQuery.get(id, {
        success: function(tmCCResult) {
          // This function will *not* be called.
          // alert("Everything went fine!");
            // console.log("ObjectId: " + tmCCResult.id + ' - projectTitle : ' + tmCCResult.get("projectTitle"));
            var tmCCDict = {
                    "speechTitle": speechTitle,
                    "evaluatorName": evaluatorName,
                    "projectTitle":tmCCResult.get("projectTitle"),
                    "projectNum": tmCCResult.get("projectNum"),
                    "speechLength":tmCCResult.get("speechLength"),
                    "summary":tmCCResult.get("summary"),
                    "objectives":tmCCResult.get("objectives")
                };

            console.log(tmCCDict);
            anAttendance.set({"speechInfo":tmCCDict});
            // promise.resolve(true);

        },error: function() {
          // promise.reject();
        }
      }); // end get
    },


  }); // end SpeechList



  // Attendance List Collection
  // ---------------

  var AttendanceList = Parse.Collection.extend({

    // Reference to this collection's model.
    model: Attendance,

  });

  // Attendance Item View
  // --------------

  // The DOM element for a agenda item...
  var AttendanceListItemView = Parse.View.extend({

      /** @class AttendanceListItemView
     * @author Ger O'Sullivan
     * @augments Backbone.View
     * @contructs AttendanceListItemView object */

    //... is a list tag.
    tagName:  "label",

    // class Name
    className: "userName-content",

    // Cache the template function for a single item.
    baseTemplate: _.template($('#item-template').html()),


    toastmasterTemplate: _.template($('#item-toastmaster-template').html()),

    generalEvaluatorTemplate: _.template($('#item-generalEvaluator-template').html()),

    ahCounterTemplate: _.template($('#item-ahCounter-template').html()),

    grammarianTemplate: _.template($('#item-grammarian-template').html()),

    judgeTemplate: _.template($('#item-judge-template').html()),

    timerTemplate: _.template($('#item-timer-template').html()),

    tableTopicsMasterTemplate: _.template($('#item-tableTopicsMaster-template').html()),

    ballotCounterTemplate: _.template($('#item-ballot-counter-template').html()),

    // The DOM agendas specific to an item.
    events: {

    },

    // The AttendanceListItemView listens for changes to its model, re-rendering. Since there's
    // a one-to-one correspondence between an Attendance and a AttendanceListItemView in this
    // app, we set a direct reference on the model for convenience.
    initialize: function() {
      _.bindAll(this, 'render');
    },

    // Re-render the contents of the todo item.
    render: function() {

      var _userName = this.model.get("userId").get("username");
      var _eventRoles = this.model.get("eventRoles");
      var _guestCount = this.model.get("guestCount");
      

      // console.log("username: " + _userName);
      // console.log("eventRoles: " + _eventRoles);
      // console.log("guestCount: " + _guestCount);

      var userInfo = {"username": _userName, "eventRoles": _eventRoles, "guestCount": _guestCount};

     
      for (var i = userInfo.eventRoles.length - 1; i >= 0; i--) {
        switch(userInfo.eventRoles[i].value)
          {
            case 2:
              $(this.el).html(this.timerTemplate(userInfo));
              break;
            case 4:
              $(this.el).html(this.grammarianTemplate(userInfo));
              break;
            case 8:
              $(this.el).html(this.ahCounterTemplate(userInfo));
              break;
            case 32:
              $(this.el).html(this.generalEvaluatorTemplate(userInfo));
              break;
            case 64:
              $(this.el).html(this.tableTopicsMasterTemplate(userInfo));
              break;
            case 256:
              $(this.el).html(this.toastmasterTemplate(userInfo));
              break;
            case 2048:
            $(this.el).html(this.ballotCounterTemplate(userInfo));
            break;
          case 4096:
              $(this.el).html(this.timerTemplate(userInfo));
              break;
          case 8192:
             $(this.el).html(this.judgeTemplate(userInfo));
            break;
          default:
            $(this.el).html(this.baseTemplate(userInfo));
          }
      }
      

      
      return this;
    }

  });


  // The DOM element for a agenda item...
  var SpeakerListItemView = Parse.View.extend({

    /** @class SpeakerListItemView
     * @author Ger O'Sullivan
     * @augments Backbone.View
     * @contructs SpeakerListItemView object */

    //... is a list tag.
    tagName:  "tbody",

    // Cache the template function for a single item.
    speakerTemplate: _.template($('#item-speakerTemplate').html()),

    // The DOM agendas specific to an item.
    events: {

    },

    // The AttendanceListItemView listens for changes to its model, re-rendering. Since there's
    // a one-to-one correspondence between an Attendance and a AttendanceListItemView in this
    // app, we set a direct reference on the model for convenience.
    initialize: function() {

     
      _.bindAll(this, 'render');
    },

    // Re-render the contents of the todo item.
    render: function() {

      var _userName = this.model.get("userId").get("username");
      var _eventRoles = this.model.get("eventRoles");
      var _guestCount = this.model.get("guestCount");
      var _speechInfo = this.model.get("speechInfo");
      

      // console.log("username: " + _userName);
      // console.log("eventRoles: " + _eventRoles);
      // console.log("guestCount: " + _guestCount);
      // console.log("speechInfo: " + _speechInfo);

      var userInfo = {"username": _userName, "eventRoles": _eventRoles, "guestCount": _guestCount, "speechInfo": _speechInfo};

      // console.log('data: ' + data);

      $(this.el).html(this.speakerTemplate(userInfo));

      
      return this;
    }

  });

  // The Application
  // ---------------

  // The main view that lets a user manage the agenda list items
  var ManageAttendanceListView = Parse.View.extend({

    /** @class ManageAttendanceListView
     * @author Ger O'Sullivan
     * @augments Backbone.View
     * @contructs ManageAttendanceListView object */


    // Our template for the line of statistics at the bottom of the app.
    statsTemplate: _.template($('#stats-template').html()),

    headerTemplate: _.template($('#header-template').html()),


    // Delegated events for creating new items, and clearing completed ones.
    events: {
      // "click ul#filters a": "selectFilter"
    },

    el: ".content",

    // At initialization we bind to the relevant agendas on the `Attendance`
    // collection, when items are added or changed. Kick things off by
    // loading any preexisting todos that might be saved to Parse.
    initialize: function() {
      var self = this;

     
     _.bindAll(this, 'addOne', 'addAll','render');


      // Main agenda management template
      this.$el.html(_.template($("#manage-agendaList-template").html()));


    /** Establish a promise that complete two parrellel promises before executing the call to fetch agend list
     *  since it is dependent on the values of the first two promises (i.e. speeches and event role list)
     */
      Parse.Promise.when([this.fetchSpeechList(this.event), this.fetchEventRoleList(), this.fetchEvent()]).then(
        function(speechListResults, eventRoleListResults, eventResults){
          self.speechList = speechListResults;
          self.eventRoleList = eventRoleListResults;
          console.log(speechListResults.length);  // Is 4.
          console.log(eventRoleListResults.length);  // Is 4.
          self.fetchAgendaList = self.fetchAgendaList(eventResults[0].id);
        }
      );
    },


    /** Gets the current event info.
     * @param {}
     * @return {Object} id The event object */
    fetchEvent: function() {

      // var currentEvent = new Event();
      // currentEvent.id = "goPHjpLLND";

      var query = new Parse.Query(Event);

      query.equalTo("status", "upcoming").ascending("time");
      
      return query.find({
        success: function(results) {
          // alert("Successfully retrieved " + results.length + " scores.");
        },
        error: function(error) {
          console.log("Error: " + error.code + " " + error.message);
        }
      });


      // return currentEvent;

    },


    /** Gets the agenda list.
     * @param {Object} The event object.
     * @return {Collection} The agenda collection. */
    fetchAgendaList: function(eventId) {

      agendaList = new AttendanceList();

      var eventIdObj = new Event();
      eventIdObj.id = eventId;

      console.log("eventId : " + eventId);

      //ATTENDANCE QUERY//
      // Setup the query for the collection to look for todos from the current user
      agendaList.query = new Parse.Query(Attendance);

      agendaList.query.include("eventId");
      agendaList.query.include("userId");
      agendaList.query.equalTo("eventId", eventIdObj).exists("userId");

      agendaList.bind('add', this.addOne);
      agendaList.bind('reset', this.addAll);
      agendaList.bind('all', this.render);

      // Fetch all the agenda list items
      return agendaList.fetch();
      

    },


    stringSet: function () {
        var setObj = {}, val = {};

        this.add = function(str) {
            setObj[str] = val;
        };

        this.contains = function(str) {
            return setObj[str] === val;
        };

        this.remove = function(str) {
            delete setObj[str];
        };

        this.values = function() {
            var values = [];
            for (var i in setObj) {
                if (setObj[i] === val) {
                    values.push(i);
                }
            }
            return values;
        };
    },

    /** Gets the event role list.
     * @param {}.
     * @return {Collection} The event role collection. */
    fetchEventRoleList: function() {

      // Create our collection of EventRoleList
      eventRoleList = new EventRoleList();

    // Setup the query for the collection to look for todos from the current user
      eventRoleList.query = new Parse.Query(EventRole);
      
      // Fetch all the event role list items
      return eventRoleList.fetch();

    },

    /** Gets the speech list.
     * @param {Object} The event object.
     * @return {Collection} The speech collection. */
    fetchSpeechList: function(event) {

      //SPEECH QUERY//

      // Create our collection of SpeechList
      speechList = new SpeechList();
      speechList.query = new Parse.Query(Speech);

      speechList.query.include("eventId");
      speechList.query.equalTo("eventId", event);

      // Fetch all the agenda list items
      return speechList.fetch();

    },

    // Re-rendering the App just means refreshing the statistics -- the rest
    // of the app doesn't change.
    render: function() {

 

      // this.$('#agendaList-stats').html(this.statsTemplate({
      //   total:      this.agendaList.length
      //    // total:      this.agendaList.length,
      //    // upcoming:       upcoming,
      //    // past:  past
      // }));

      // this.delegateEvents();

    },

    // Add a single agenda item to the list by creating a view for it, and
    // appending its element to the `<ul>`.
    // addOne: function(anAttendance) {
    //   var roleNameList = this.eventRoleList.unmaskRoles(anAttendance.get('eventRoles'));
    //   anAttendance.set({'eventRoles' : roleNameList});


    //   if ((roleNameList.indexOf('Speaker') > -1) || (roleNameList.indexOf('Contest Speaker') > -1))  {
        
    //     this.speechList.speechInfo(anAttendance, this);

    //   } else {
    //      var view = new AttendanceListItemView({model: anAttendance});

    //       // switch(n)
    //       // {
    //       // case 1:
    //       //   execute code block 1
    //       //   break;
    //       // case 2:
    //       //   execute code block 2
    //       //   break;
    //       // default:
    //       //   code to be executed if n is different from case 1 and 2
    //       // }

    //      this.$("#agenda-list").append(view.render().el);
    //   }

    // },

    addOne: function(anAttendance) {
      var roleArray = this.eventRoleList.unmaskRoles(anAttendance.get('eventRoles'));
      anAttendance.set({'eventRoles' : roleArray});


      for (var i = roleArray.length - 1; i >= 0; i--) {
        switch(roleArray[i].value)
        {
        case 2:
          var view = new AttendanceListItemView({model: anAttendance});
          // this.$("#agenda-timer-list").append(view.render().el);
          this.$("#agenda-role-timer").children(".userName-content").replaceWith(view.render().el);
          break;
        case 4:
          var view = new AttendanceListItemView({model: anAttendance});
          // this.$("#agenda-grammarian-list").append(view.render().el);
          this.$("#agenda-role-grammarian").children(".userName-content").replaceWith(view.render().el);
          break;
        case 8:
          var view = new AttendanceListItemView({model: anAttendance});
          // this.$("#agenda-ah-counter-list").append(view.render().el);
          this.$("#agenda-role-ah-counter").children(".userName-content").replaceWith(view.render().el);
          break;
        case 32:
          var view = new AttendanceListItemView({model: anAttendance});
          this.$("#agenda-role-general-evaluator").children(".userName-content").replaceWith(view.render().el);
          // this.$("#ger123").append(view.render().el);
          break;
        case 64:
          var view = new AttendanceListItemView({model: anAttendance});
          // this.$("#agenda-table-topics-master-list").append(view.render().el);
          this.$("#agenda-table-topics-master-list").children(".userName-content").replaceWith(view.render().el);
          break;
        case 128:
        case 1024:
          this.speechList.speechInfo(anAttendance, this);
          break;
        case 256:
          var view = new AttendanceListItemView({model: anAttendance});
          this.$("#agenda-role-toastmaster").children(".userName-content").replaceWith(view.render().el);
          break;
        case 2048:
          var view = new AttendanceListItemView({model: anAttendance});
          this.$("#agenda-ballot-counter-list").append(view.render().el);
          break;
        case 4096:
          var view = new AttendanceListItemView({model: anAttendance});
          this.$("#agenda-role-timer").children(".userName-content").replaceWith(view.render().el);
          break;
        case 8192:
          var view = new AttendanceListItemView({model: anAttendance});
          this.$("#agenda-judge-list").append(view.render().el);
          break;
        default:
          var view = new AttendanceListItemView({model: anAttendance});
          this.$("#agenda-list").append(view.render().el);
        }
      };

    },

    // Add all items in the AttendanceList collection at once.
    addAll: function(collection, filter) {

      this.$("#agenda-list").html("");
      this.$("#agenda-list-judges").html("");
      this.$('#agendaList-header').html(this.headerTemplate({

         }));

      collection.each(this.addOne);
    },


  });



  // The main view for the app
  var AppView = Parse.View.extend({
    // Instead of generating a new element, bind to the existing skeleton of
    // the App already present in the HTML.
    el: $("#agendaapp"),

    initialize: function() {
      this.render();
    },

    render: function() {
       new ManageAttendanceListView();
       // new SpeakerListItemView();
    }
  });

  var AppRouter = Parse.Router.extend({
    routes: {
      // "all": "all"
      // "all": "all",
      // "upcoming": "upcoming",
      // "past": "past"
    },

    initialize: function(options) {
    },


  });

  var state = new AppState();

  new AppRouter();
  new AppView();
  
});