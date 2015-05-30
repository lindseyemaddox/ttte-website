<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<section id="mast">
	
	<img src="/_assets/img/header-calendar.jpg" alt="R. Winston Morris conducting the Tennessee Tech Tuba Ensemble" title="R. Winston Morris conducting the Tennessee Tech Tuba Ensemble">

</section><!--mast-->
<section>

 <div id="full-clndr" class="clearfix">
          <script type="text/template" id="full-clndr-template">
            <div class="clndr-controls">
              <div class="clndr-previous-button">&lt;</div>
              <div class="clndr-next-button">&gt;</div>
              <div class="current-month"><%= month %> <%= year %></div>

            </div>
            <div class="clndr-table">
              <div class="days-of-the-week clearfix">
                <% _.each(daysOfTheWeek, function(day) { %>
                  <div class="header-day"><%= day %></div>
                <% }); %>
              </div>
              <div class="days">
                <% _.each(days, function(day) { %>
                  <div class="<%= day.classes %>" id="<%= day.id %>"><span class="day-number"><%= day.day %></span></div>
                <% }); %>
              </div>
            </div>
            <div class="event-listing">
              <div class="event-listing-title">EVENTS THIS MONTH</div>
              <% _.each(eventsThisMonth, function(event) { %>
                  <div class="event-item">
                    <div class="event-item-name"><%= event.title %></div>
                    <div class="event-item-location"><%= event.location %></div>
                  </div>
                <% }); %>
            </div>
            </script>
   </section>
<section id="main" class="calendar">

	<div class="inner">
	
		<h1>Calendar of Events</h1>

    	<div class="cal1"></div>

		<h6><a href="#">download printable calendar</a> | <a href="#">import calendar to iCal</a> | <a href="#">import calendar to Outlook</a></h6>

		<h5>Events are generally located in Wattenbarger Auditorium in the Bryan Fine Arts Building on the Tennessee Tech Campus in Cookeville, Tennessee. Unless otherwise noted, all events are free, open to the public and everyone is invited. <span>Before traveling any distance confirm event with the tuba studio: <a href="tel:19313723168">(931) 372-3168</a>.</span></h5>

	</div><!--inner-->

</section><!--main-->
  <script src="/_assets/js/json2.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
  <script src= "/_assets/js/moment-2.8.3.js"></script>
  <script src="/_assets/js/clndr.js"></script>
  <script type="text/javascript">
  $(function(){

  	  var currentMonth = moment().format('YYYY-MM');
  var nextMonth    = moment().add('month', 1).format('YYYY-MM');

  var events = [
    { date: currentMonth + '-' + '10', title: 'Persian Kitten Auction', location: 'Center for Beautiful Cats' },
    { date: currentMonth + '-' + '19', title: 'Cat Frisbee', location: 'Jefferson Park' },
    { date: currentMonth + '-' + '23', title: 'Kitten Demonstration', location: 'Center for Beautiful Cats' },
    { date: nextMonth + '-' + '07',    title: 'Small Cat Photo Session', location: 'Center for Cat Photography' }
  ];

  $('#full-clndr').clndr({
    template: $('#full-clndr-template').html(),
    events: events,
    forceSixRows: true
  });
  console.log(events.date);
  });</script>
 <script src="/_assets/js/site.js"></script>
  <!-- Enable live-reloading in the browser without an extension
  <script src="http://localhost:35729/livereload.js"></script>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>