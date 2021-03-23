<?php


Class loginModel {
	
	public $conn;
	
	function __construct(){	
	
		$this->conn = new mysqli("localhost", "root", "", "pageflipping");	
		
	}
	
	function authenticateUser ($email, $password){
		
		$conn = $this->conn;
		
		$sql = "SELECT email, password FROM logininfo WHERE email = '$email' 
				and password = '$password'"; 
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
				  echo "<script>alert('Login Successful')</script>";
				  include "View/searchPage.html";
		  }
		} else {
		  echo "<p style='color:white;'>" . "Invalid email or password.";
		}				
			
		$this->conn->close(); // close DB connection		
		
	}
	
}


?>
