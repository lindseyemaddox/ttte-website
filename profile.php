<?php
	$member_id = $_GET['id'];

	// make database connection
	// depends on what database you are using. This is for mysqli

	// change these to what yours are
	$dbSettings = array(
	'db_name'  => 'ttte',
	'hostname' => 'localhost',
	'user'     => 'root',
	'password' => 'aza1ea99',
	);

	// setup connection
	$dbConn = mysqli_connect($dbSettings['hostname'], $dbSettings['user'], $dbSettings['password'], $dbSettings['db_name']);

	//make the query, change table_name to the table you need to get data from
	$mysql_query = "SELECT * FROM alumni WHERE id={$member_id}";

	// get the results
	$result = mysqli_query($dbConn, $mysql_query) or die("Error: " . mysqli_error($dbConn));

	while ($member = mysqli_fetch_assoc($result))
	{
		echo '<h1>'.$member['name-first'].'</h1>';
	}
?>