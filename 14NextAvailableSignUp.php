<?php
ob_start();
session_start();
$debug = true;



include('CommonMethods.php');
$COMMON = new Common($debug);


$studentRow = $COMMON->getStudentInfo($_SESSION["studID"]);
$localMaj = $studentRow[5];

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
				//$row = mysql_fetch_row ( $rs );
				echo "ind appointment <br> ";				
				echo $sql . "<br>";
				//echo $row[12];
			}
			else 
			{
				echo "group appointment <br> ";
				// grab the soonest group appointment
				$sql = "select * from Proj2Appointments a
				where `advisorID` = 0 and `EnrolledNum` < `Max` and (`Major` like '%$localMaj%' or `Major` = '')  and `Time` > '".date('Y-m-d H:i:s')."' order by `Time` ASC limit 1";
				$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
				echo $sql . "<br>";
			}
			
			//collect the data for this appointment
			while($row = mysql_fetch_row($rs)){
				$_SESSION["appTime"] = $row[1];
				if($_SESSION["advisor"] != "Group")
					$_SESSION["advisorID"] = $row[2];
			
				break;
			}
			//echo var_dump($_SESSION);
			header('Location: 10StudConfirmSch.php');
		?>
