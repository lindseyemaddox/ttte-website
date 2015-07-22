@@ -1,4 +1,7 @@
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<script type="text/javascript" src="/_assets/js/en.js"></script>
<script type="text/javascript" src="/_assets/js/oCalendar.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="css/blue.css"/> -->
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<section id="mast">

	<img src="/_assets/img/header-calendar.jpg" alt="R. Winston Morris conducting the Tennessee Tech Tuba Ensemble" title="R. Winston Morris conducting the Tennessee Tech Tuba Ensemble">

</section><!--mast-->
<section>

 <div id="full-clndr" class="clearfix">
       <script type="text/template" id="template-calendar">
        <div class="clndr-controls">
          <div class="clndr-previous-button">&lsaquo;</div>
          <div class="month"><%= month %></div>
          <div class="clndr-next-button">&rsaquo;</div>
        </div>
        <div class="clndr-grid">
          <div class="days-of-the-week">
            <% _.each(daysOfTheWeek, function(day) { %>
              <div class="header-day"><%= day %></div>
            <% }); %>
            <div class="days">
              <% _.each(days, function(day) { %>
                <div class="<%= day.classes %>"><%= day.day %></div>
              <% }); %>
            </div>
          </div>
        </div>
        <div class="clndr-today-button">Today</div>
      </script>
   </section>
<section id="main" class="calendar">

	<div class="inner">
	
		<h1>Calendar of Events</h1>

    	<div class="cal1"></div>
    	<div id="full-clndr"></div>

		<h6><a href="#">download printable calendar</a> | <a href="#">import calendar to iCal</a> | <a href="#">import calendar to Outlook</a></h6>

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
  console.log('EVENT',events[3].date);

// $("#calendar").oCalendar({
//     width: 500,
//     height:650,
//     useAbbr:true,
//     startDay:1,
//     allowCud: false,
//     url:"/remote.php"
// }); 

  $('#full-clndr').clndr({
    template: $('#full-clndr-template').html(),
    events: events,
    forceSixRows: true
  });
  })();
  </script>
 <script src="/_assets/js/site.js"></script>
  <!-- Enable live-reloading in the browser without an extension
  <script src="http://localhost:35729/livereload.js"></script>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?> 
