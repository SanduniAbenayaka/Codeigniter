<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title></title>
</head>
<body style ="background-color: lightgreen">

	<?php
		require 'connect.php';


		// sql to delete a record
		$sql = "SELECT* FROM doctor ";
		$result_set = mysqli_query($conn,$sql); 	

		if($result_set){

			$table = '<table class="table">';

			$table .= '<tr><th>First Name</th><th>Last Name</th><th>Email</th>';

			while($result=mysqli_fetch_assoc($result_set)){
				$table .="<tr>";
				$table .="<td>{$result['First_name']}</td>";
				$table .="<td>{$result['Last_name']}</td>";
				$table .="<td>{$result['email']}</td>";
				$table .="</tr>";
			}

			$table .='</table>';

			echo $table;
		}

		$conn->close();
	?>


</body></html>														-