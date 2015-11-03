<?php
session_start ();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Create New Admin</title>
	<?php include('Header.php'); ?>
</head>
<body>
	<div id="login">
		<div id="form">
			<div class="top">
				<h2>Create New Advisor Account</h2>
		<?php
		
		//passwords didnt match on previous page
		if ($_SESSION ["PasswordsNotMatching"] == true) {
			echo "<h3 style='color:red'>Passwords do not match!!</h3>";
		}
		?>
		
		<!-- Collect all the new user information from the form. -->
		
		<form action="AdminProcessCreateNew.php" method="post" name="Create">
					<div class="field">
						<label for="firstN">First Name</label> <input id="firstN"
							size="20" maxlength="50" type="text" name="firstN" required
							autofocus>
					</div>

					<div class="field">
						<label for="lastN">Last Name</label> <input id="lastN" size="20"
							maxlength="50" type="text" name="lastN" required>
					</div>

					<div class="field">
						<label for="UserN">Username</label> <input id="UserN" size="20"
							maxlength="50" type="text" name="UserN" required>
					</div>

					<div class="field">
						<label for="PassW">Password</label> <input id="PassW" size="20"
							maxlength="50" type="password" name="PassW" required>
					</div>

					<div class="field">
						<label for="ConfP">Confirm Password</label> <input id="ConfP"
							size="20" maxlength="50" type="password" name="ConfP" required>
					</div>

					<div class="field">
						<label for="ConfP">Room Number</label> <input id="RoomNum"
							size="20" maxlength="10" type="text" name="RoomNum" required>
					</div>
					<br>

					<div class="nextButton">
						<input type="submit" name="next" class="button large go"
							value="Submit">
					</div>
				</form>
				
				
				<form method="link" action="AdminUI.php">
					<input type="submit" name="home" class="button large"
						value="Cancel">
				</form>

			</div>
		</div>
	</div>
<?php include('Footer.php'); ?>