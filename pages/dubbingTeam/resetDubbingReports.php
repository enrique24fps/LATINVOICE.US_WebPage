<?php

$reset = $_POST['reset'];
$content ="USER DATE FILE_NAME TIMECODE ACTUAL_LOOP_NUMBER TOTAL_LOOPS VIDEO\n\r";
$contentRTF ="USER DATE FILE_NAME TOTAL_LOOPS\n\r";

switch ($reset) {
	case "Reset_Enrique_report":
		$file = "user_report_Enrique.txt";
		file_put_contents($file, $content);
		break;
		
	case "Reset_Ale_report":
		$file = "user_report_Ale.txt";
		file_put_contents($file, $content);
		break;
		
	default:
}

header('Location: http://latinvoice.us/pages/dubbingTeam/DubbingTeam.php');

?>
