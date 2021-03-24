<?php


Class registerModel {
	
	public $conn;
	
	function __construct(){	
	
		$this->conn = new mysqli("localhost", "root", "", "pageflipping");	
		
	}
	
	function insertRecord ($email, $password){
		
		$timestamp = date('Y-m-d H:i:s');
		$last_updated = $timestamp;
		$date_created = $timestamp;
		
		$sql = "INSERT INTO logininfo (email, password, last_updated, date_created)
        VALUES ('$email', '$password',  $last_updated, $date_created)"; 
		
			
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
