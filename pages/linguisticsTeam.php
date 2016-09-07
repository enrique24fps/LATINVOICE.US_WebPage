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
			
			$file2 = "user_report_Martin.txt";
			$getDataMartin = nl2br(file_get_contents($file2));
			$martin = explode(" ",substr($getDataMartin,strrpos($getDataMartin,"Martin")));
			
			$file3 = "user_report_Ivan.txt";
			$getDataIvan = nl2br(file_get_contents($file3));
			$ivan = explode(" ",substr($getDataIvan,strrpos($getDataIvan,"Ivan")));
			
			$file4 = "user_report_Ale.txt";
			$getDataAle = nl2br(file_get_contents($file4));
			$ale = explode(" ",substr($getDataAle,strrpos($getDataAle,"Ale")));
			
			$file5 = "user_report_Fidel.txt";
			$getDataFidel = nl2br(file_get_contents($file5));
			$fidel = explode(" ",substr($getDataFidel,strrpos($getDataFidel,"Fidel")));
			
			$file6 = "user_report_Ivonne.txt";
			$getDataIvonne = nl2br(file_get_contents($file6));
			$ivonne = explode(" ",substr($getDataIvonne,strrpos($getDataIvonne,"Ivonne")));
			
			$file7 = "user_report_Ivan_LAP.txt";
			$getDataIvan_LAP = nl2br(file_get_contents($file7));
			$ivan_LAP = explode(" ",substr($getDataIvan_LAP,strrpos($getDataIvan_LAP,"Ivan_LAP")));
			
			$file8 = "user_report_Barbara.txt";
			$getDataBarbara = nl2br(file_get_contents($file8));
			$Barbara = explode(" ",substr($getDataBarbara,strrpos($getDataBarbara,"Barbara")));
			
			$file9 = "user_report_Rafael.txt";
			$getDataRafael = nl2br(file_get_contents($file9));
			$Rafael = explode(" ",substr($getDataRafael,strrpos($getDataRafael,"Rafael")));
			
    	?>
    	
    	
    	<h1>Linguistics team</h1>    	
    	
    	<table style="width:100%">
  			<tr>
    			<td><h4>USER</h4></td>
    			<td><h4>DATE</h4></td>		
    			<td><h4>FILE NAME</h4></td>
    			<td><h4>TIMECODE</h4></td>
    			<td><h4>SUBTITLE</h4></td>
    			<td><h4>TOTAL SUBS</h4></td>
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
    			<td>MARTIN</td>
    			<td><?php echo $martin[1];?></td>		
    			<td><?php echo $martin[2];?></td>
    			<td><?php echo $martin[3];?></td>
    			<td><?php echo $martin[4];?></td>
    			<td><?php echo $martin[5];?></td>
    			<td><?php echo $martin[6];?></td>
  			</tr>
  			<tr>
    			<td>IVAN</td>
    			<td><?php echo $ivan[1];?></td>		
    			<td><?php echo $ivan[2];?></td>
    			<td><?php echo $ivan[3];?></td>
    			<td><?php echo $ivan[4];?></td>
    			<td><?php echo $ivan[5];?></td>
    			<td><?php echo $ivan[6];?></td>
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
  			<tr>
    			<td>FIDEL</td>
    			<td><?php echo $fidel[1];?></td>		
    			<td><?php echo $fidel[2];?></td>
    			<td><?php echo $fidel[3];?></td>
    			<td><?php echo $fidel[4];?></td>
    			<td><?php echo $fidel[5];?></td>
    			<td><?php echo $fidel[6];?></td>
  			</tr>
  			<tr>
    			<td>IVONNE</td>
    			<td><?php echo $ivonne[1];?></td>		
    			<td><?php echo $ivonne[2];?></td>
    			<td><?php echo $ivonne[3];?></td>
    			<td><?php echo $ivonne[4];?></td>
    			<td><?php echo $ivonne[5];?></td>
    			<td><?php echo $ivonne[6];?></td>
  			</tr>
  			<tr>
    			<td>IVAN_LAP</td>
    			<td><?php echo $ivan_LAP[1];?></td>		
    			<td><?php echo $ivan_LAP[2];?></td>
    			<td><?php echo $ivan_LAP[3];?></td>
    			<td><?php echo $ivan_LAP[4];?></td>
    			<td><?php echo $ivan_LAP[5];?></td>
    			<td><?php echo $ivan_LAP[6];?></td>
  			</tr>
  			<tr>
    			<td>BARBARA</td>
    			<td><?php echo $Barbara[1];?></td>		
    			<td><?php echo $Barbara[2];?></td>
    			<td><?php echo $Barbara[3];?></td>
    			<td><?php echo $Barbara[4];?></td>
    			<td><?php echo $Barbara[5];?></td>
    			<td><?php echo $Barbara[6];?></td>
  			</tr> 
  			<tr>
    			<td>RAFAEL</td>
    			<td><?php echo $Rafael[1];?></td>		
    			<td><?php echo $Rafael[2];?></td>
    			<td><?php echo $Rafael[3];?></td>
    			<td><?php echo $Rafael[4];?></td>
    			<td><?php echo $Rafael[5];?></td>
    			<td><?php echo $Rafael[6];?></td>
  			</tr> 			
		</table>
    	<br/>
    	<h2>Reports management</h2>
    	<h3>Download user reports</h3>
    	
    	<form action="downloadReports.php" method="post">
    		<input type="submit" class="button" name="name" value="Download_Enrique_report" />
    		<input type="submit" class="button" name="name" value="Download_Martin_report" />
    		<input type="submit" class="button" name="name" value="Download_Ale_report" />
    		<input type="submit" class="button" name="name" value="Download_Fidel_report" />
    		<input type="submit" class="button" name="name" value="Download_Ivonne_report" />
    		<input type="submit" class="button" name="name" value="Download_Ivan_report" />
    		<input type="submit" class="button" name="name" value="Download_Ivan_LAP_report" />
    		<input type="submit" class="button" name="name" value="Download_Barbara_report" />
    		<input type="submit" class="button" name="name" value="Download_Rafael_report" />
		</form>

		<br/>
		<h3>Show user reports</h3>		
		
		<form action="ShowReports.php" method="post">
    		<input type="submit" class="button" name="name" value="Show_Enrique_report" />
    		<input type="submit" class="button" name="name" value="Show_Martin_report" />
    		<input type="submit" class="button" name="name" value="Show_Ale_report" />
    		<input type="submit" class="button" name="name" value="Show_Fidel_report" />
    		<input type="submit" class="button" name="name" value="Show_Ivonne_report" />
    		<input type="submit" class="button" name="name" value="Show_Ivan_report" />
    		<input type="submit" class="button" name="name" value="Show_Ivan_LAP_report" />
    		<input type="submit" class="button" name="name" value="Show_Barbara_report" />
    		<input type="submit" class="button" name="name" value="Show_Rafael_report" />
		</form>
		
		<br/>
		<h3>Reset user reports</h3>
    	<form action="resetReports.php" method="post">
    		<input type="submit" class="button" name="reset" value="Reset_Enrique_report" />
    		<input type="submit" class="button" name="reset" value="Reset_Martin_report" />
    		<input type="submit" class="button" name="reset" value="Reset_Ale_report" />
    		<input type="submit" class="button" name="reset" value="Reset_Fidel_report" />
    		<input type="submit" class="button" name="reset" value="Reset_Ivonne_report" />
    		<input type="submit" class="button" name="reset" value="Reset_Ivan_report" />
    		<input type="submit" class="button" name="reset" value="Reset_Ivan_LAP_report" />
    		<input type="submit" class="button" name="reset" value="Reset_Barbara_report" />
    		<input type="submit" class="button" name="reset" value="Reset_Rafael_report" />
		</form>	
		<br/>
		<h3>Download EXL to RTF user reports</h3>
    	
    	<form action="downloadEXLtoRTFreport.php" method="post">
    		<input type="submit" class="button" name="name" value="Download_EXL_to_RTF_report" />
    	
		</form>
		
		<br/>
		<h3>Show EXL to RTF user reports</h3>
    	
    	<form action="show_RTF_request_report.php" method="post">
    		<input type="submit" class="button" name="name" value="Show_EXL_to_RTF_report" />
    	
		</form>
		<br/>
		
		<h3>Reset RTF request reports</h3>
    	
    	<form action="resetReports.php" method="post">
    		<input type="submit" class="button" name="reset" value="Reset_RTF_report" />
		</form>	
		
		<br/><br/>

	</body>
</html>
 
