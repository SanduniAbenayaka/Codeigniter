<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	
		require 'connect.php';

		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['semail'];
		$password= $_POST['sPassword'];

				//insert values
				$sql= "INSERT INTO doctor (	First_name, Last_name, email, password) VALUES ('{$fname}','{$lname}','{$email}' ,'{$password}' )";
				$result = mysqli_query($conn,$sql);

			
		
	?>

</body>
</html>

