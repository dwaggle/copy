<?php

  class homeView{
  
       function __construct(){
	   
	     ?>

		<!DOCTYPE html>	
		<html>  
			<head>  
			<title>Page Flipping</title>  
			<!--<link rel="icon" href="images/pageFlippingLogo.png" type="image/png" sizes="16x16"> -->

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">

			<link rel="stylesheet" type="text/css" href="websiteDesign.css">
		</head> 

				
				<body>  
							<h1 class="pageFlip-header"><a href="index.php">Page Flipping</a></h1>	  
							
							<p style="text-align: center"> 
								<!--<a href="index.php" style="text-decoration: none"> Home </a> 
								&nbsp;&nbsp;&nbsp;&nbsp; -->
							    <a href="index.php?flag=register" style="text-decoration: none"> Register </a> 
							    &nbsp;&nbsp;&nbsp;&nbsp;
							    <a href="index.php?flag=login" style="text-decoration: none"> Login </a> 
							</p>							
				</body>  

				
			</html>  

<?php
	   
	   }
  
  }


?>

