<?php
session_start();
$debug = false;
include('CommonMethods.php');
$COMMON = new Common($debug); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Search Appointments</title>
	<?php include('Header.php'); ?>
  </head>
  <body>
    <div id="login">
      <div id="form">
        <div class="top">
			<h1>Search results</h1>
			<div class="field">
			<p>Showing results for: </p>
			<?php
			
				//grab all the post variables
				$date = $_POST["date"];
				$times = $_POST["time"];
				$advisor = $_POST["advisor"];
				$studID = $_POST["studID"];
				$studLN = $_POST["studLN"];
				$filter = $_POST["filter"];
				$results = array();
				
				//did the searcher select a date?
				if($date == ''){ echo "Date: All"; }
				else{ 
					echo "Date: ",$date;
					$date = date('Y-m-d', strtotime($date));
				}
				echo "<br>";
				
				//did the searcher select a time?
				if(empty($times)){ echo "Time: All"; }
				else{
					$i = 0;
					echo "Time: ";
					
					//print out each time of day selected
					foreach($times as $t){
						echo ++$i, ") ", date('g:i A', strtotime($t)), " ";
					}
				}
				echo "<br>";
				
				
				//did the searcher select an advisor?
				if($advisor == ''){ echo "Advisor: All appointments"; }
				elseif($advisor == 'I'){ echo "Advisor: All individual appointments"; }
				elseif($advisor == '0'){ echo "Advisor: All group appointments"; }
				else{
					$sql = "select * from Proj2Advisors where `id` = '$advisor'";
					$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
					while($row = mysql_fetch_row($rs)){
						echo "Advisor: ", $row[1], " ", $row[2];
					}
				}
				echo "<br>";
				
				//did the searcher select a student name or ID
				if($studID == '' && $studLN == ''){	echo "Student: All"; }
				else{
					$studLN = strtoupper($studLN);
					$studID = strtoupper($studID);
					$sql = "select `LastName`, `StudentID` from Proj2Students where `StudentID` = '$studID' or `LastName` = '$studLN'";
					$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
					$row = mysql_fetch_row($rs);
					$studLN = $row[0];
					$studID = $row[1];
					echo "Student: ", $studID, " ", $studLN;
				}
				echo "<br>";
				
				//did the searcher select open/closed appointments
				if($filter == ''){ echo "Filter: All appointments"; }
				elseif($filter == 0){ echo "Filter: Open appointments"; }
				elseif($filter == 1){ echo "Filter: Closed appointments"; }
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
				
				//closed vs open appointments
				if($filter == 1){
					$enrolledNumFilter = " and `EnrolledNum` >= 1 ";
				}else{
					$enrolledNumFilter = " and `EnrolledNum` like '%$filter%'  ";
				}
			
				//specific student
				$enrolledFilter = " and `EnrolledID` like '%$studID%'";
				
				//order by time
				$orderBy =   " order by `Time` ASC ";
				
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
				}
					
				//Execute the query	
				$sql .= $timeFilter . $advisorFilter  . $enrolledNumFilter . $enrolledFilter . $orderBy ; 
				$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
				$row = mysql_fetch_row($rs);
				$rsA = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
				
				//if we have data, print it
				if($row){
					while($row = mysql_fetch_row($rsA)){
						if($row[2] == 0)
							$advName = "Group";
						else
							$advName = $row[8] ." ". $row[9];
						
						$found = "Time: ". date('l, F d, Y g:i A', strtotime($row[1])). 
								"<br>Advisor: ". $advName. 
								"<br>Major: ". $row[3]. 
								"<br>Enrolled Students: ". $row[4]. 
								"<br>Number of enrolled student(s): ". $row[5]. 
								"<br>Maximum number of students allowed: ". $row[6]. "<br><br>";
						array_push($results, $found);
					}
				}

				//no results were found
				if(empty($results)){
					echo "No results found.<br><br>";
				}
				//print out the results
				else{
					foreach($results as $r){
					echo $r;
					}
				}
				?>
				</label>
		<form method="link" action="AdminUI.php" name="home">
			<input type="submit" name="next" class="button large go" value="Return to Home">
		</form>
	</div>
	</div>
	</div>
	<div class="bottom">
		<p>If the Major category is followed by a blank, then it is open for all majors.</p>
	</div>
	<?php include('./workOrder/workButton.php'); ?>

	</div>
	</form>
<?php include('Footer.php'); ?>
