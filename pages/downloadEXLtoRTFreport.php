<?php

	$exlToRtfReport = "EXL_to_RTF_requests_report.txt"; 
	header("Content-Description: File Transfer"); 
	header("Content-Type: application/octet-stream"); 
	header("Content-Disposition: attachment; filename=\"exlToRtfReport\""); 
	readfile ($exlToRtfReport);

header('Location: http://latinvoice.us/pages/linguisticsTeam.php');	
}	
?>