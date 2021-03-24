<?php


Class registerModel {
	
	public $conn;
	
	function __construct(){	
	
		$this->conn = new mysqli("localhost", "root", "", "pageflipping");	
		
	}
	
	function insertRecord ($username, $password, $email, $wishlist){
		
		
		$sql = "INSERT INTO customer (username, password, email, wishlist)
        VALUES ('$username', '$password', '$email', '$wishlist')"; 
		
			
		if ($this->conn->query($sql) === TRUE) {
		echo "<p style='color:white;'>". "New record created successfully";
		} else {
		echo "<p style='color:white;'>". "Error: record couldn’t be inserted";
		}
		$this->conn->close(); // close DB connection		
		
	}
	
}


?>