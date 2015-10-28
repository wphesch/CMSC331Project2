<?php
ob_start();
session_start();
$debug = false;

$localMaj = $_SESSION["major"];

include('CommonMethods.php');
$COMMON = new Common($debug);


			$curtime = time();

			if ($_SESSION["advisor"] != "Group")  // for individual conferences only
			{ 
				//grab the soonest individual appointment
				$sql = "select * from Proj2Appointments a
							join Proj2Advisors b
								on a.AdvisorID = b.id
				where $temp `EnrolledNum` = 0 
					and (`Major` like '%$localMaj%' or `Major` = '') and `Time` > '".date('Y-m-d H:i:s')."' order by `Time` ASC limit 1";
				$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
				
				echo $sql;
				echo $row[12];
			}
			else 
			{
				// grab the soonest group appointment
				$sql = "select * from Proj2Appointments a
				where `advisorID` = 0 and `EnrolledNum` < `Max` and (`Major` like '%$localMaj%' or `Major` = '')  and `Time` > '".date('Y-m-d H:i:s')."' order by `Time` ASC limit 1";
				$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
				echo $sql;
			}
			
			//collect the data for this appointment
			while($row = mysql_fetch_row($rs)){
				$_SESSION["appTime"] = $row[1];
				if($_SESSION["advisor"] != "Group")
					$_SESSION["advisorName"] = $row[8] . " " . $row[9];
				else
					$_SESSION["advisorName"] = $_SESSION["advisor"];
				$_SESSION["advisor"] = $row[2];

				$_SESSION["roomNumber"] = $row[12];
				break;
			}
			
			header('Location: 10StudConfirmSch.php');
		?>