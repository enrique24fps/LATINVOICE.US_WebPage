<?php

	$file = "EXL_to_RTF_requests_report.txt";
	$getData = file_get_contents($file);
	echo nl2br($getData);
	
?>