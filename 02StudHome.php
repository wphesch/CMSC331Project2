<?php
session_start();
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Student Advising Home</title>
	<link rel='stylesheet' type='text/css' href='css/default.css'/>
  </head>
  <body>
    <div id="login">
      <div id="form">
        <div class="top">
		<h2>Hello 
		<?php
			echo $_SESSION["firstN"];
		?>
        </h2>
	    <div class="selections">
		<form action="StudProcessHome.php" method="post" name="Home">
	    <?php
			$debug = false;
			

			include('CommonMethods.php');
			$COMMON = new Common($debug);
			
			$_SESSION["studExist"] = false;
			$adminCancel = false;
			$noApp = false;
			$studid = $_SESSION["studID"];

			//check to see if the student exists in the table yet
			$sql = "select * from Proj2Students where `StudentID` = '$studid'";
			$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
			$row = mysql_fetch_row($rs);
			
			
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
				//allows the user to select a new appointment
				echo "<button type='submit' name='selection' class='button large selection' value='Signup'>Signup for an appointment</button><br>";
				echo "<button type='submit' name='selection' class='button large selection' value='NextAvailableSignup'>Signup for next available appointment</button><br>";
			}
			else{
				
				//allows the user to view, reschedule or cancel their appointment
				echo "<button type='submit' name='selection' class='button large selection' value='View'>View my appointment</button><br>";
				echo "<button type='submit' name='selection' class='button large selection' value='Reschedule'>Reschedule my appointment</button><br>";
				echo "<button type='submit' name='selection' class='button large selection' value='Cancel'>Cancel my appointment</button><br>";
			}
			
			echo "<button type='submit' name='selection' class='button large selection' value='Search'>Search for appointment</button><br>";
			echo "<button type='submit' name='selection' class='button large selection' value='Edit'>Edit student information</button><br>";
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
  </body>
</html>