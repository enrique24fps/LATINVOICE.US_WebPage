<?php

$name = $_POST['name'];

switch ($name) {
	case "Download_Enrique_report":
		$file1 = "user_report_Enrique.txt"; 
		header("Content-Description: File Transfer"); 
		header("Content-Type: application/octet-stream"); 
		header("Content-Disposition: attachment; filename=\"$file1\""); 
		readfile ($file1);
		break;
		
	case "Download_Martin_report":
		$file2 = "user_report_Martin.txt"; 
		header("Content-Description: File Transfer"); 
		header("Content-Type: application/octet-stream"); 
		header("Content-Disposition: attachment; filename=\"$file2\""); 
		readfile ($file2);
		break;
		
	case "Download_Ale_report":
		$file3 = "user_report_Ale.txt"; 
		header("Content-Description: File Transfer"); 
		header("Content-Type: application/octet-stream"); 
		header("Content-Disposition: attachment; filename=\"$file3\""); 
		readfile ($file3);
		break;
		
	case "Download_Fidel_report":
		$file4 = "user_report_Fidel.txt"; 
		header("Content-Description: File Transfer"); 
		header("Content-Type: application/octet-stream"); 
		header("Content-Disposition: attachment; filename=\"$file4\""); 
		readfile ($file4);
		break;
		
	case "Download_Ivonne_report":
		$file5 = "user_report_Ivonne.txt"; 
		header("Content-Description: File Transfer"); 
		header("Content-Type: application/octet-stream"); 
		header("Content-Disposition: attachment; filename=\"$file5\""); 
		readfile ($file5);
		break;
		
	case "Download_Ivan_report":
		$file6 = "user_report_Ivan.txt"; 
		header("Content-Description: File Transfer"); 
		header("Content-Type: application/octet-stream"); 
		header("Content-Disposition: attachment; filename=\"$file6\""); 
		readfile ($file6);
		break;
		
	case "Download_Ivan_LAP_report":
		$file7 = "user_report_Ivan_LAP.txt"; 
		header("Content-Description: File Transfer"); 
		header("Content-Type: application/octet-stream"); 
		header("Content-Disposition: attachment; filename=\"$file7\""); 
		readfile ($file7);
		break;
		
	case "Download_Barbara_report":
		$file8 = "user_report_Barbara.txt"; 
		header("Content-Description: File Transfer"); 
		header("Content-Type: application/octet-stream"); 
		header("Content-Disposition: attachment; filename=\"$file8\""); 
		readfile ($file8);
		break;
		
	case "Download_Rafael_report":
		$file9 = "user_report_Rafael.txt"; 
		header("Content-Description: File Transfer"); 
		header("Content-Type: application/octet-stream"); 
		header("Content-Disposition: attachment; filename=\"$file9\""); 
		readfile ($file9);
		break;
		
		
	default:


header('Location: http://latinvoice.us/pages/linguisticsTeam.php');	
}	
?>