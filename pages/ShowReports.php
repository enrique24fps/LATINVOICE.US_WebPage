<?php

$name = $_POST['name'];

switch ($name) {
	case "Show_Enrique_report":
		$file1 = "user_report_Enrique.txt"; 
		echo nl2br( file_get_contents($file1) );
		break;
		
	case "Show_Martin_report":
		$file2 = "user_report_Martin.txt"; 
		echo nl2br( file_get_contents($file2) );
		break;
		
	case "Show_Ale_report":
		$file3 = "user_report_Ale.txt"; 
		echo nl2br( file_get_contents($file3) );
		break;
		
	case "Show_Fidel_report":
		$file4 = "user_report_Fidel.txt"; 
		echo nl2br( file_get_contents($file4) );
		break;
		
	case "Show_Ivonne_report":
		$file5 = "user_report_Ivonne.txt"; 
		echo nl2br( file_get_contents($file5) );
		break;
		
	case "Show_Ivan_report":
		$file6 = "user_report_Ivan.txt"; 
		echo nl2br( file_get_contents($file6) );
		break;
		
	case "Show_Ivan_LAP_report":
		$file7 = "user_report_Ivan_LAP.txt"; 
		echo nl2br( file_get_contents($file7) );
		break;
		
	case "Show_Barbara_report":
		$file8 = "user_report_Barbara.txt"; 
		echo nl2br( file_get_contents($file8) );
		break;
		
	case "Show_Rafael_report":
		$file9 = "user_report_Rafael.txt"; 
		echo nl2br( file_get_contents($file9) );
		break;		
		
	default:


header('Location: http://latinvoice.us/pages/linguisticsTeam.php');	
}	
?>