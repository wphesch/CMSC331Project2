<?php
session_start();
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Exit Message</title>
	<link rel='stylesheet' type='text/css' href='css/defsult.css'/>
  </head>
  <body>
    <div id="login">
      <div id="form">
        <div class="top">
		<!-- We only hit this page in the case that someone takes the appointment immediately as someone else selects it. This will redirect them back to the home page.  -->
	    <div class="statusMessage">
		Someone JUST took that appointment before you. Please find another available appointment.
        </div>
		
		<!--Return to the home screen-->
		<form action="02StudHome.php" method="post" name="complete">
	    <div class="returnButton">
			<input type="submit" name="return" class="button large go" value="Return to Home">
	    </div>
		</div>
		</form>
  </body>
</html>