<?php
ob_start();
session_start();
$debug = false;
include('CommonMethods.php');
$COMMON = new Common($debug);

if($_POST["finish"] == 'Cancel'){
	$_SESSION["status"] = "none";
}
else{
	$studid = $_SESSION["studID"];
	$studentRow = $COMMON->getStudentInfo($studid);
	$firstn = $studentRow[1];
	$lastn = $studentRow[2];
	$major = $studentRow[5];
	$email = $studentRow[4];
	$advisor = $_SESSION ["advisorID"];

	if(debug) { echo("Advisor -> $advisor<br>\n"); }

	$apptime = $_SESSION["appTime"];

	//if for some reason, the student didnt exist in the system prior to this point, add them.
	if($_SESSION["studExist"] == false){
		$sql = "insert into Proj2Students (`FirstName`,`LastName`,`StudentID`,`Email`,`Major`) values ('$firstn','$lastn','$studid','$email','$major')";
		$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
	}


	//this was an initial request to schedule an advising session
	if($_POST["finish"] == 'Submit'){

		if($_SESSION["advisor"] == 'Group')  // student scheduled for a group session
		{
			///get the original list of students for this appointment
			$sql = "select * from Proj2Appointments where `Time` = '$apptime' and `AdvisorID` = 0";

			$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
			$row = mysql_fetch_row($rs);
			$groupids = $row[4];

			//increment the enrollment count and concatenate this student's ID with the original list of students and place this back in the table
			$sql = "update `Proj2Appointments` set `EnrolledNum` = EnrolledNum+1, `EnrolledID` = '$groupids $studid'
					where `Time` = '$apptime' and `AdvisorID` = 0";
			$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
		}
		else
		{
			// student scheduled for an individual session simply update enrollment and enrolled ID
			$sql = "update `Proj2Appointments` set `EnrolledNum` = EnrolledNum+1, `EnrolledID` = '$studid' where `AdvisorID` = '$advisor' and `Time` = '$apptime'";
			$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
		}

		//update complete
		$_SESSION["status"] = "complete";
	}

	//this was a reschedule request to replace an initial advising request
	elseif($_POST["finish"] == 'Reschedule'){
		//remove stud from EnrolledID
		$sql = "select * from Proj2Appointments where `EnrolledID` like '%$studid%'";
		$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
		$row = mysql_fetch_row($rs);
		$oldAdvisorID = $row[2];
		$oldAppTime = $row[1];
		$newIDs = str_replace($studid, "", $row[4]);

		//remove this student from his original appointment
		$sql = "update `Proj2Appointments` set `EnrolledNum` = EnrolledNum-1, `EnrolledID` = '$newIDs' where `AdvisorID` = '$oldAdvisorID' and `Time` = '$oldAppTime'";
		$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);

		//group appointment replacement
		if($_SESSION["advisor"] == 'Group'){
			$sql = "select * from Proj2Appointments where `Time` = '$apptime' and `AdvisorID` = 0";
			$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
			$row = mysql_fetch_row($rs);
			$groupids = $row[4];

			//increment the enrollment count and concatenate this student's ID with the original list of students and place this back in the table
			$sql = "update `Proj2Appointments` set `EnrolledNum` = EnrolledNum+1, `EnrolledID` = '$groupids $studid' where `Time` = '$apptime' and `AdvisorID` = 0";
			$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
		}

		//individual appoitment replacement
		else{
			$sql = "update `Proj2Appointments` set `EnrolledNum` = EnrolledNum+1, `EnrolledID` = '$studid' where `Time` = '$apptime' and `AdvisorID` = '$advisor'";
			$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
		}

		//update complete
		$_SESSION["status"] = "resch";
	}

	//update stud status to ''
	$sql = "update `Proj2Students` set `Status` = '' where `id` = $studid";
	$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);

}
if($debug == false) { header('Location: 12StudExit.php'); }



/*
Simple heloper function which determines if the advising session at the given time with the given advisor id is still available.
*/

function isStillAvailable($apptime, $advisor)
{
	// advisor could be "Group"
	global $debug; global $COMMON;
	$sql = "";

	if($advisor == "Group")
	{ $sql = "select `EnrolledNum`, `Max` from `Proj2Appointments` where `Time` = '$apptime' and `AdvisorID` = 0";  }
	else // then specific
	{ $sql = "select `EnrolledNum`, `Max` from `Proj2Appointments` where `Time` = '$apptime' and `AdvisorID` = '$advisor'";  }
	$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
	$row = mysql_fetch_row($rs);

	// if max [1] =< EnrolledNum[0], then the spot was indeed taken
	if($row[1] > $row[0]) // then all good
	{
		if($debug) { echo("spot available\n<br>"); }
		return true;
	}
	else // spot was taken
	{
		if($debug) { echo("spot NOT available\n<br>"); }
		return false;
	}

}

?>
