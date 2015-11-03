<?php
session_start();
$debug = false;
include('CommonMethods.php');
$COMMON = new Common($debug);
?>

<html lang="en">
  <head>
	<?php include('Header.php'); ?>
    <title>Select Advisor</title>
  </head>
  <body>
    <div id="login">
      <div id="form">
        <div class="top">
		<h1>Individual Advising</h1>
		<h2>Select Advisor</h2>
	    <div class="field">
		<form action="08StudSelectTime.php" method="post" name="SelectAdvisor">
	    <?php
			//select all the advisors from the table
			$sql = "select * from Proj2Advisors";
			$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
			
			//print them out for the user to select them
			while($row = mysql_fetch_row($rs)){
				echo "<label for='",$row[0],"'><input id='",$row[0],"' type='radio' name='advisor' required value='", $row[0],"'>", $row[1]," ", $row[2],"</label><br>";
			}
		?>
        </div>
	    <div class="nextButton">
			<input type="submit" name="next" class="button large go" value="Next">
	    </div>
		</div>
		</form>
		<div>
		<!--return to the home screen-->
		<form method="link" action="02StudHome.php">
		<input type="submit" name="home" class="button large" value="Cancel">
		</form>
		</div>
<?php include('Footer.php'); ?>