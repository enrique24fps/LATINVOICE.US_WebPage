<?php

$reset = $_POST['reset'];
$content ="USER DATE FILE_NAME TIMECODE ACTUAL_SUB_NUMBER TOTAL_SUBS VIDEO\n\r";
$contentRTF ="USER DATE FILE_NAME TOTAL_SUBS\n\r";

switch ($reset) {
	case "Reset_Enrique_report":
		$file = "user_report_Enrique.txt";
		file_put_contents($file, $content);
		break;
		
	case "Reset_Martin_report":
		$file = "user_report_Martin.txt";
		file_put_contents($file, $content);
		break;
		
	case "Reset_Ale_report":
		$file = "user_report_Ale.txt";
		file_put_contents($file, $content);
		break;
		
	case "Reset_Fidel_report": 
		$file = "user_report_Fidel.txt";
		file_put_contents($file, $content);
		break;
		
	case "Reset_Ivonne_report":
		$file = "user_report_Ivonne.txt";
		file_put_contents($file, $content);
		break;
		
	case "Reset_Ivan_report":
		$file = "user_report_Ivan.txt";
		file_put_contents($file, $content);
		break;
		
	case "Reset_Ivan_LAP_report":
		$file = "user_report_Ivan_LAP.txt";
		file_put_contents($file, $content);
		break;
		
	case "Reset_Barbara_report":
		$file = "user_report_Barbara.txt";
		file_put_contents($file, $content);
		break;
		
	case "Reset_Rafael_report":
		$file = "user_report_Rafael.txt";
		file_put_contents($file, $content);
		break;
	
	case "Reset_RTF_report":
		$file = "EXL_to_RTF_requests_report.txt";
		file_put_contents($file, $contentRTF);
		break;
	
	default:
}

header('Location: http://latinvoice.us/pages/linguisticsTeam.php');

?>
