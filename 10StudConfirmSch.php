<?php
session_start ();
if ($_POST ["appTime"] != null)
	$_SESSION ["appTime"] = $_POST ["appTime"]; // radio button selection from previous form or from next available php
?>

<html lang="en">
<head>
	<?php include('Header.php'); ?>
<title>Confirm Appointment</title>
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
					//echo var_dump($_SESSION);

					$COMMON = new Common ( $debug );
					
					$studid = $_SESSION ["studID"];
					$row = $COMMON->getStudentInfo($studid);

					
					//grab the data from the previous page
					$firstn = $row[1];
					$lastn = $row[2];
					$major = $row[5];
					$email = $row[4];
					
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
							$oldAdvisorRoomNumber = $row[12];
							$oldMeetingRoomNumber = $row[13];
						} else {
							$oldAdvisorName = "Group";
						}
						
						echo "<h2>Previous Appointment</h2>";
						echo "<label for='info'>";
						echo "Advisor: ", $oldAdvisorName, "<br>";
						echo "Advisor Room Number: ", $oldAdvisorRoomNumber, "<br>";
						echo "Meeting Room Number: ", $oldMeetingRoomNumber, "<br>";
						echo "Appointment: ", date ( 'l, F d, Y g:i A', $oldDatephp ), "</label><br>";
					}
					
					//did the user want the first available or did they choose a specific appointment?
					//lets remind them on the page
					if ($_SESSION ["nextPage"] == "nextAvailable")
						$current_appointment = "First Available Appointment";
					else
						$current_appointment = "Current Appointment";
					
					
					//grab their original requests
					$currentAdvisorID = $_SESSION ["advisorID"];
					$currentDatephp = strtotime ( $_SESSION ["appTime"] );
					$currentAdvisorRow = $COMMON->getAdvisorInfo($currentAdvisorID);
					$currentAdvisorName = $currentAdvisorRow[1] . " ". $currentAdvisorRow[2];
					$currentRoomNumber = $currentAdvisorRow[5];
					$currentMeetingRoomNumber =  $currentAdvisorRow[6];
					
					if ($currentAdvisorID == 0) {
						$currentAdvisorName = "Group";
					}
					

					echo "<h2>".$current_appointment."</h2>";
					if($_SESSION ["appTime"] != null){
						//print out the information
						echo "<label for='newinfo'>";
						echo "Advisor: ", $currentAdvisorName, "<br>";
						echo "Advisor Room Number: ", $currentRoomNumber, "<br>";
						echo "Meeting Room Number: ", $currentMeetingRoomNumber, "<br>";
						echo "Appointment: ", date ( 'l, F d, Y g:i A', $currentDatephp ), "</label>";
					}else{
						echo "<h2>No Appointment could be found <h2>";
					}
					
					?>
        		
				</div>
				<div class="nextButton">
		<?php
		if ($_SESSION ["resch"] == true && $_SESSION ["appTime"] != null) {
			echo "<input type='submit' name='finish' class='button large go' value='Reschedule'>";
		} else if($_SESSION ["appTime"] != null) {
			echo "<input type='submit' name='finish' class='button large go' value='Submit'>";
		}
		?>
			<input style="margin-left: 50px" type="submit" name="finish"
						class="button large" value="Cancel">
				</div>
				</form>
			</div>

<?php include('Footer.php'); ?>
