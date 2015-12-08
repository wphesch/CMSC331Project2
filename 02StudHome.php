<?php
session_start();
?>

<html lang="en">
  <head>
    	<?php include('Header.php'); ?>
    <title>Student Advising Home</title>
  </head>
  <body>
    <div id="login">
      <div id="form">
        <div class="top">
		<div class="name">
		<h2>Hello
		<?php
			$debug = false;
			include ('CommonMethods.php');
			$COMMON = new Common ( $debug );
			$studid = $_SESSION["studID"];

			if($debug)
				echo "studentID - $studid <br>";

			$row = $COMMON->getStudentInfo($studid);
			echo $row[1];
		?>
        </h2>
	</div>
	    <div class="selections">
		<form action="StudProcessHome.php" method="post" name="Home">
	    <?php

			$_SESSION["studExist"] = false;
			$adminCancel = false;
			$noApp = false;


			if (!empty($row)){
				//the student exists
				$_SESSION["studExist"] = true;

				//was the appointment cancelled by an advisor?
				if($row[6] == 'C'){
					$adminCancel = true;
				}

				//the user doesn't currently have an appointment
				if($row[6] == 'N'){
					$noApp = true;
				}
			}

			//if the student doesn't exists or the student needs a new appointment
			if ($_SESSION["studExist"] == false || $adminCancel == true || $noApp == true){
				if($adminCancel == true){
					echo "<p style='color:red'>The advisor has cancelled your appointment! Please schedule a new appointment.</p>";
				}
				echo "<button type='submit' name='selection' class='button home selection' value='Signup'><img src='images/sign_up.png' width='50' height='50' align = 'left'/>
				Signup for an appointment</button><br>";

        echo "<button type='submit' name='selection' class='button home selection' value='NextAvailableSignup'><img src='images/sign_up.png' width='50' height='50' align = 'left'/>
				Next available appointment</button><br>";

			}
			//if appointment has been set up
			else{

				echo "<button type='submit' name='selection' class='button home selection' value='View'> <img src='images/eye.png' width='50' height='50' align = 'left'/>
				View my appointment</button><br>";

				echo "<button type='submit' name='selection' class='button home selection' value='Reschedule'> <img src='images/Clipboard.png' width='50' height='50' align = 'left'/>
				Reschedule my appointment</button><br>";

				echo "<button type='submit' name='selection' class='button home selection' value='Cancel'> <img src='images/x.png' width='50' height='50' align = 'left'/>
				Cancel my appointment</button><br>";
			}
			echo "<button type='submit' name='selection' class='button home selection' value='Search'> <img src='images/glass.png' width='50' height='50' align = 'left'/>
			Search for appointment</button><br>";

			echo "<button type='submit' name='selection' class='button home selection' value='Edit'> <img src='images/pencil.png' width='50' height='50' align = 'left'/>
			Edit student information</button><br>";

		?>
		</form>
        </div>

		<!--Logout -->

		<form action="Logout.php" method="post" name="Logout">
	    <div class="logoutButton">
			<input type="submit" name="logout" class="button large go" value="Logout">
	    </div>
		</div>
		</form>
  <?php include('Footer.php'); ?>
