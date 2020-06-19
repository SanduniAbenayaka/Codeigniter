<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body style ="background-image:url(img/header-pet-policy.jpg)">
	

	<div class="update">
		<h2>Update Account</h2>
			<form action="update.php" method="POST" class="contact">
				<p>Email</p>
				<input type="text" name="email" placeholder="Email" required=""><br>
				<p>Enter new password</p>
				<input type="text" name="new" placeholder="New Password" required=""><br>
				<p> Re enter new Password</p>
				<input type="password" name="new2" placeholder="New Password" required=""><br>
				<button> Continue </button>
			</form>
	</div>


	<?php

		require 'connect.php';
		$pass=$_POST['new'];
		$mail=$_POST['email'];

		$sql = "UPDATE doctor SET password='{$pass}' WHERE email='{$mail}'";
		$result = mysqli_query($conn,$sql);
		
		if ($conn->query($sql) === TRUE) {
		   // echo "Record updated successfully";
		} else {
		    echo "Error updating record: " . $conn->error;
		}

		$conn->close();
	?>
</body>
</html>
