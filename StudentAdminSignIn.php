<!DOCTYPE html>
<html lang="en">
<head>
<title>Select Student or Admin</title>
<?php include('Header.php'); ?>
</head>
<body>
	<div id="login">
		<div id="form">
			<div class="top">
			
				<!--Proceed to Student Login Page-->
				<form method="link" action="01StudSignIn.php">
					<input type="submit" name="next" class="button large go"
						value="Sign in as a Student">
				</form>

				<br /> <br />

				<!--Proceed to Admin Login Page-->
				<form method="link" action="AdminSignIn.php">
					<input type="submit" name="next" class="button large go"
						value="Sign in as an Admin">
				</form>

			</div>
			<div class="field"></div>
		</div>
<?php include('Footer.php'); ?>
