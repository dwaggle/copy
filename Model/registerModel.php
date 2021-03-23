<?php


Class registerModel {
	
	public $conn;
	
	function __construct(){	
	
		$this->conn = new mysqli("localhost", "root", "", "pageflipping");	
		
	}
	
	function insertRecord ($email, $password){
		
		
		$sql = "INSERT INTO logininfo (email, password)
        VALUES ('$email', '$password')"; 
		
			
		if ($this->conn->query($sql) === TRUE) {
		echo "<p style='color:white;'>". "New record created successfully";
		include "View/searchPage.html";
		} else {
		echo "<p style='color:white;'>". "Error: record couldn’t be inserted";
		}
		$this->conn->close(); // close DB connection		
		
	}
	
}


?>
