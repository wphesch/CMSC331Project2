<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Schedule Appointment</title>
		<?php include('Header.php'); ?>
  </head>
  <body>
    <div id="login">
      <div id="form">
        <div class="top">
	<h1>Schedule Appointments</h1>
	<h2>Select advising type</h2><br>
	
	
<!-- Choose either a group or individual advising session -->
	
	<form method="post" action="AdminProcessSchedule.php">
	<div class="nextButton">
		<input type="submit" name="next" class="button large go" value="Individual">
		<input type="submit" name="next" class="button large go" value="Group" style="float: right;">
	</div>
	</form>
        </div>
	</div>
		</form>
		<form method="link" action="AdminUI.php">
		<input type="submit" name="home" class="button large" value="Cancel">
		</form>
   	</div>
	</div>
<?php include('Footer.php'); ?>
