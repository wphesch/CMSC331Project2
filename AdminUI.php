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
    <meta charset="UTF-8" />
    <title>Admin Home</title>
	<link rel='stylesheet' type='text/css' href='css/default.css'/>
  </head>
  <body>
    <div id="login">
      <div id="form">
        <div class="top">
	<h2> Hello 
	<?php
	if(!isset($_SESSION["UserN"])) // someone landed this page by accident
	{
		return;
	}		
	//print out firstname from session variable from login
	echo $_SESSION["FirstName"] . " ";
	echo $_SESSION["LastName"] . " ";
	//echo $_SESSION["advisorID"];
	?>
	
	</h2>
	
	
	<!-- Allow the user to select a action for their account -->
	<form action="AdminProcessUI.php" method="post" name="UI">
  
		<input type="submit" name="next" class="button large selection" value="Schedule appointments"><br>
		<input type="submit" name="next" class="button large selection" value="Print schedule for a day"><br>
		<input type="submit" name="next" class="button large selection" value="Edit appointments"><br>
		<input type="submit" name="next" class="button large selection" value="Search for an appointment"><br>
		<input type="submit" name="next" class="button large selection" value="Create new Admin Account"><br>
	
	</form>
	<br>

	<form method="link" action="Logout.php">
		<input type="submit" name="next" class="button large go" value="Log Out">
	</form>
          
        </div>
        <div class="field">
          
        </div>
	</div>

	<?php include('./workOrder/workButton.php'); ?>

</body>
  
</html>