<!DOCTYPE html> 
<html>
<head>
	<title></title>
</head>
<body  style ="background-image:url(img/header-pet-policy.jpg)">
	<div class="delete">
	<h1> Delete Account</h1>
		<form action="delete.php" method="POST" >
				<p> Enter your Email</p>
				<input type="text" name="mail" placeholder="Email" required=""><br>
				<p> Enter your Password</p>
				<input type="text" name="pass" placeholder="Password" required=""><br>
				
				<button> Continue </button>
		</form>
	</div>

	<?php
		require_once 'connect.php';

		// sql to delete a record
		$sql = "DELETE FROM doctor WHERE email ='{$_POST['mail']}'&& password ='{$_POST['pass']}'";
		$result = mysqli_query($conn,$sql);

		if ($conn->query($sql) === TRUE) {
		    echo "Record deleted successfully";
		} else {
		    echo "Error deleting record: " . $conn->error;
		}

		$conn->close();
	?>

</body>
</html>
