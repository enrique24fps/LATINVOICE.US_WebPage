<?php

	$user = $_POST['user'];
	$date = $_POST['date'];
	$fileName = $_POST['fileName'];
	$totalSubs = $_POST['totalSubs'];

	$file = "EXL_to_RTF_requests_report.txt";
	$myString = $user."         ".$date."      ".$fileName."           ".$totalSubs."\n\r";
	file_put_contents($file, $myString, FILE_APPEND | LOCK_EX);
	//$getData = file_get_contents($file);
	echo 'OK'    

?>
