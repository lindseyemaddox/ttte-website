<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<script type="text/javascript" src="/_assets/js/flexslider.jquery.js"></script>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<section class="slider">
	<div class="overlay"></div>
	<div class="flexslider carousel">
		<ul class="slides">
			<li>
				<div class="headline">
					<p class="number">8</p>
					<p class="tag">Carnegie <br/>Performances</p>
				</div><!--headline-->
			    <img src="/_assets/img/slide-ensemble-2014.jpg" alt="Tennessee Tech Tuba Ensemble 2014" alt="Tennessee Tech Tuba Ensemble 2014" />
			</li>
		</ul>
	</div>
</section>

<script type="text/javascript">
	$(function(){
	  SyntaxHighlighter.all();
	});
	$(window).load(function(){
	  $('.flexslider').flexslider({
	    start: function(slider){
	      $('body').removeClass('loading');
	    }
	  });
	});
</script>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>