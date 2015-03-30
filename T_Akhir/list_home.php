<?php

	include 'connect.php';
	/* $sql = "SELECT * FROM tb_domain";
	$result = $conn->query($sql);
		
	if ($result->num_rows > 0) 
	{ //start if 1
		
echo "
<table width='947' height='0' border='0'>
  <tr class='tabletop header_nowrap'>
    <td width='23'><div align='center' class='style1'>No</div></td>
    <td colspan='9'><div align='center' class='style1'>Websites Information</div></td>
  </tr>";

// output data of each row
		while($row = $result->fetch_assoc()) 
		{ //start whell 1
							
		echo "
  
		  <tr>
			<td height='21' bgcolor='#FFCC99'>&nbsp;</td>
			<td colspan='3' bgcolor='#EDF6FF'><div align='center'><strong>Site</strong></div></td>
			<td bgcolor='#E4F1FF'><div align='center'><strong>Title</strong></div></td>
			<td width='275' bgcolor='#EDF6FF'><div align='center'><strong>Niche</strong></div></td>
			<td width='31' bgcolor='#E4F1FF'><div align='center'><strong>PR</strong></div></td>
			<td width='32' bgcolor='#E4F1FF'><div align='center'><strong>DA</strong></div></td>
			<td width='30' bgcolor='#E4F1FF'><div align='center'><strong>PA</strong></div></td>
			<td width='101' bgcolor='#EDF6FF'><div align='center'><strong>Actions*</strong></div></td>
		  </tr>
		  <tr>
			<td height='26' bgcolor='#FFCC99'><div align='center' class='style1'>" . $row["kd_dom"]. "</div></td>
			<td colspan='3' bgcolor='#EDF6FF'><div align='center'><strong>" . $row["nm_dom"]. "</strong></div></td>
			<td bgcolor='#E4F1FF'><div align='center'>Home Improvement</div></td>
			
			<!------Buka Tabel Niche----->
			
			<td bgcolor='#EDF6FF'><div align='center'>";
			
			$sql2 = "SELECT * FROM tb_niche WHERE kd_niche LIKE '" . $row["kd_niche"]. "'  ";
				$result2 = $conn->query($sql2);
				
				if ($result2->num_rows > 0) 
				{ //start if 2
				
								while($row2 = $result2->fetch_assoc()) 
								{ //start while 2
			
			
									echo"" . $row2["nm_niche"]. "";
								}; //end while 2
										
										
										} else { //else if 2
						
											echo"0 results";
										
										}; //end if 2
				
			echo "	
			
			
			
			</div></td>
			
			<!-----End Buka Tabel Niche---->
			
			
			<td bgcolor='#E4F1FF'><div align='center'>" . $row["PR"]. "</div></td>
			<td bgcolor='#E4F1FF'><div align='center'>" . $row["DA"]. "</div></td>
			<td bgcolor='#E4F1FF'><div align='center'>" . $row["PA"]. "</div></td>
			<td bgcolor='#EDF6FF'><div align='center'>
				<img src='images/take_offline.gif' width='19' height='17' alt='Add Site' /></div>
			</td>
		  </tr>
		  <tr>
			<td rowspan='10' bgcolor='#FFCC99'>&nbsp;</td>
			<td colspan='3' bgcolor='#EDF6FF'><div align='center'>" . $row["IPS"]. "</div></td>
			<td rowspan='10' valign='top' bgcolor='#E4F1FF'><div align='center'>
			  <p align='left'><strong>Description :</strong></p>
				<textarea name='prt_website_description2' cols='20' class='general' style='width: 245px; height: 161px;'>
					" . $row["desk_dom"]. "
				</textarea>
			<td rowspan='2' valign='bottom' bgcolor='#EDF6FF'><div align='center'><strong>Category</strong></div></td>
			<td colspan='3' rowspan='2' valign='bottom' bgcolor='#E4F1FF'>
					<div align='center'>
							<strong>AR</strong>
					</div>
			</td>
			<td bgcolor='#EDF6FF'>&nbsp;</td>
		  </tr>
		  <tr>
			<td colspan='3' rowspan='3' bgcolor='#EDF6FF'><div align='center'><img src='images/wp.png' width='78' height='73' /></div></td>
			<td bgcolor='#EDF6FF'><div align='center'><img src='images/edit_website.gif' alt='Edit' width='22' height='20' /></div></td>
		  </tr>
		  
		  <!--Perlu buka tabel kategori---->
		  <tr>
			<td rowspan='8' valign='top' nowrap='nowrap' bgcolor='#EDF6FF'>      
				<div align='center'>
					<textarea name='prt_website_description2' cols='20' class='general' style='width: 245px; height: 161px;'>";
					
				$sql3 = "SELECT * FROM tb_niche WHERE kd_niche LIKE '" . $row["kd_niche"]. "'  ";
				$result3 = $conn->query($sql3);
				
				if ($result3->num_rows > 0) 
				{ //start if 2
				
								while($row3 = $result2->fetch_assoc()) 
								{ //start while 2
			
			
										echo"" . $row3["nm_kat"]. "";
											}; //end while 2
										
										
										} else { //else if 2
						
											echo"0 results";
										
										}; //end if 2
				
			echo "	
			
					
				  
				  
				  
				  
					</textarea>
				</div>      
			<p align='center'>&nbsp;</p>
			</td>
			<!--End Kategori-->
			<td height='28' colspan='3' bgcolor='#E4F1FF'><div align='center'>" . $row["AR"]. "</div></td>
			<td bgcolor='#EDF6FF'>&nbsp;</td>
		  </tr>
		  <tr>
			<td height='28' colspan='3' bgcolor='#E4F1FF'><div align='center'><strong>Status</strong></div></td>
			<td bgcolor='#EDF6FF'><div align='center'><img src='images/delete_website.gif' alt='Delete' width='17' height='19' /></div></td>
		  </tr>
		  <tr>
			<td width='68' bgcolor='#EDF6FF'><div align='left'><strong>Username</strong></div></td>
			<td width='4' bgcolor='#EDF6FF'><div align='center'>:</div></td>
			<td width='95' bgcolor='#EDF6FF'>" . $row["us_dom"]. "</td>
			<td colspan='3' rowspan='6' bgcolor='#E4F1FF'><div align='center' class='style2'>" . $row["st_dom"]. "</div></td>
			<td rowspan='2' bgcolor='#EDF6FF'>&nbsp;</td>
		  </tr>
		  <tr>
			<td bgcolor='#EDF6FF'><div align='left'><strong>Password</strong></div></td>
			<td bgcolor='#EDF6FF'><div align='center'>:</div></td>
			<td bgcolor='#EDF6FF'>" . $row["ps_dom"]. "</td>
		  </tr>
		  <tr>
			<td height='24' colspan='3' bgcolor='#EDF6FF'>&nbsp;</td>
			<td bgcolor='#EDF6FF'>&nbsp;</td>
		  </tr>
		  <tr>
			<td colspan='3' bgcolor='#EDF6FF'><div align='center'><strong>Registran Name</strong></div></td>
			<td bgcolor='#EDF6FF'>&nbsp;</td>
		  </tr>
		  <tr>
			<td colspan='3' bgcolor='#EDF6FF'><div align='center'>" . $row["reg_dom"]. "</div></td>
			<td bgcolor='#EDF6FF'>&nbsp;</td>
		  </tr>
		  <tr>
			<td colspan='3' bgcolor='#EDF6FF'>&nbsp;</td>
			<td bgcolor='#EDF6FF'>&nbsp;</td>
		  </tr>";
  
		}; // end while 1
	 } else {  //else if 1
						
							echo "0 results";
						
						}; //end if 1
						
						
							$conn->close();
echo"
</table>
 */


