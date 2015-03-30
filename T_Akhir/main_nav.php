<?php
			/* echo"<div id='mainNav'>
				<ul>
                    <li class='account'><a href='act.php?p=p_profil' class='account'>Profil</a>";
					include 'sub_nav_1.php';
			echo"			
					</li>
					
					<li class='sites'><a href='act.php?p=p_sites' class='sites'>Sites</a></li>
					<li class='products'><a href='act.php?p=p_job' class='products'>Job</a></li>
					<li class='affiliate'><a href='act.php?p=p_art' class='affiliate'>Articles</a></li>
					<li class='reports'><a href='act.php?p=p_cust' class='reports'>Customer</a></li>
					<li class='tools'><a href='act.php?p=p_report' class='tools'>Report</a></li>
					
					<!--<li class='help'><a href='#' class='help'>Main Nav 7</a></li>
					<li class='logout'><a href='#' class='logout'>logout</a></li>-->
                </ul>
			</div>
			<div id='subNav'>
			</div>
			<div id='subNav2'>
			</div>";
			 */
			
			/* echo"
			
			<div id='mainNav'>
				<ul>
					<li class='account'><a href='#' class='account'>Main Nav 1</a></li>
					<li class='sites'><a href='#' class='sites'>Main Nav 2</a><ul>
							<li><a href='#' class='active'>Sub Nav 1</a>
									<!----Sub Navigasi 1-----> 
									
									<!----End Sub Navigasi-----> 
							</li>
					
							<li><a href='#'>Sub Nav 2</a></li>
							<li><a href='#'>Sub Nav 3</a></li>
							<li><a href='#'>Sub Nav 4</a></li>
						</ul>
					</li>
					<li class='products'><a href='#' class='products'>Main Nav 3</a></li>
					<li class='affiliate'><a href='#' class='affiliate'>Main Nav 4</a></li>
					<li class='reports'><a href='#' class='reports'>Main Nav 5</a></li>
					<li class='tools'><a href='#' class='tools'>Main Nav 6</a></li>
					<li class='help'><a href='#' class='help'>Main Nav 7</a></li>
					<li class='logout'><a href='#'>logout</a></li>
				</ul>
			</div>"; */
			
			
			
			




	$pub = $_GET['p'];
	
	
		 echo"<div id='mainNav'>
				<ul>";
				
				
	if($pub=="p_profil")
	{
		
			echo   "<li class='account'><a href='act.php?p=p_profil' class='account'>Profil</a>";
					include 'sub_nav_1.php';
			
					
			
	}	
	elseif($pub=="p_sites")
	{
	
			echo "<li class='account'><a href='act.php?p=p_profil' class='account'>Profil</a></li>
				  <li class='sites'><a href='act.php?p=p_sites' class='sites'>Sites</a>";
         		include 'sub_nav_1.php';
			
			
	}	
	elseif($pub=="p_job")
	{		
			
			echo "<li class='account'><a href='act.php?p=p_profil' class='account'>Profil</a></li>
				  <li class='sites'><a href='act.php?p=p_sites' class='sites'>Sites</a></li>
				  <li class='products'><a href='act.php?p=p_job' class='products'>Job</a>";
					include 'sub_nav_1.php';
			
	}		
	elseif($pub=="p_art")
	{		
			
				echo "<li class='account'><a href='act.php?p=p_profil' class='account'>Profil</a></li>
					  <li class='sites'><a href='act.php?p=p_sites' class='sites'>Sites</a></li>
					  <li class='products'><a href='act.php?p=p_job' class='products'>Job</a></li>
					  <li class='affiliate'><a href='act.php?p=p_art' class='affiliate'>Articles</a>";
         		include 'sub_nav_1.php';
				
			
	}
	elseif($pub=="p_cust")
	{	
				echo "<li class='account'><a href='act.php?p=p_profil' class='account'>Profil</a></li>
					  <li class='sites'><a href='act.php?p=p_sites' class='sites'>Sites</a></li>
					  <li class='products'><a href='act.php?p=p_job' class='products'>Job</a></li>
					  <li class='affiliate'><a href='act.php?p=p_art' class='affiliate'>Articles</a></li>
					  <li class='reports'><a href='act.php?p=p_cust' class='reports'>Customer</a>";
				include 'sub_nav_1.php';
				
	}
	elseif($pub=="p_report")
	{		
			
				echo "<li class='account'><a href='act.php?p=p_profil' class='account'>Profil</a></li>
					  <li class='sites'><a href='act.php?p=p_sites' class='sites'>Sites</a></li>
					  <li class='products'><a href='act.php?p=p_job' class='products'>Job</a></li>
					  <li class='affiliate'><a href='act.php?p=p_art' class='affiliate'>Articles</a></li>
					  <li class='tools'><a href='act.php?p=p_cust' class='reports'>Customer</a>";
         		include 'sub_nav_1.php';
				
			
	}	
	elseif($pub=="p_logout")/* Mbalik nang home */
	{		
			
				echo "<li class='account'><a href='act.php?p=p_profil' class='account'>Profil</a></li>
					  <li class='sites'><a href='act.php?p=p_sites' class='sites'>Sites</a></li>
					  <li class='products'><a href='act.php?p=p_job' class='products'>Job</a></li>
					  <li class='affiliate'><a href='act.php?p=p_art' class='affiliate'>Articles</a></li>
					  <li class='reports'><a href='act.php?p=p_cust' class='reports'>Customer</a></li>
				      <li class='tools'><a href='act.php?p=p_report' class='tools'>Report</a></li>
				      <li class='logout'><a href='index.php' class='logout'>logout</a>";
         		include 'sub_nav_1.php';
				echo "</li>";		
			
	}
	else
	{
				echo "<li class='account'><a href='act.php?p=p_profil' class='account'>Profil</a></li>
					  <li class='sites'><a href='act.php?p=p_sites' class='sites'>Sites</a></li>
					  <li class='products'><a href='act.php?p=p_job' class='products'>Job</a></li>
					  <li class='affiliate'><a href='act.php?p=p_art' class='affiliate'>Articles</a></li>
					  <li class='reports'><a href='act.php?p=p_cust' class='reports'>Customer</a></li>
				      <li class='tools'><a href='act.php?p=p_report' class='tools'>Report</a></li>
				      <li class='logout'><a href='index.php' class='logout'>logout</a></li>";
			
	}

       	echo"			
					
					
					
					
					
					<!--<li class='help'><a href='#' class='help'>Main Nav 7</a></li>
					-->
                </ul>
			</div>
			<div id='subNav'>
			</div>
			<div id='subNav2'>
			</div>";
?>