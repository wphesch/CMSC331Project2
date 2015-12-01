<?php
session_start ();
$debug = false;
include ('CommonMethods.php');
$COMMON = new Common ( $debug );
?>

<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Search for Appointment</title>
<link href="css/default.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="login">
		<div id="form">
			<div class="top">
				<h1>Search for Appointments</h1>
				<div class="field">

				<!--Choose a date and time to search for appointments-->
					<form action="11StudSearchResult.php" method="post"
						name="SearchApp">
						<label for="date">Date</label> <input id="date" type="date"
							name="date" placeholder="mm/dd/yyyy" autofocus> (mm/dd/yyyy) <label
							for="time">Time</label><span
							style="font-size: 14px; font-family: Arial, Helvetica, sans-serif;">
							<input type="checkbox" name="time[]" value="08:00:00"> 8:00am -
							8:30am<br> <input type="checkbox" name="time[]" value="08:30:00">
							8:30am - 9:00am<br> <input type="checkbox" name="time[]"
							value="09:00:00"> 9:00am - 9:30am<br> <input type="checkbox"
							name="time[]" value="09:30:00"> 9:30am - 10:00am<br> <input
							type="checkbox" name="time[]" value="10:00:00"> 10:00am - 10:30am<br>
							<input type="checkbox" name="time[]" value="10:30:00"> 10:30am -
							11:00am<br> <input type="checkbox" name="time[]" value="11:00:00">
							11:00am - 11:30am<br> <input type="checkbox" name="time[]"
							value="11:30:00"> 11:30am - 12:00pm<br> <input type="checkbox"
							name="time[]" value="12:00:00"> 12:00pm - 12:30pm<br> <input
							type="checkbox" name="time[]" value="12:30:00"> 12:30pm - 1:00pm<br>
							<input type="checkbox" name="time[]" value="13:00:00"> 1:00pm -
							1:30pm<br> <input type="checkbox" name="time[]" value="13:30:00">
							1:30pm - 2:00pm<br> <input type="checkbox" name="time[]"
							value="14:00:00"> 2:00pm - 2:30pm<br> <input type="checkbox"
							name="time[]" value="14:30:00"> 2:30pm - 3:00pm<br> <input
							type="checkbox" name="time[]" value="15:00:00"> 3:00pm - 3:30pm<br>
							<input type="checkbox" name="time[]" value="15:30:00"> 3:30pm -
							4:00pm<br>

						<!--Choose a specific advisor or group/individual appointments-->
						</span> <label for="advisor">Advisor</label> <select id="advisor"
							name="advisor">
							<option value="">All appointments</option>
							<option value="I">Individual appointments</option>
							<option value="0">Group appointments</option>
							<?php
							$sql = "select * from Proj2Advisors";
							$rs = $COMMON->executeQuery ( $sql, $_SERVER ["SCRIPT_NAME"] );
							while ( $row = mysql_fetch_row ( $rs ) ) {
								echo "<option value='$row[0]'>$row[1] $row[2]</option>";
							}
							?>
			</select>

				</div>
				<div class="nextButton">
					<input type="submit" name="go" class="button large go" value="Go">
				</div>
			</div>
			</form>

			<!--Return to the home page-->
			<form action="02StudHome.php" method="post" name="complete">
				<div class="returnButton">
					<input type="submit" name="return" class="button large go"
						value="Return to Home">
				</div>

		</div>
		</form>

<?php include('Footer.php'); ?>
