<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<section id="mast">
	
	<img src="/_assets/img/header-contact.jpg" alt="R. Winston Morris conducting the Tennessee Tech Tuba Ensemble" title="R. Winston Morris conducting the Tennessee Tech Tuba Ensemble">

</section><!--mast-->

<section id="main" class="contact">

	<div class="inner">
	
		<h1>Contact the Tuba Studio</h1>
		
		<div class="form">

		    <?php
		        $name = $_REQUEST['name'] ;
		        $email = $_REQUEST['email'] ;
		        $phone = $_REQUEST['phone'] ;
		        $desc = $_REQUEST['desc'] ;
		        if (isset($_POST['submit'])) {
		          $to = 'lindseyemaddox@gmail.com';
		          $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
		          $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
		          $headers .= "MIME-Version: 1.0\r\n";
		          $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		          $message = '<html><body>';
		          $message .= 'Name: '.$name.'<br>';
		          $message .= 'Email: '.$email.'<br>';
		          $message .= 'Phone: '.$phone.'<br>';
		          $message .= 'How May We Help You: '.$desc.'<br>';
		          $message .= '</body></html>';
		          $subject = 'new form submission';

		    mail($to, $subject, $message, $headers);
		    echo "<div style='padding: 50px 20px 80px; color: #fff; text-align: center;'><label>Thank you for using our form. We will be in contact with you as soon as possible.</label></div>";
		  }
		else
		  { echo "
		        <form method='post' action='".$_SERVER['SCRIPT_NAME']."'>
			        <label for='name'>Name (required)</label><input type='text' required name='name' id='name' size='10'>
			        <label for='phone'>Phone (required)</label><input type='text' required name='phone' id='phone' size='10'>
			        <label for='email'>Email</label><input type='text' name='email' id='email' size='10'>
		    		<label for='desc'>How May We Help You?</label>
			        <textarea name='desc' id='desc' size='10'></textarea>
			        <button class='submit btn' type='submit' name='submit'>Send Form</button>
		      </form>";
		      }
		    ?>

		</div><!--form-->

		<article class="right">
			
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6441.220038338784!2d-85.50857715!3d36.176043449999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886722090e0ca58b%3A0xaf98e352ce6abdc2!2sTennessee+Tech+University!5e0!3m2!1sen!2sus!4v1432876189566" width="100%" height="540" frameborder="0" style="border:0"></iframe>

		</article>

	</div><!--inner-->

</section>


<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>