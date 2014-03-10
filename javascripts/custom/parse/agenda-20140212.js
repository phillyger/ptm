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
      guestCount:0
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

    unmaskRoles: function(eventRoles) {
       var roleNameArray = new Array();
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

            roleNameArray.push(roleNameList[roleValueIndex]);
           
          }

        });

      return roleNameArray;
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

    // Reference to this collection's model.
    model: Speech,

    initialize: function () {
        // do somthing
    },


    speechInfo: function(anAttendance, managedViewList) {


       var eventIdArg = anAttendance.get("eventId");
       var userIdArg = anAttendance.get("userId");
       var evaluatorName;
       var speechListLength = this.models.length;
       console.log("speechListLength : "+ speechListLength );
      // var tmp = this.where({eventId: eventIdArg.id});
      // var titles = this.pluck('title');

      if (speechListLength > 0) {
          // var tmCCId = this.where({eventId : { id : eventIdArg.id }});
          // var tmCCId = this.collection.where({title : "Icebreaker" });
          // this.query.equalTo("title", "This is new speech");
          this.query.equalTo("eventId", eventIdArg);
          this.query.equalTo("userId", userIdArg);
          this.query.find().then(
            function(results) {
              console.log("hello");
                // Create a trivial resolved promise as a base case.
                var promise = Parse.Promise.as();
                // var promise2 = Parse.Promise.as();
                // var promise3 = Parse.Promise.as();


                _.each(results, function(result) {

                promise = promise.then(function() {

                  var evalId = result.get("evaluatorId").id;

                  console.log("eval: " + evalId);

                  var userQuery = new Parse.Query(Parse.User);
                  // userQuery.equalTo(objectId, evalId);  // find all the women
                  userQuery.get(evalId, {
                    success: function(evaluator) {
                      // Do stuff
                      console.log("Evaluator: " + evaluator.get("username"));
                      evaluatorName = evaluator.get("username");

                    },
                     error: function(model, error) {
                      // This will be called.
                      // error is an instance of Parse.Error with details about the error.
                      if (error.code === Parse.Error.OBJECT_NOT_FOUND) {
                        alert("Uh oh, we couldn't find the object!");
                      }
                    }  // end error
                  }).then(function() {


                // Return a promise that will be resolved when the delete is finished.
                // return result.destroy();
                console.log("Made it");
                var tm_ccIdVar = result.get('tm_ccId');

                console.log(result.id + ' - tm_ccId : ' + tm_ccIdVar.id);

                var TM_CC = Parse.Object.extend("TM_CC");
                var tmCCQuery = new Parse.Query(TM_CC);

                // tmCCQuery.equalTo("tm_ccId", tm_ccIdVar.id);
                tmCCQuery.get(tm_ccIdVar.id, {
                  success: function(tmCCResult) {
                    // This function will *not* be called.
                    // alert("Everything went fine!");
                      // console.log("ObjectId: " + tmCCResult.id + ' - projectTitle : ' + tmCCResult.get("projectTitle"));
                      var tmCCDict = {
                              "evaluatorName": evaluatorName,
                              "projectTitle":tmCCResult.get("projectTitle"), 
                              "projectNum": tmCCResult.get("projectNum"), 
                              "speechLength":tmCCResult.get("speechLength"),
                              "summary":tmCCResult.get("summary")
                          };

                      console.log(tmCCDict);
                      anAttendance.set({"speechInfo":tmCCDict});
                      return tmCCDict;

                  },

                  error: function(model, error) {
                    // This will be called.
                    // error is an instance of Parse.Error with details about the error.
                    if (error.code === Parse.Error.OBJECT_NOT_FOUND) {
                      alert("Uh oh, we couldn't find the object!");
                    }
                  }
                  }); // end get

                  return promise;

                  }); // end promise.then

                  
                });

                }); // end each
                return promise;

                }).then(function() {
                    // Render it

                    var view = new AttendanceListItemView({model: anAttendance});
                    managedViewList.$("#speaker-list").append(view.render().el);
                });

            // });
      }

      // console.log("successful: "+ successful);
      // return;

    }


  });



  // Attendance List Collection
  // ---------------

  var AttendanceList = Parse.Collection.extend({

    // Reference to this collection's model.
    model: Attendance,

    // We keep the Attendance in sequential order, despite being saved by unordered
    // GUID in the database. This generates the next order number for new items.
    nextOrder: function() {
      if (!this.length) return 1;
      return this.last().get('order') + 1;
    },

    // Attendance are sorted by their original insertion order.
    comparator: function(Attendance) {
      return Attendance.get('order');
    }

  });

  // Attendance Item View
  // --------------

  // The DOM element for a agenda item...
  var AttendanceListItemView = Parse.View.extend({

    //... is a list tag.
    tagName:  "li",

    // Cache the template function for a single item.
    template: _.template($('#item-template').html()),

    // The DOM agendas specific to an item.
    events: {
      // "click .toggle"              : "toggleDone",
      // "dblclick label.todo-content" : "edit",
      // "click .todo-destroy"   : "clear",
      // "keypress .edit"      : "updateOnEnter",
      // "blur .edit"          : "close"
    },

    // The AttendanceListItemView listens for changes to its model, re-rendering. Since there's
    // a one-to-one correspondence between an Attendance and a AttendanceListItemView in this
    // app, we set a direct reference on the model for convenience.
    initialize: function() {
      _.bindAll(this, 'render');
      this.model.bind('change', this.render);
      // this.model.bind('destroy', this.remove);
    },

    // Re-render the contents of the todo item.
    render: function() {

      var _userName = this.model.get("userId").get("username");
      var _eventRoles = this.model.get("eventRoles");
      var _guestCount = this.model.get("guestCount");
      

      console.log("username: " + _userName);
      console.log("eventRoles: " + _eventRoles);
      console.log("guestCount: " + _guestCount);

      var userInfo = {"username": _userName, "eventRoles": _eventRoles, "guestCount": _guestCount};

      // console.log('data: ' + data);

      $(this.el).html(this.template(userInfo));
      // this.input = this.$('.edit');
      
      return this;
    }

  });

  // The Application
  // ---------------

  // The main view that lets a user manage their todo items
  var ManageAttendanceListView = Parse.View.extend({

    // Our template for the line of statistics at the bottom of the app.
    statsTemplate: _.template($('#stats-template').html()),

    headerTemplate: _.template($('#header-template').html()),


    // Delegated events for creating new items, and clearing completed ones.
    events: {
      "click ul#filters a": "selectFilter"
    },

    el: ".content",

    // At initialization we bind to the relevant agendas on the `Attendance`
    // collection, when items are added or changed. Kick things off by
    // loading any preexisting todos that might be saved to Parse.
    initialize: function() {
      var self = this;

     _.bindAll(this, 'addOne', 'addAll', 'addSome', 'render');
    //_.bindAll(this,  'render');

      // Main agenda management template
      this.$el.html(_.template($("#manage-agendaList-template").html()));
      
      // this.input = this.$("#new-agenda");
      // this.allCheckbox = this.$("#toggle-all")[0];

      // Create our collection of AttendanceList
      this.agendaList = new AttendanceList;
      this.event = new Event;
      this.speechList = new SpeechList;

      // this.event.id = "ACESSZzMSJ";
      // this.event.id = "GyW5EMFrIQ";
      this.event.id = "goPHjpLLND";

      //ATTENDANCE QUERY//
      // Setup the query for the collection to look for todos from the current user
      this.agendaList.query = new Parse.Query(Attendance);

      this.agendaList.query.include("eventId");
      this.agendaList.query.include("userId");
      this.agendaList.query.equalTo("eventId", this.event).exists("userId");

      this.agendaList.bind('add', this.addOne);
      this.agendaList.bind('reset', this.addAll);
      this.agendaList.bind('all', this.render);
      

      //EVENT QUERY//
      // Create our collection of EventRoleList
      this.eventRoleList = new EventRoleList;
      

    // Setup the query for the collection to look for todos from the current user
      this.eventRoleList.query = new Parse.Query(EventRole);
      this.eventRoleList.bind('add', this.addOne);
      this.eventRoleList.bind('all', this.render);

      //SPEECH QUERY//
      this.event.id = "goPHjpLLND";
      // Create our collection of SpeechList
      this.speechList = new SpeechList;
      this.speechList.query = new Parse.Query(Speech);
      this.speechList.query.include("eventId");
      this.agendaList.query.equalTo("eventId", this.event);


      // var promise = Parse.Promise.as();

      // Fetch all the agenda list items
      this.speechList.fetch();
      
      // Fetch all the agenda list items
      this.eventRoleList.fetch();

      // Fetch all the agenda list items
      this.agendaList.fetch();



      state.on("change", this.filter, this);
    },

    // Re-rendering the App just means refreshing the statistics -- the rest
    // of the app doesn't change.
    render: function() {
      // var upcoming = this.agendaList.upcoming().length;
      // var past = this.agendaList.past().length;

      this.$('#agendaList-header').html(this.headerTemplate({

         }));

      this.$('#agendaList-stats').html(this.statsTemplate({
        total:      this.agendaList.length
         // total:      this.agendaList.length,
         // upcoming:       upcoming,
         // past:  past
      }));

      this.delegateEvents();
    },


    // Filters the list based on which type of filter is selected
    selectFilter: function(e) {
      var el = $(e.target);
      var filterValue = el.attr("id");
      state.set({filter: filterValue});
      Parse.history.navigate(filterValue);
    },

    filter: function() {
      var filterValue = state.get("filter");

      this.$("ul#filters a").removeClass("selected");
      this.$("ul#filters a#" + filterValue).addClass("selected");
      if (filterValue === "all") {
        this.addAll();
      } 
    },

    // Resets the filters to display agenda list.
    resetFilters: function() {
      this.$("ul#filters a").removeClass("selected");
      this.$("ul#filters a#all").addClass("selected");
      this.addAll();
    },

    // Add a single agenda item to the list by creating a view for it, and
    // appending its element to the `<ul>`.
    addOne: function(anAttendance) {
      var roleNameList = this.eventRoleList.unmaskRoles(anAttendance.get('eventRoles'));
      anAttendance.set({'eventRoles' : roleNameList});

      if (roleNameList.indexOf('Speaker') > -1) {
        
        // var speechTitle = this.speechList.speechInfo(anAttendance);
        // console.log("Speech Title: " + speechTitle);

        this.speechList.speechInfo(anAttendance, this);


      } else {
         var view = new AttendanceListItemView({model: anAttendance});
         this.$("#agenda-list").append(view.render().el);
      }
      



      // var view = new AttendanceListItemView({model: anAttendance});
      // this.$("#agenda-list").append(view.render().el);
    },

    // Add all items in the AttendanceList collection at once.
    addAll: function(collection, filter) {

      this.$("#agenda-list").html("");
      this.agendaList.each(this.addOne);
    },

    // Only adds some todos, based on a filtering function that is passed in
    addSome: function(filter) {
      var self = this;
      this.$("#agenda-list").html("");
      this.agendaList.chain().filter(filter).each(function(item) { self.addOne(item) });
    }

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
      // if (Parse.User.current()) {
       new ManageAttendanceListView();

      // } else {
      //   new LogInView();
      // }
    }
  });

  var AppRouter = Parse.Router.extend({
    routes: {
      "all": "all"
      // "all": "all",
      // "upcoming": "upcoming",
      // "past": "past"
    },

    initialize: function(options) {
    },

    all: function() {
      state.set({ filter: "all" });
    }

    // all: function() {
    //   state.set({ filter: "all" });
    // },

    // upcoming: function() {
    //   state.set({ filter: "upcoming" });
    // },

    // past: function() {
    //   state.set({ filter: "past" });
    // }
  });

  var state = new AppState;

  new AppRouter;
  new AppView;
  Parse.history.start();
});