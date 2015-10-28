<?php
session_start ();
$debug = false;
include ('CommonMethods.php');
$COMMON = new Common ( $debug );
?>

<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Cancel Appointment</title>
<link href="css/default.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="login">
		<div id="form">
			<div class="top">
				<h1>Cancel Appointment</h1>
				<div class="field">
				<?php
					//grab info from the previous page
					$firstn = $_SESSION ["firstN"];
					$lastn = $_SESSION ["lastN"];
					$studid = $_SESSION ["studID"];
					$major = $_SESSION ["major"];
					$email = $_SESSION ["email"];
					
					//grab the appointments for this student
					$sql = "select * from Proj2Appointments a left join Proj2Advisors b on a.`AdvisorID` = b.`id` where `EnrolledID` like '%$studid%'";
					$rs = $COMMON->executeQuery ( $sql, $_SERVER ["SCRIPT_NAME"] );
					$row = mysql_fetch_row ( $rs );
					
					//advisor and time for this appointment
					$oldAdvisorID = $row [2];
					$oldDatephp = strtotime ( $row [1] );
					
					//grab the name and room number
					if ($oldAdvisorID != 0) {
						$oldAdvisorName = $row[8] . " " . $row[9];
						$roomNumber = $row [12];
					} else {
						$oldAdvisorName = "Group";
					}
					
					//print out to the screen
					echo "<h2>Current Appointment</h2>";
					echo "<label for='info'>";
					echo "Advisor: ", $oldAdvisorName, "<br>";
					echo "Room Number: ", $roomNumber, "<br>";
					echo "Appointment: ", date ( 'l, F d, Y g:i A', $oldDatephp ), "</label><br>";
					?>		
				</div>
		
				<!--Decide to keep or cancel appointment-->
				<div class="finishButton">
					<form action="StudProcessCancel.php" method="post" name="Cancel">
						<input type="submit" name="cancel" class="button large go"
							value="Cancel"> <input type="submit" name="cancel"
							class="button large" value="Keep">
					</form>
				</div>
			</div>
			<div class="bottom">
				<p>Click "Cancel" to cancel appointment. Click "Keep" to keep
					appointment.</p>
			</div>
			</form>

</body>
</html>