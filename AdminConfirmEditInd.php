<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Edit Individual Appointment</title>
    <script type="text/javascript">
    function saveValue(target){
	var stepVal = document.getElementById(target).value;
	alert("Value: " + stepVal);
    }
    </script>
	<link rel='stylesheet' type='text/css' href='css/default.css'/>  
  </head>
  <body>
    <div id="login">
      <div id="form">
        <div class="top">
          <h1>Removed Appointment</h1><br>
		  <div class="field">
          <?php
            $debug = false;
            include('CommonMethods.php');
            $COMMON = new Common($debug);
            $ind = $_POST["AppointmentID"];
            parse_str($ind);

			//grab the advisor id for this appointment so we find the appointment to delete
            $sql = "SELECT `id` FROM `Proj2Advisors` WHERE `FirstName` = '$row[1]' AND `LastName` = '$row[2]'";
            $rs = $COMMON->executeQuery($sql, "Advising Appointments");
            $rod = mysql_fetch_row($rs);
            $adv = $rod[0];

            if($row[4]){
				//grab the student id for this appointment so we find the appointment to delete
              $sql = "SELECT `FirstName`, `LastName`, `Email` FROM `Proj2Students` WHERE `StudentID` = '$row[4]'";
			  $rs = $COMMON->executeQuery($sql, "Advising Appointments");
              $ros = mysql_fetch_row($rs);
              $std = $ros[0] . " " . $ros[1];
              $eml = $ros[2];
            }

            $sql = "DELETE FROM `Proj2Appointments` WHERE `Time` = '$row[0]' AND `AdvisorID` = '$adv' AND `Major` = '$row[3]' AND `EnrolledID` = '$row[4]'";
			$rs = $COMMON->executeQuery($sql, "Advising Appointments");
			
            echo("Time: ". date('l, F d, Y g:i A', strtotime($row[0])). "<br>");
            echo("Advisor: $row[1] $row[2]<br>");
            echo("Majors included: ");
            if($row[3]){
              echo("$row[3]<br>"); 
            }
            else{
              echo("Available to all majors<br>"); 
            }
            echo("Enrolled: ");
            if($row[4]){
              echo("$std</b>");
			  
			  //update the student table to reflect a cancelled appointment status
			  
              $sql = "UPDATE `Proj2Students` SET `Status`='C' WHERE `StudentID` = '$row[4]'";
              $rs = $COMMON->executeQuery($sql, "Advising Appointments");
			  
			  //send an email to the student to let them know their appointment has been cancelled.
              $message = "The following appointment has been deleted by the adminstration of your advisor: " . "\r\n" .
                "Time: $row[0]" . "\r\n" . 
                "Advisor: $row[1] $row[2]" . "\r\n" . 
                "Student: $std" . "\r\n" . 
                "To schedule for a new appointment, please log back into the UMBC COEIT Engineering and Computer Science Advising webpage." . "\r\n" .
		"http://coeadvising.umbc.edu  -> COEIT Advising Scheduling \r\n Reminder, this is only accessible on campus."; 
              mail($eml, "Your Advising Appointment Has Been Deleted", $message); 
            }
            else{
              echo("Empty");
            }
			?>
			<br><br>
			<form method="link" action="AdminUI.php">
				<input type="submit" name="home" class="button large go" value="Return to Home">
			</form>
		</div>
    </div>    
	</div>
	<div class="bottom">
		<?php
		if($row[4]){
              echo "<p style='color:red'>$std has been notified of the cancellation.</p>";
        }
		?>
	</div>
	</div>
	</form>
  </body>
  
</html>
