<?php
 ob_start();
session_start();
$debug = false;

if($debug) { echo("Session variables-> ".var_dump($_SESSION)); }

include('CommonMethods.php');
$COMMON = new Common($debug);
$_SESSION["PassCon"] = false;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
	<?php include('Header.php'); ?>
    <title>Admin Home</title>
  </head>
  <body>
    <div id="login">
      <div id="form">
        <div class="top">
	<div class= "name">
	<h2> Hello
	<?php
	if(!isset($_SESSION["advisorID"])) // someone landed this page by accident
	{
		echo "Not Signed In";
		return;
	}

	$row = $COMMON->getAdvisorInfo($_SESSION["advisorID"]);

	//retrieve information from database

	//print out firstname from session variable from login
	echo $row[1]  . " ";
	echo $row[2] . " ";
	//echo $_SESSION["advisorID"];
	?>

	</h2>
	</div>

	<!-- Allow the user to select a action for their account -->
	<form action="AdminProcessUI.php" method="post" name="UI">
<button type='submit' name='next' class='button home selection' value='Schedule appointments'> <img src='images/sign_up.png' width='50' height='50' align = 'left'/>
		Schedule appointments</button><br>

		<button type='submit' name='next' class='button home selection' value='Print schedule for a day'> <img src='images/printer.png' width='50' height='50' align = 'left'/>
		Print Schedule for a day</button><br>

		<button type='submit' name='next' class='button home selection' value='Edit appointments'> <img src='images/pencil.png' width='50' height='50' align = 'left'/>
		Edit Appointments</button><br>

		<button type='submit' name='next' class='button home selection' value='Search for an appointment'> <img src='images/glass.png' width='50' height='50' align = 'left'/>
		Search For an Appointment</button><br>

		<button type='submit' name='next' class='button home selection' value='Create new Admin Account'> <img src='images/paper.png' width='50' height='50' align = 'left'/>
		Create New Admin Account</button><br>

	</form>
	<br>

	<form method="link" action="Logout.php">
		<input type="submit" name="next" class="button large go" value="Log Out">
	</form>

        </div>
        <div class="field">

        </div>
	</div>

<!-- Footer -->
<?php include('./workOrder/workButton.php'); ?>
<?php include('Footer.php'); ?>
