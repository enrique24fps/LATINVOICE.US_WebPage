<?php

	$user = $_POST['user'];
	$date = $_POST['date'];
	$fileName = $_POST['fileName'];
	$timecode = $_POST['timecode'];
	$actualSubtitleNumber = $_POST['actualSubtitleNumber'];
	$totalSubs = $_POST['totalSubs'];
	$lastTimecode = $_POST['lastTimecode'];
	
	
	$file = "user_report_Ale.txt";
	$myString = $user." ".$date." ".$fileName." ".$timecode." ".$actualLoopNumber." ".$totalLoops." ".$lastTimecode."\n\r";
	file_put_contents($file, $myString, FILE_APPEND | LOCK_EX);
	//$getData = file_get_contents($file);
	echo 'DONE'    //$getData;

?>