//-------------------------------------------------------------------------------------------------------------------------------------------------

	include 'connect.php';
	$sql = "SELECT * FROM tb_domain";
	$result = $conn->query($sql);
		
	if ($result->num_rows > 0) 
	{ //start if 1
		
echo "

<style type='text/css'>
<!--

.style2 {
	font-size: 24px;
	font-weight: bold;
	color: #0000CC;
}
-->
</style>

<table width='947' height='0' border='0' cellpadding='1' cellspacing='0' bordercolor='#000000'>
  <tr class='tabletop header_nowrap'>
    <td width='23'><div align='center' class='style1'>No</div></td>
    <td colspan='9'><div align='center' class='style1'>Websites Information</div></td>
  </tr>";

// output data of each row
		while($row = $result->fetch_assoc()) 
		{ //start whell 1
							
		echo "
		
		
  <tr>
    <td height='21' bgcolor='#FFCC99'>&nbsp;</td>
    <td colspan='3' bgcolor='#EDF6FF'><div align='center'><strong>Site</strong></div></td>
    <td bgcolor='#E4F1FF'><div align='center'><strong>Title</strong></div></td>
    <td width='275' bgcolor='#EDF6FF'><div align='center'><strong>Niche</strong></div></td>
    <td width='31' bgcolor='#E4F1FF'><div align='center'><strong>PR</strong></div></td>
    <td width='32' bgcolor='#E4F1FF'><div align='center'><strong>DA</strong></div></td>
    <td width='30' bgcolor='#E4F1FF'><div align='center'><strong>PA</strong></div></td>
    <td width='101' bgcolor='#EDF6FF'><div align='center'><strong>Actions*</strong></div></td>
  </tr>
  <tr>
    <td height='26' bgcolor='#FFCC99'><div align='center' class='style1'>" . $row["kd_dom"]. "</div></td>
    <td colspan='3' bgcolor='#EDF6FF'><div align='center'><strong>" . $row["nm_dom"]. "</strong></div></td>
    <td bgcolor='#E4F1FF'><div align='center'>" . $row["jdl_dom"]. "</div></td>
    <td bgcolor='#EDF6FF'><div align='center'>";
	
	
	
	
	
				$sql2 = "SELECT * FROM tb_niche WHERE kd_niche LIKE '" . $row["kd_niche"]. "'  ";
				$result2 = $conn->query($sql2);
				
				if ($result2->num_rows > 0) 
				{ //start if 2
				
								while($row2 = $result2->fetch_assoc()) 
								{ //start while 2
			
			
									echo"" . $row2["nm_niche"]. "";
								}; //end while 2
										
										
										} else { //else if 2
						
											echo"0 results";
										
										}; //end if 2
				
			echo "	
			
			
	
	
	
	
	
	
	</div></td>
    <td bgcolor='#E4F1FF'><div align='center'>" . $row["PR"]. "</div></td>
    <td bgcolor='#E4F1FF'><div align='center'>" . $row["DA"]. "</div></td>
    <td bgcolor='#E4F1FF'><div align='center'>" . $row["PA"]. "</div></td>
    <td bgcolor='#EDF6FF'>
		<div align='center'>
			<a href='#'><img src='images/take_offline.gif' width='19' height='17' title='Add Website' alt='Add Site' /></a>
		</div>
	</td>
  </tr>
  <tr>
    <td rowspan='10' bgcolor='#FFCC99'>&nbsp;</td>
    <td colspan='3' bgcolor='#EDF6FF'><div align='center'>192.168.1.100</div></td>
    <td rowspan='10' valign='top' bgcolor='#E4F1FF'><div align='center'>
      <p align='left'><strong>Description :</strong></p>
				<textarea name='prt_website_description2' cols='20' class='general' style='width: 347px; height: 250px;'> 
				" . $row["desk_dom"]. "
				 </textarea>
      </div></td>
    <td rowspan='10' valign='top' bgcolor='#EDF6FF'><div align='center'>
      <p align='center'><strong>Category :</strong></p>
	  ";
					
				$sql3 = "SELECT * FROM tb_kategori WHERE kd_niche LIKE '" . $row["kd_niche"]. "'  ";
				$result3 = $conn->query($sql3);
				
				if ($result3->num_rows > 0) 
				{ //start if 2
				
								while($row3 = $result3->fetch_assoc()) 
								{ //start while 2
			
			
										echo"  <ul>
												  
													<div align='left'>" . $row3["nm_kat"]. "</div>
												  
												</ul>";
											}; //end while 2
										
										
										} else { //else if 2
						
											echo"<ul>
												  
													<div align='left'>0 results</div>
												  
												</ul>";
									
										}; //end if 2
				
			echo "	
			
	  
		
    </div>      
      <p align='center'>&nbsp;</p></td>
    <td colspan='3' rowspan='2' valign='bottom' bgcolor='#E4F1FF'><div align='center'><strong>AR</strong></div></td>
    <td bgcolor='#EDF6FF'>&nbsp;</td>
  </tr>
  
  <tr>
    <td colspan='3' rowspan='3' bgcolor='#EDF6FF'>
			<div align='center'>
				<a href='#'><img src='images/wp.png' width='78' height='73' /></a>
			</div>
	</td>
    <td bgcolor='#EDF6FF'>
			<div align='center'>
				<a href='#'><img src='images/edit_website.gif' title='Edit Website' alt='Edit' width='22' height='20' /></a>
			</div>
	</td>
  </tr>
  <tr>
    <td height='28' colspan='3' bgcolor='#E4F1FF'><div align='center'>" . $row["AR"]. "</div></td>
    <td bgcolor='#EDF6FF'>&nbsp;</td>
  </tr>
  <tr>
    <td height='28' colspan='3' bgcolor='#E4F1FF'><div align='center'><strong>Status</strong></div></td>
    <td bgcolor='#EDF6FF'>
			<div align='center'>
				<a href='#'><img src='images/delete_website.gif' Title='Delete Website' alt='Delete' width='17' height='19' /></a>
			</div>
	</td>
  </tr>
  <tr>
    <td width='68' bgcolor='#EDF6FF'><div align='left'><strong>Username</strong></div></td>
    <td width='4' bgcolor='#EDF6FF'><div align='center'>:</div></td>
    <td width='95' bgcolor='#EDF6FF'>" . $row["us_dom"]. "</td>
    <td colspan='3' rowspan='6' bgcolor='#E4F1FF'><div align='center' class='style2'>" . $row["st_dom"]. "</div></td>
    <td rowspan='2' bgcolor='#EDF6FF'>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor='#EDF6FF'><div align='left'><strong>Password</strong></div></td>
    <td bgcolor='#EDF6FF'><div align='center'>:</div></td>
    <td bgcolor='#EDF6FF'>" . $row["ps_dom"]. "</td>
  </tr>
  <tr>
    <td height='24' colspan='3' bgcolor='#EDF6FF'>&nbsp;</td>
    <td bgcolor='#EDF6FF'>&nbsp;</td>
  </tr>
  <tr>
    <td colspan='3' bgcolor='#EDF6FF'><div align='center'><strong>Registran Name</strong></div></td>
    <td bgcolor='#EDF6FF'>&nbsp;</td>
  </tr>
  <tr>
    <td colspan='3' bgcolor='#EDF6FF'><div align='center'>" . $row["reg_dom"]. "</div></td>
    <td bgcolor='#EDF6FF'>&nbsp;</td>
  </tr>
  <tr>
    <td colspan='3' bgcolor='#EDF6FF'>&nbsp;</td>
    <td bgcolor='#EDF6FF'>&nbsp;</td>
  </tr>
  </tr>
   <tr>
    <td height='21' colspan='10' bgcolor='#E4F1FF'>&nbsp;</td>
  </tr>";
  
		}; // end while 1
	 } else {  //else if 1
						
							echo "0 results";
						
						}; //end if 1
						
						
							$conn->close();
echo"
</table>


";





?>