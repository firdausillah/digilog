<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "digilog";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = "SELECT id, label FROM alpro";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {	
			while($row = $result->fetch_assoc()) {
				echo '<option value="'.$row["id"].'">'.$row["label"].'</option>';
			}
		}
		
		$conn->close();

?>