<?php

session_start ();

//confirmed password did not equal first password field, therefore proceed to previous page to reenter password.
if($_POST["PassW"] != $_POST["ConfP"]){
	$_SESSION["PasswordsNotMatching"] = true;
	header('Location: AdminCreateNewAdv.php');
}

 $_SESSION["PassCon"] = false;

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
				<h2>New Advisor has been created:</h2>

		<?php
		
		//grab the entered data from the previous page
		$first = $_POST["firstN"];
		$last = $_POST["lastN"];
		$user =$_POST["UserN"];
		$pass = $_POST["PassW"];
		$roomnum = $_POST["RoomNum"];
		$meetingroomnum = $_POST["MeetingRoomNum"];
		
		include ('CommonMethods.php');
		$debug = false;
		$Common = new Common ( $debug );
		
		//see if this user already exists
		$sql = "SELECT * FROM `Proj2Advisors` WHERE `Username` = '$user' AND `FirstName` = '$first' AND  `LastName` = '$last'";
		$rs = $Common->executeQuery ( $sql, "Advising Appointments" );
		$row = mysql_fetch_row ( $rs );
		
		//the user exists
		if ($row) {
			echo ("<h3>Advisor $first $last already exists</h3>");
			
		//otherwise insert the new advisor into the table	
		} else {
			$sql = "INSERT INTO `Proj2Advisors`(`FirstName`, `LastName`, `Username`, `Password`,`RoomNumber`,`MeetingRoomNumber`) 
  			VALUES ('$first', '$last', '$user', '$pass','$roomnum', '$meetingroomnum')";
			echo ("<h3>$first $last<h3>");
			$rs = $Common->executeQuery ( $sql, "Advising Appointments" );
		}
		?>
		
		<!--Return to the home screen-->
		<form method="link" action="AdminUI.php">
					<input type="submit" name="next" class="button large go"
						value="Return to Home">
				</form>
			</div>
		</div>
	</div>
	</form>
<?php include('Footer.php'); ?>