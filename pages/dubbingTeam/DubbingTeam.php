<!DOCTYPE html>

<html>
    <head>
    	<title>Latin Voice Inc - Admin</title>
    	<META HTTP-EQUIV="refresh" CONTENT="300">
    </head>
    
    <body>
    	
    	<?php   
    		$file = "user_report_Enrique.txt";
			$getDataEnrique = nl2br(file_get_contents($file));
			$enrique = explode(" ",substr($getDataEnrique,strrpos($getDataEnrique,"Enrique")));
			
			$file2 = "user_report_Ale.txt";
			$getDataAle = nl2br(file_get_contents($file2));
			$ale = explode(" ",substr($getDataAle,strrpos($getDataAle,"Ale")));
			
    	?>
    	
    	
    	<h1>Dubbing team</h1>    	
    	
    	<table style="width:100%">
  			<tr>
    			<td><h4>USER</h4></td>
    			<td><h4>DATE</h4></td>		
    			<td><h4>FILE NAME</h4></td>
    			<td><h4>TIMECODE</h4></td>
    			<td><h4>LOOP</h4></td>
    			<td><h4>TOTAL LOOPS</h4></td>
    			<td><h4>VIDEO</h4></td>
  			</tr>
  			<tr>
    			<td>ENRIQUE</td>
    			<td><?php echo $enrique[1];?></td>		
    			<td><?php echo $enrique[2];?></td>
    			<td><?php echo $enrique[3];?></td>
    			<td><?php echo $enrique[4];?></td>
    			<td><?php echo $enrique[5];?></td>
    			<td><?php echo $enrique[6];?></td>
  			</tr>
  			<tr>
    			<td>ALE</td>
    			<td><?php echo $ale[1];?></td>		
    			<td><?php echo $ale[2];?></td>
    			<td><?php echo $ale[3];?></td>
    			<td><?php echo $ale[4];?></td>
    			<td><?php echo $ale[5];?></td>
    			<td><?php echo $ale[6];?></td>
  			</tr>
		</table>
    	<br/>
    	<h2>Reports management</h2>
    	<h3>Download user reports</h3>
    	
    	<form action="downloadDubbingReports.php" method="post">
    		<input type="submit" class="button" name="name" value="Download_Enrique_report" />
    		<input type="submit" class="button" name="name" value="Download_Ale_report" />
		</form>
		
		<br/>
		<h3>Reset user reports</h3>
    	<form action="resetDubbingReports.php" method="post">
    		<input type="submit" class="button" name="reset" value="Reset_Enrique_report" />
    		<input type="submit" class="button" name="reset" value="Reset_Ale_report" />
		</form>	
		<br/>
	</body>
</html>
 
