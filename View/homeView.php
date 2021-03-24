<?php

  class homeView{
  
       function __construct(){
	   
	     ?>

		<!DOCTYPE html>	
		<html>  
			<head>  
			<title style="text-align: center">Page Flipping</title>  
			<link rel="icon" href="pageflippinglogo" type="image/png" sizes="16x16">

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">

			<link rel="stylesheet" type="text/css" href="View/websiteDesign.css">
		</head> 

				
				<body>  
							<h1 class="page-header"><a href="index.php">Page Flipping</a></h1>	  
							
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

