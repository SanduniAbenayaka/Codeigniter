<?php

	require 'connect.php';

//if (isset($_POST['lemail'])) {

	$email=$_POST['lemail'];
	$pass=$_POST['lpassword'];

		if (!empty($_POST['lemail']) && !empty($_POST['lpassword'])) {

			$sql= "SELECT * FROM doctor WHERE email='".$email."' AND password ='".$pass."' ";
			$result = mysql_query($sql);

			if ($conn->query($sql) === TRUE) {
		    	echo "Record searching successfully";
			} 
			else {
		    	echo "Error searching record: " . $conn->error;
			}

		} 
		else {
			header("Location:/login.php?error=required");
		}
		
		
	//} 


	
?>