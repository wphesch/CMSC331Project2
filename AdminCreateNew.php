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
				<h2>New Advisor has been created:</h2>

		<?php
		
		//grab the entered data from the previous page
		$first = $_SESSION ["AdvF"];
		$last = $_SESSION ["AdvL"];
		$user = $_SESSION ["AdvUN"];
		$pass = $_SESSION ["AdvPW"];
		$roomnum = $_SESSION ["RoomNum"];
		$meetingroomnum = $_SESSION ["MeetingRoomNum"];
		
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