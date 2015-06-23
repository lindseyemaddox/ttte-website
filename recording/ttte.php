<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<script src="/_assets/js/fancybox.jquery.js"></script>

<section class="recording">

	<div class="inner">
	
                    <?php
                      // make database connection
                      $dbSettings = array(
                        'db_name'  => 'ttte',
                        'hostname' => 'localhost',
                        'user'     => 'root',
                        'password' => 'aza1ea99',
                      );

                      // setup connection
                      $dbConn = mysqli_connect($dbSettings['hostname'], $dbSettings['user'], $dbSettings['password'], $dbSettings['db_name']);

                      //make the query, change table_name to the table you need to get data from
                      $mysql_query = "SELECT 1 FROM recordings";

                      // get the results
                      $result = mysqli_query($dbConn, $mysql_query) or die("Error: " . mysqli_error($dbConn));

                      {

                    ?>
          <article>
            <h5><?= $record['name']; ?></h5>
            <h6><?= $record['ensemble']; ?></h6>
            <img src="_assets/img/recording-<?= $record['short-name']; ?>.jpg">
            <p><?= $record['snippet']; ?></p>
            <p class="date">Label: <?= $label['label']; ?></p>
            <p class="date">Date Recorded: <?= $record['date-recorded']; ?></p>
            <p class="date">Date Released: <?= $record['date-released']; ?></p>
            <p class="date">Location Recorded: <?= $record['location-recorded']; ?></p>
            <a href="/form/order.php"  class="btn fancybox fancybox.iframe <?= ($record['available']) ? 'available': null; ?>">Order Now</a>
          </article>
          <?php
            } //endwhile
          ?>

	</div><!--inner-->

</section><!--main-->

<script>

$(".fancybox")
    .fancybox({
        padding : 0
    });

</script>

</body>
</html>