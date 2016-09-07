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
		
	case "Download_Ale_report":
		$file3 = "user_report_Ale.txt"; 
		header("Content-Description: File Transfer"); 
		header("Content-Type: application/octet-stream"); 
		header("Content-Disposition: attachment; filename=\"$file3\""); 
		readfile ($file3);
		break;
		
	default:


header('Location: http://latinvoice.us/pages/dubbingTeam/DubbingTeam.php');
}	
?>