<?php
session_start ();
?>

<html lang="en">
<head>
	<?php include('Header.php'); ?>
<title>Exit Message</title>
</head>
<body>
	<div id="login">
		<div id="form">
			<div class="top">
				<div class="statusMessage">
	    <?php
					//what was the result of the users action??
					$_SESSION ["resch"] = false;
					
					//essentially, we simply need to print the status
					
					//user signed up for an appointment
					if ($_SESSION ["status"] == "complete") {
						echo "You have completed your sign-up for an advising appointment.";
						
					//user decided not to sign up for an appointment
					} elseif ($_SESSION ["status"] == "none") {
						echo "You did not sign up for an advising appointment.";
					}
					//user cancelled their appointment
					if ($_SESSION ["status"] == "cancel") {
						echo "You have cancelled your advising appointment.";
					}
					
					//user rescheduled their appointment
					if ($_SESSION ["status"] == "resch") {
						echo "You have changed your advising appointment.";
					}
					
					//user decided to keep their appointment
					if ($_SESSION ["status"] == "keep") {
						echo "No changes have been made to your advising appointment.";
					}
					?>
        </div>
		
				<!--return to the home page-->
				<form action="02StudHome.php" method="post" name="complete">
					<div class="returnButton">
						<input type="submit" name="return" class="button large go"
							value="Return to Home">
					</div>
			
			</div>
			</form>

<?php include('Footer.php'); ?>