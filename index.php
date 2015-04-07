<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<script type="text/javascript" src="/_assets/js/flexslider.jquery.js"></script>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<section class="slider">
	<div class="flexslider headlines carousel">
		<ul class="slides">
			<li>
				<div class="headline">
					<p class="number">8</p>
					<p class="tag">Carnegie <br/>Performances</p>
				</div><!--headline-->
			</li>
			<li>
				<div class="headline">
					<p class="number">8</p>
					<p class="tag">Commercial <br/>Recordings</p>
				</div><!--headline-->
			</li>
			<li>
				<div class="headline">
					<p class="number">8</p>
					<p class="tag">Years In <br/>Existence</p>
				</div><!--headline-->
			</li>
			<li>
				<div class="headline">
					<p class="number">8</p>
					<p class="tag">Current <br/>Members</p>
				</div><!--headline-->
			</li>
			<li>
				<div class="headline">
					<p class="number">8</p>
					<p class="tag">Commissioned <br/>Pieces</p>
				</div><!--headline-->
			</li>
			<li>
				<div class="headline">
					<p class="number">8</p>
					<p class="tag">Alumni <br/>Members</p>
				</div><!--headline-->
			</li>
			<li>
				<div class="headline">
					<p class="number">8</p>
					<p class="tag">Books <br/>Published</p>
				</div><!--headline-->
			</li>
			<li>
				<div class="headline">
					<p class="number">8</p>
					<p class="tag">Professional <br/>Alumni</p>
				</div><!--headline-->
			</li>
		</ul>
	</div>
	<div class="overlay"></div>
	<div class="flexslider carousel">
		<ul class="slides">
			<li>
			    <img src="/_assets/img/slide-ensemble-2014.jpg" alt="Tennessee Tech Tuba Ensemble 2014" alt="Tennessee Tech Tuba Ensemble 2014">
			</li>
			<li>
			    <img src="/_assets/img/slide-ensemble-2007.jpg" alt="Tennessee Tech Tuba Ensemble 2007" alt="Tennessee Tech Tuba Ensemble 2007">
			</li>
			<li>
			    <img src="/_assets/img/slide-ensemble-2001.jpg" alt="Tennessee Tech Tuba Ensemble 2001" alt="Tennessee Tech Tuba Ensemble 2001">
			</li>
			<li>
			    <img src="/_assets/img/slide-ensemble-2006.jpg" alt="Tennessee Tech Tuba Ensemble 2006" alt="Tennessee Tech Tuba Ensemble 2006">
			</li>
			<li>
			    <img src="/_assets/img/slide-ensemble-2005.jpg" alt="Tennessee Tech Tuba Ensemble 2005" alt="Tennessee Tech Tuba Ensemble 2005">
			</li>
			<li>
			    <img src="/_assets/img/slide-ensemble-2012.jpg" alt="Tennessee Tech Tuba Ensemble 2012" alt="Tennessee Tech Tuba Ensemble 2012">
			</li>
			<li>
			    <img src="/_assets/img/slide-ensemble-2010.jpg" alt="Tennessee Tech Tuba Ensemble 2010" alt="Tennessee Tech Tuba Ensemble 2010">
			</li>
			<li>
			    <img src="/_assets/img/slide-ensemble-2009.jpg" alt="Tennessee Tech Tuba Ensemble 2009" alt="Tennessee Tech Tuba Ensemble 2009">
			</li>
		</ul>
	</div>
</section>

<section id="intro">
	<div class="inner">
		<div id="text">
			<h1>Welcome to the Tennessee Technological University Tuba/Euphonium Studio website. This is the website for the internationally acclaimed <a href="/ttte/">Tennessee Tech Tuba Ensemble</a>, TTTE <a href="/recordings/">recordings</a> and the TTU chapter of <a href="http://www.iteaonline.org/index.php" target="_blank" rel="nofollow">International Tuba/Euphonium Association</a> (previously: T.U.B.A.). You can also access information here on all our <a href="/alumni/">alumni</a>, current <a href="/calendar/">calendar</a> of events (off campus performances, on campus performances) and other activities.</h1>
		</div><!--text-->
	</div><!--inner-->
	<div id="rwm"><img src="/_assets/img/r-winston-morris.png" alt="R. Winston Morris" title="R. Winston Morris">
</section><!--intro-->

<script type="text/javascript">
	$(function(){
	  SyntaxHighlighter.all();
	});
	$(window).load(function(){
	  $('.flexslider, .flexslider-headline').flexslider({
	    animation: "slide",
	    start: function(slider){
	      $('body').removeClass('loading');
	    }
	  });
	});
</script>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>