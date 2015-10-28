<?php
session_start();
$debug = false;
include('CommonMethods.php');
$COMMON = new Common($debug);

$studID = $_SESSION["studID"];
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>View Appointment</title>
	<link rel='stylesheet' type='text/css' href='css/default.css'/>
  </head>
  <body>
    <div id="login">
      <div id="form">
        <div class="top">
		<h1>View Appointment</h1>
	    <div class="field">
	    <?php
		
			//grab the students appointment
			$sql = "select * from Proj2Appointments a left join Proj2Advisors b on a.`AdvisorID` = b.`id` where `EnrolledID` like '%$studID%'";
			$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
			
			// if for some reason there really isn't a match, (something got messed up, tell them there really isn't one there)
			$num_rows = mysql_num_rows($rs);

			//we found the students appointment
			if($num_rows > 0)
			{
				$row = mysql_fetch_row($rs); 
				
				//get the advisor and date information
				$advisorID = $row[2];
				$datephp = strtotime($row[1]);
				
				//if not a group appointment, grab the advisor information
				if($advisorID != 0){
					$advisorName = $row[8] . " " . $row[9];
					$roomNumber = $row[12];
				}
				else{$advisorName = "Group";}
			
				//print out the information
				echo "<label for='info'>";
				echo "Advisor: ", $advisorName, "<br>";
				echo "Room Number: ", $roomNumber, "<br>";
				echo "Appointment: ", date('l, F d, Y g:i A', $datephp), "</label>";
			}
			else // something is up, and there DB table needs to be fixed
			{
				
				echo("No appointment was detected. It may have been cancelled. Please make another appointment.");
				//update the table to reflect lack of appointment
				$sql = "update `Proj2Students` set `Status` = 'N' where `StudentID` = '$studID'";
				$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
			}
	

		?>
        </div>
	    <div class="finishButton">
			<button onclick="location.href = '02StudHome.php'" class="button large go" >Return to Home</button>
	    </div>
		</div>
		</form>
  </body>
</html>