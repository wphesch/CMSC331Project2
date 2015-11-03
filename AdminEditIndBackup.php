<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Edit Individual Appointment</title>
	<?php include('Header.php'); ?>
  </head> 
  <body>
    <div id="login">
      <div id="form">
        <div class="top">
          <h2>Select which appointment you would like to change: </h2>
		  <div class="field">
		  
          <?php
            $debug = false;
            include('CommonMethods.php');
            $COMMON = new Common($debug);

			//grab all appointments for all advisors, non group
            $sql = "SELECT * FROM `Proj2Appointments` WHERE `AdvisorID` != '0' and `Time` > '".date('Y-m-d H:i:s')."' ORDER BY `Time`";
            $rs = $COMMON->executeQuery($sql, "Advising Appointments");
            $row = mysql_fetch_array($rs, MYSQL_NUM); 
			
			//did we find any appointments - this is the first one
            if($row){
              echo("<form action=\"AdminConfirmEditInd.php\" method=\"post\" name=\"Confirm\">");
			  echo("<table border='1px'>\n<tr>");
			  echo("<tr><td width='320px'>Time</td><td>Majors</td><td>Enrolled</td></tr>\n");

			  //grab the student information for this appointment
              if($row[4]){
                $trdsql = "SELECT `FirstName`, `LastName` FROM `Proj2Students` WHERE `StudentID` = '$row[4]'";
                $trdrs = $COMMON->executeQuery($trdsql, "Advising Appointments");
                $trdrow = mysql_fetch_row($trdrs);
              }

              echo("<tr><td><label for='$row[0]'><input type=\"radio\" id='$row[0]' name=\"IndApp\" 
                required value=\"row[]=$row[1]&row[]=$secrow[0]&row[]=$secrow[1]&row[]=$row[3]&row[]=$row[4]\">");
              echo(date('l, F d, Y g:i A', strtotime($row[1])). "</label></td>");
              
			  //print the majors if they exist
			  if($row[3]){
                echo("<td>$row[3]</td>"); 
              }
              else{
                echo("Available to all majors"); 
              }
              
			  //print a student if it exists
              if($row[4]){
                echo("<td>$trdrow[0] $trdrow[1]</td>");
              }
              else{
                echo("<td>Empty</td>");
              }
			  echo("</tr>\n");

              
			  //rest of items in row
              while ($row = mysql_fetch_array($rs, MYSQL_NUM)) {

				//grab the student information for this appointment
                if($row[4]){
                  $trdsql = "SELECT `FirstName`, `LastName` FROM `Proj2Students` WHERE `StudentID` = '$row[4]'";
                  $trdrs = $COMMON->executeQuery($trdsql, "Advising Appointments");
                  $trdrow = mysql_fetch_row($trdrs);
                }

                echo("<tr><td><label for='$row[0]'><input type=\"radio\" id='$row[0]' name=\"IndApp\" 
                  required value=\"row[]=$row[1]&row[]=$secrow[0]&row[]=$secrow[1]&row[]=$row[3]&row[]=$row[4]\">");
                echo(date('l, F d, Y g:i A', strtotime($row[1])). "</label></td>");
				
				//print the majors if they exist
                if($row[3]){
                  echo("<td>$row[3]</td>"); 
                }
                else{
                  echo("Available to all majors"); 
                }

                
				//print a student if it exists
                if($row[4]){
                  echo("<td>$trdrow[0] $trdrow[1]</td>");
                }
                else{
                  echo("<td>Empty</td>");
                }
				echo("</tr>\n");
		
                
				
              }
			  //end of the table
              echo("</table>");

              echo("<div class=\"nextButton\">");
              echo("<input type=\"submit\" name=\"next\" class=\"button large go\" value=\"Delete Appointment\">");
              echo("</div>");
			  echo("</form>");
			  echo("<form method=\"link\" action=\"AdminUI.php\">");
              echo("<input type=\"submit\" name=\"next\" class=\"button large\" value=\"Cancel\">");
              echo("</form>");
            }
			
			//if there was no appointment data, there is nothing to adjust
            else{
              echo("<br><b>There are currently no individual appointments scheduled at the current moment.</b>");
              echo("<br><br>");
			  echo("</td</tr>");
              echo("<form method=\"link\" action=\"AdminUI.php\">");
              echo("<input type=\"submit\" name=\"next\" class=\"button large go\" value=\"Return to Home\">");
              echo("</form>");
            }
          ?>
		  
	</div>
	</div>
	<div class="bottom">
		<p style='color:red'>Please note that individual appointments can only be removed from schedule.</p>
	</div>
	</div>
	<?php include('./workOrder/workButton.php'); ?>

	</div>
<?php include('Footer.php'); ?>
