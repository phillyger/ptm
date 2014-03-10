// // An example Parse.js Backbone application based on the todo app by
// // [Jérôme Gravel-Niquet](http://jgn.me/). This demo uses Parse to persist
// // the todo items and provide user authentication and sessions.

// $(function() {

//   Parse.$ = jQuery;

//   // Initialize Parse with your Parse application javascript keys
//   Parse.initialize("DUW4o1VHHIattNSNAeHmKCzNVWT09qB05SJV2Jzt", "G6r8YIahgEpGYEdvmrF3LK5LAOthcdxkmQwzJLKP");

//   // Todo Model
//   // ----------

//   // Our basic Todo model has `name`, `order`, and `status` attributes.
//   var Event = Parse.Object.extend("Event", {
//     // Default attributes for the event.
//     defaults: {
//       name: "empty event name..."
//     },

//     // Ensure that each event created has `name`.
//     initialize: function() {
//       if (!this.get("name")) {
//         this.set({"name": this.defaults.content});
//       }
//     }
//   });


//   // This is the transient application state, not persisted on Parse
//   var AppState = Parse.Object.extend("AppState", {
//     defaults: {
//       filter: "all"
//     }
//   });

//   // Event List Collection
//   // ---------------

//   var EventList = Parse.Collection.extend({

//     // Reference to this collection's model.
//     model: Event,

//     // Filter down the list of all event items that are upcoming.
//     upcoming: function() {

//       return this.filter(function(Event){ 

//         return (Event.get('status') == 'upcoming' ? true : false); });
//     },

//     // Filter down the list to only todo items that are past.
//     past: function() {
//       return this.filter(function(Event){ return (Event.get('status') == 'past' ? true : false); });
//     },

//     // We keep the Events in sequential order, despite being saved by unordered
//     // GUID in the database. This generates the next order number for new items.
//     nextOrder: function() {
//       if (!this.length) return 1;
//       return this.last().get('order') + 1;
//     },

//     // Events are sorted by their original insertion order.
//     comparator: function(Event) {
//       return Event.get('order');
//     }

//   });

//   // Event Item View
//   // --------------

//   // The DOM element for a event item...
//   var EventListItemView = Parse.View.extend({

//     //... is a list tag.
//     tagName:  "li",

//     // Cache the template function for a single item.
//     template: _.template($('#item-template').html()),

//     // The DOM events specific to an item.
//     events: {
//       // "click .toggle"              : "toggleDone",
//       // "dblclick label.todo-content" : "edit",
//       // "click .todo-destroy"   : "clear",
//       // "keypress .edit"      : "updateOnEnter",
//       // "blur .edit"          : "close"
//     },

//     // The EventListItemView listens for changes to its model, re-rendering. Since there's
//     // a one-to-one correspondence between an Event and a EventListItemView in this
//     // app, we set a direct reference on the model for convenience.
//     initialize: function() {
//       _.bindAll(this, 'render');
//       this.model.bind('change', this.render);
//       // this.model.bind('destroy', this.remove);
//     },

//     // Re-render the contents of the todo item.
//     render: function() {
//       var jsonObj = this.model.toJSON();
//       $(this.el).html(this.template(jsonObj));
//       // this.input = this.$('.edit');
//       return this;
//     }

//   });

//   // The Application
//   // ---------------

//   // The main view that lets a user manage their todo items
//   var ManageEventListView = Parse.View.extend({

//     // Our template for the line of statistics at the bottom of the app.
//     statsTemplate: _.template($('#stats-template').html()),


//     // Delegated events for creating new items, and clearing completed ones.
//     events: {
//       "click ul#filters a": "selectFilter"
//     },

//     el: ".content",

//     // At initialization we bind to the relevant events on the `Events`
//     // collection, when items are added or changed. Kick things off by
//     // loading any preexisting todos that might be saved to Parse.
//     initialize: function() {
//       var self = this;

//      _.bindAll(this, 'addOne', 'addAll', 'addSome', 'render');
//     //_.bindAll(this,  'render');

//       // Main event management template
//       this.$el.html(_.template($("#manage-eventList-template").html()));
      
//       // this.input = this.$("#new-event");
//       // this.allCheckbox = this.$("#toggle-all")[0];

//       // Create our collection of EventList
//       this.eventList = new EventList;

//       // Setup the query for the collection to look for todos from the current user
//       this.eventList.query = new Parse.Query(Event);

//       this.eventList.bind('add', this.addOne);
//       this.eventList.bind('reset', this.addAll);
//       this.eventList.bind('all', this.render);

//       // Fetch all the event list items
//       this.eventList.fetch();

//       state.on("change", this.filter, this);
//     },

//     // Re-rendering the App just means refreshing the statistics -- the rest
//     // of the app doesn't change.
//     render: function() {
//       var upcoming = this.eventList.upcoming().length;
//       var past = this.eventList.past().length;

//       this.$('#eventList-stats').html(this.statsTemplate({
//          total:      this.eventList.length,
//          upcoming:       upcoming,
//          past:  past
//       }));

//       this.delegateEvents();
//     },


//     // Filters the list based on which type of filter is selected
//     selectFilter: function(e) {
//       var el = $(e.target);
//       var filterValue = el.attr("id");
//       state.set({filter: filterValue});
//       Parse.history.navigate(filterValue);
//     },

//     filter: function() {
//       var filterValue = state.get("filter");
//       this.$("ul#filters a").removeClass("selected");
//       this.$("ul#filters a#" + filterValue).addClass("selected");
//       if (filterValue === "all") {
//         this.addAll();
//       } else if (filterValue === "upcoming") {
//         this.addSome(function(item) { return (item.get('status') == 'upcoming' ? true : false); });
//       } else {
//         this.addSome(function(item) { return (item.get('status') == 'past' ? true : false); });
//       }
//     },

//     // Resets the filters to display event list.
//     resetFilters: function() {
//       this.$("ul#filters a").removeClass("selected");
//       this.$("ul#filters a#all").addClass("selected");
//       this.addAll();
//     },

//     // Add a single event item to the list by creating a view for it, and
//     // appending its element to the `<ul>`.
//     addOne: function(anEvent) {
//       var view = new EventListItemView({model: anEvent});
//       this.$("#event-list").append(view.render().el);
//     },

//     // Add all items in the EventList collection at once.
//     addAll: function(collection, filter) {
//       this.$("#event-list").html("");
//       this.eventList.each(this.addOne);
//     },

//     // Only adds some todos, based on a filtering function that is passed in
//     addSome: function(filter) {
//       var self = this;
//       this.$("#event-list").html("");
//       this.eventList.chain().filter(filter).each(function(item) { self.addOne(item) });
//     }

//   });



//   // The main view for the app
//   var AppView = Parse.View.extend({
//     // Instead of generating a new element, bind to the existing skeleton of
//     // the App already present in the HTML.
//     el: $("#eventapp"),

//     initialize: function() {
//       this.render();
//     },

//     render: function() {
//       // if (Parse.User.current()) {
//        new ManageEventListView();
//       // } else {
//       //   new LogInView();
//       // }
//     }
//   });

//   var AppRouter = Parse.Router.extend({
//     routes: {
//       "all": "all",
//       "upcoming": "upcoming",
//       "past": "past"
//     },

//     initialize: function(options) {
//     },

//     all: function() {
//       state.set({ filter: "all" });
//     },

//     upcoming: function() {
//       state.set({ filter: "upcoming" });
//     },

//     past: function() {
//       state.set({ filter: "past" });
//     }
//   });

//   var state = new AppState;

//   new AppRouter;
//   new AppView;
//   Parse.history.start();
// });