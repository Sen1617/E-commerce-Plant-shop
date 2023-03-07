<?php
	session_start();
	echo "Welcome " . $_SESSION['email'];
	echo '<br><br>You have visited here '.$_SESSION['visits'].' times';
	echo '<br><br>SESSION ID: ' .$_SESSION['id'];

	//echo "<br>Last access Time: " .$_SESSION['start_time'];
	
	//lastaccesstime
	$unix_timestamp = $_SESSION['start_time'];
	$datetime = new DateTime("@$unix_timestamp");
	// Display GMT datetime
	//echo $datetime->format('d-m-Y H:i:s');
	$date_time_format = $datetime->format('Y-m-d H:i:s');
	$time_zone_from="UTC";
	$time_zone_to='Asia/Kolkata';
	$display_date = new DateTime($date_time_format, new DateTimeZone($time_zone_from));
	// Date time with specific timezone
	$display_date->setTimezone(new DateTimeZone($time_zone_to));
	echo "<br><br>CREATED TIME: " .$display_date->format('d-m-Y H:i:s');


	//echo "<br>start time : ".$_SESSION['start_time'];
	
	//echo "<br><br>full format: ".date('l jS \of F Y h:i:s A')."<br>";
	date_default_timezone_set('Asia/Kolkata');
	echo "<br><br>LAST ACCESS TIME: " .date(DATE_RFC2822). "<br>";

	echo "<br><br><a href='logout.php'>logout</a>";
?>