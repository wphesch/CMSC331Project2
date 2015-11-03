<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Edit Group Appointment</title>
	<?php include('Header.php'); ?>
  </head> 
  <body>
    <div id="login">
      <div id="form">
        <div class="top">
          <h1>Edit Group Appointment</h1>
		  <div class="field">
          <?php
            $debug = false;
            include('CommonMethods.php');
            $COMMON = new Common($debug);

            $group = $_SESSION["GroupApp"];
            parse_str($group);

            echo("<form action=\"AdminConfirmEditGroup.php\" method=\"post\" name=\"Edit\">");
			//data from previous page
            echo("Time: ". date('l, F d, Y g:i A', strtotime($row[0])). "<br>");
            echo("Majors included: ");
			
			//if majors were set, list them here
            if($row[1]){
              echo("$row[1]<br>"); 
            }
            else{
              echo("Available to all majors<br>"); 
            }
			
            echo("Number of students enrolled: $row[2] <br>");
            echo("Student limit: ");
            echo("<input type=\"number\" id=\"stepper\" name=\"stepper\" min=\"$row[2]\" max=\"$row[3]\" value=\"$row[3]\" />");

            echo("<br><br>");

            echo("<div class=\"nextButton\">");
            echo("<input type=\"submit\" name=\"next\" class=\"button large go\" value=\"Submit\">");
            echo("</div>");
            echo("</div>");
            echo("<div class=\"bottom\">");
			
			//if the advisor tries to lower the max students to less than currently enrolled, don't allow it. 
            if($row[2] > 0){
              echo "<p style='color:red'>Note: There are currently $row[2] students enrolled in this appointment. <br>
                    The student limit cannot be changed to be under this amount.</p>";
            }
            echo("</div>");
          ?>
		  </div>
  </div>
  </div>
  </form>
<?php include('Footer.php'); ?>