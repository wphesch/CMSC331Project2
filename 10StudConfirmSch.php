<?php
session_start ();
if ($_POST ["appTime"] != null)
	$_SESSION ["appTime"] = $_POST ["appTime"]; // radio button selection from previous form or from next available php
?>

<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Confirm Appointment</title>
<link rel='stylesheet' type='text/css' href='css/default.css' />
</head>
<body>
	<div id="login">
		<div id="form">
			<div class="top">
				<h1>Confirm Appointment</h1>
				<div class="field">
					<form action="StudProcessSch.php" method="post" name="SelectTime">
					
					<?php
					$debug = false;
					include ('CommonMethods.php');
					$COMMON = new Common ( $debug );
					
					//grab the data from the previous page
					$firstn = $_SESSION ["firstN"];
					$lastn = $_SESSION ["lastN"];
					$studid = $_SESSION ["studID"];
					$major = $_SESSION ["major"];
					$email = $_SESSION ["email"];
					
					//if this was a rescheduling, grab the original schedule
					if ($_SESSION ["resch"] == true) {
						$sql = "select * from Proj2Appointments a
								join Proj2Advisors b on a.AdvisorID = b.id where `EnrolledID` like '%$studid%'";
						$rs = $COMMON->executeQuery ( $sql, $_SERVER ["SCRIPT_NAME"] );
						$row = mysql_fetch_row ( $rs );
						$oldAdvisorID = $row [2];
						$oldDatephp = strtotime ( $row [1] );
						
						if ($oldAdvisorID != 0) {
							$oldAdvisorName = $row[8] . " " . $row[9];
							$oldRoomNumber = $row[12];
						} else {
							$oldAdvisorName = "Group";
						}
						
						echo "<h2>Previous Appointment</h2>";
						echo "<label for='info'>";
						echo "Advisor: ", $oldAdvisorName, "<br>";
						echo "Room Number: ", $oldRoomNumber, "<br>";
						echo "Appointment: ", date ( 'l, F d, Y g:i A', $oldDatephp ), "</label><br>";
					}
					
					//did the user want the first available or did they choose a specific appointment?
					//lets remind them on the page
					if ($_SESSION ["nextPage"] == "nextAvailable")
						$current_appointment = "First Available Appointment";
					else
						$current_appointment = "Current Appointment";
					
					
					//grab their original requests
					$currentAdvisorID = $_SESSION ["advisor"];
					$currentDatephp = strtotime ( $_SESSION ["appTime"] );
					$currentAdvisorName = $_SESSION["advisorName"];
					$currentRoomNumber =  $_SESSION["roomNumber"];
					
					if ($currentAdvisorID == 0) {
						$currentAdvisorName = "Group";
					}
					
					//print out the information
					echo "<h2>".$current_appointment."</h2>";
					echo "<label for='newinfo'>";
					echo "Advisor: ", $currentAdvisorName, "<br>";
					echo "Room Number: ", $currentRoomNumber, "<br>";
					echo "Appointment: ", date ( 'l, F d, Y g:i A', $currentDatephp ), "</label>";
					?>
        		
				</div>
				<div class="nextButton">
		<?php
		if ($_SESSION ["resch"] == true) {
			echo "<input type='submit' name='finish' class='button large go' value='Reschedule'>";
		} else {
			echo "<input type='submit' name='finish' class='button large go' value='Submit'>";
		}
		?>
			<input style="margin-left: 50px" type="submit" name="finish"
						class="button large" value="Cancel">
				</div>
				</form>
			</div>

</body>
</html>