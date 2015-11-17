<?php
session_start();


$debug = false;
include('CommonMethods.php');
$COMMON = new Common($debug);
?>

<html lang="en">
  <head>
    	<?php include('Header.php'); ?>
    <title>Search for Appointment</title>
  </head>
  <body>
    <div id="login">
      <div id="form">
        <div class="top">
		<h1>Search Results</h1>
		<h3>Showing open appointments only</h3>
	    <div class="field">
			<p>Showing results for: </p>
			<?php
			
			
				$studentRow = $COMMON->getStudentInfo($_SESSION["studentID"]);
				$localMaj = $studentRow[5];
			
				//grab the search parameters from the previous page
				$date = $_POST["date"];
				$times = $_POST["time"];
				$advisor = $_POST["advisor"];
				$results = array();
				
				
				//print out the users selections
				
				//did they select a date?
				if($date == ''){ echo "Date: All"; }
				else{ 
					echo "Date: ",$date;
					$date = date('Y-m-d', strtotime($date));
				}
				echo "<br>";
				
				//did they select a time?
				if(empty($times)){ echo "Time: All"; }
				else{
					$i = 0;
					echo "Time: ";

					foreach($times as $t){
						echo ++$i, ") ", date('g:i A', strtotime($t)), " ";
					}
				}
				echo "<br>";
				
				//did they select an advisor?
				if($advisor == ''){ echo "Advisor: All appointments"; }
				elseif($advisor == 'I'){ echo "Advisor: All individual appointments"; }
				elseif($advisor == '0'){ echo "Advisor: All group appointments"; }
				else{
					//grab the advisors name
					$sql = "select * from Proj2Advisors where `id` = '$advisor'";
					$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
					while($row = mysql_fetch_row($rs)){
						echo "Advisor: ", $row[1], " ", $row[2];
					}
				}
				?>
				
				<br><br><label>
				<?php
				
				//LETS BUILD OUR SQL QUERY!!	
				$sql = "select * from Proj2Appointments a left join Proj2Advisors b on a.AdvisorID = b.id where ";	
				
				//specific advisor?
				if($advisor == 'I'){
					$advisorFilter  = " and `AdvisorID` != 0 ";
				}else{
					$advisorFilter  = " and `AdvisorID` like '%$advisor%' ";
				}	
				
				//filter by major
				//order by time
				$orderByAndMajor =   " and `Major` like '%". $localMaj ."%' order by `Time` ASC Limit 30";
				
				//filter dates/times
				if(empty($times)){
					
					//simple date filter
					$timeFilter = "  `Time` like '%$date%' ";
				}else{
					
					//otherwise a range of dates
					$timeFilter = "  `Time` IN ( ";
					
					//add each date/time possiblity
					foreach($times as $t){
						$timeFilter .= "'$date $t', ";
					}
					
					//remove last comma
					$timeFilter = substr($timeFilter,0,strlen($timeFilter)-2);
					
					//close the parenthesis
					$timeFilter .= ")";
					
					//greater than today
					$timeFilter .= " and `Time` > '".date('Y-m-d H:i:s')."'";
				}
				
				$sql .=   $timeFilter . $advisorFilter . $orderByAndMajor ;
				
				//execute the query
				$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
				
				//build our array of results
				while($row = mysql_fetch_row($rs)){
					if($row[2] == 0){
						$advName = "Group";
					}
					else{ 
						$advName = $row[8] ." ". $row[9];
					}
					$found = 	"<tr><td>". date('l, F d, Y g:i A', strtotime($row[1]))."</td>".
							"<td>". $advName."</td>". 
							"<td>". $row[3]. "</td></tr>";
							
					array_push($results, $found);
				}
				
				
				//print out what we found to the screen
				if(empty($results)){
					echo "No results found.<br><br>";
				}
				else{
					echo("<table border='1'><th colspan='3'>Appointments Available</th>\n");
					echo("<tr><td width='60px'>Time:</td><td>Advisor</td><td>Major</td></tr>\n");

					foreach($results as $r){ echo($r."\n"); }

					echo("</table>");
				}
			?>
			
			</label>
        </div>
		<form action="02StudHome.php" method="link">
	    <div class="nextButton">
			<input type="submit" name="done" class="button large go" value="Done">
	    </div>
		</form>
		</div>
		<div class="bottom">
		<p>If the Major category is followed by a blank, then it is open for all majors.</p>
		</div>
<?php include('Footer.php'); ?>
