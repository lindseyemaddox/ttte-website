<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<script type="text/javascript" src="/_assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/_assets/js/res-timeline.js"></script>
  <script type= "text/javascript">
  $(document).ready(function(){
  
    $('div.jflatTimeline').jflatTimeline({
                scroll : '2',    //max dates scrolling per arrow click
                width : '60%', //width; It can also be done with css. - .jflatTimeline{width : x%;}
                scrollingTime : '300' // scrolling time
              });
  })
  </script>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<section id="mast">

	<img src="/_assets/img/header-calendar.jpg" alt="R. Winston Morris conducting the Tennessee Tech Tuba Ensemble" title="R. Winston Morris conducting the Tennessee Tech Tuba Ensemble">

</section><!--mast-->

<section id="main" class="calendar">

	<div class="inner">
	
		<h1>Calendar of Events</h1>

  <div class="jflatTimeline">

    <div class="timeline-wrap">
        
      <div class="event selected" data-date="03/9/2013"> <!-- BEGIN EVENT. DATE FORMAT - MM/DD/YYYY -->
        <div class="layout1"> <!-- BEGIN 'LAYOUT1' -->
          <div class="left">
            <img src="/_assets/img/1.jpg" alt="image alt"/>
          </div>
          <div class="right">
            <h3>This is Layout 1</h3>
            <p>Some text goes here...</p>
          </div>
        </div>
        <span class="date"><i class="icon-calendar"></i>09.03.2013</span>
      </div><!-- END EVENT -->
    
      <div class="event" data-date="03/11/2013">
        <div class="layout2"> <!-- BEGIN 'LAYOUT2' -->
          <div class="left">
            <h3>This is Layout 2</h3>
            <p>Some text goes here...</p>
          </div>
          <div class="right">
            <img src="/_assets/img/1.jpg" alt="image alt"/>
          </div>
        </div>
        <span class="date"><i class="icon-calendar"></i>11.03.2013</span>
      </div>      
      
      
      <div class="event" data-date="04/06/2013">
        <div class="layout3"> <!-- BEGIN 'LAYOUT3' -->
          <img src="/_assets/img/3.jpg" alt="image alt"/>
          <h3>This is Layout 3</h3>
          <p>Some text goes here...</p> 
        </div>
        <span class="date"><i class="icon-calendar"></i>06.04.2013</span>
      </div>      
      
      <div class="event" data-date="04/09/2013">
        <div class="layout4"> <!-- BEGIN 'LAYOUT4' -->
          <h3>This is Layout 4</h3>
          <p>Some text goes here...</p>
        </div>
        <span class="date"><i class="icon-calendar"></i>09.04.2013</span>
      </div>
            
      <div class="event" data-date="07/08/2013">
        <div class="layout5"> <!-- BEGIN 'LAYOUT5' -->
          <h3>Simple Mini Event Layout 5</h3>   
        </div>
        <span class="date"><i class="icon-calendar"></i>08.07.2013</span>
      </div>
    </div>  
  </div>

		<!-- <h6><a href="#">download printable calendar</a> | <a href="#">import calendar to iCal</a> | <a href="#">import calendar to Outlook</a></h6> -->

	</div><!--inner-->

</section><!--main-->

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>
