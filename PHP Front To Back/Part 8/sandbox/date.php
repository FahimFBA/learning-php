<?php
	echo date('d'); // Day
	echo '<br>';
	echo date('m'); // Month
	echo '<br>';
	echo date('Y'); // Year
	echo '<br>';
	echo date('1'); // Day of the week
	echo '<br>';
	echo date('Y/m/d'); // 2023/08/11
	echo '<br>';
	echo date('m/d/Y'); // 08/11/2023
	echo '<br>';
	echo date('m-d-Y'); // 08-11-2023
	echo '<br>';
	echo date('h'); // Hour
	echo '<br>';
	echo date('i'); // Minute
	echo '<br>';
	echo date('s'); // Second
	echo '<br>';
	echo date('a'); // AM or PM
	echo '<br>';

	// We need to define the timezone to get my timezone's time
	echo date('h:i:sa'); // 02:52:41pm
	echo '<br>';
	// Set time zone
	date_default_timezone_set('Asia/Dhaka');
	echo date('h:i:sa'); // 06:54:20pm = timezone for Dhaka
	echo '<br>';


	/*
	Unix timestamp is a long integer containing the number of seconds
	between the Unix Epoch (January 1 1970 00:00;)) GPT
	and the time specified.
	*/
	$timestamp = mktime(10, 14, 54, 9, 10, 1981);
	echo $timestamp; // 368943294
	echo '<br>';

	// Readable date
	echo date('m/d/Y h:i:sa', $timestamp); // 09/10/1981 10:14:54am
	echo '<br>';

	$timestamp2 = strtotime('7:00pm March 22 2016');
	echo $timestamp2; //1458651600
	echo '<br>';
	echo date('m/d/Y h:i:sa', $timestamp2); // 03/22/2016 07:00:00pm
	echo '<br>';
	$timestamp3 = strtotime('tomorrow');
	echo $timestamp3;
	echo '<br>';
	echo date('m/d/Y h:i:sa', $timestamp3); // 08/12/2023 12:00:00am
	echo '<br>';
	$timestamp4 = strtotime('next Sunday');
	echo $timestamp4;
	echo '<br>'; // 1691863200
	echo date('m/d/Y h:i:sa', $timestamp4); // 08/13/2023 12:00:00am
	$timestamp5 = strtotime('+2 Months'); // or +2 Days or +2 Years or anything like that
	echo '<br>';
	echo date('m/d/Y h:i:sa', $timestamp5); // 10/11/2023 07:50:20pm
?>