



<!DOCTYPE html>
<html>
<head>
	<title>
		Login page
	</title>
	<link rel="stylesheet" type="text/css" href="css/Dlogin.css">
</head>
<body >
	
		<div class="top">
			<h1> ANIMAL CLINIC</h1>
		</div>

		<div class="login">
			
			<h2>Login</h2>
			<form action="login.php" class="contact">

				<p>Email</p>
				<input type="text" name="lemail" placeholder="Email" required=""><br>
				<p>Password</p>
				<input type="password" name="lPassword" placeholder="Password" required=""><br>
				<button> Submit </button>
				<br>
				<div class="reset">
					<a href="update.php" >Reset password</a>
				</div>
				
				

			</form>
		</div>
			
		<div class="signup">
			<h2>Sign up</h2>
			<form action="signup1.php" class="set" method="POST">
				<p>First Name</p>
				<input type="text" name="fname" required="" >
				<p>Last Name</p>
				<input type="text" name="lname" required="" >
				<p>Email</p>
				<input type="text" name="semail" required="">
				<p>Password</p>
				<input type="password" name="sPassword" required="" >
				<button type="submit"> Submit </button>
				<br>
				<div class="delete">
					<a href="delete.php" >Delete my account</a>
				</div>
			</form>
		</div>

		<div class="view">

			<a href="view.php" ><h1>View</h1></a>
		</div>
</body>
</html>