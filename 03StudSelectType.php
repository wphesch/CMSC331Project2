<?php
session_start();
?>

<html lang="en">
  <head>
    	<?php include('Header.php'); ?>
    <title>Select Advising Type</title>
  </head>
  <body>
    <div id="login">
      <div id="form">
        <div class="top">
		<h1>Schedule Appointment</h1>
		<h2>What kind of advising appointment would you like?</h2><br>
	<form action="StudProcessType.php" method="post" name="SelectType">
	
	
	<div class="nextButtonAdvising">
	
		<!--Choose an individual or group appointment -->
		<input type="submit" name="type" class="button large go" value="Individual">
		<input type="submit" name="type" class="button large go" value="Group" style="float: right;">
	    </div>
		</div>
		</form>

<br>
<br>
		<div>
		
		<!--	Go back to the student home page -->
		<form method="link" action="02StudHome.php">
		<input type="submit" name="home" class="button large" value="Cancel">
		</form>
		</div>
 <?php include('Footer.php'); ?>