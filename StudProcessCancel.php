<?php
session_start();
$debug = false;
include('CommonMethods.php');
$COMMON = new Common($debug);

//if the student confirms to cancel the appointment
if($_POST["cancel"] == 'Cancel'){
	$firstn = $_SESSION["firstN"];
	$lastn = $_SESSION["lastN"];
	$studid = $_SESSION["studID"];
	$major = $_SESSION["major"];
	$email = $_SESSION["email"];
	
	//need to grab original attendees for the appointment in case it was a group
	$sql = "select * from Proj2Appointments where `EnrolledID` like '%$studid%'";
	$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
	$row = mysql_fetch_row($rs);
	$oldAdvisorID = $row[2];
	$oldAppTime = $row[1];
	
	//original ID's minus the student who is cancelling
	$newIDs = str_replace($studid, "", $row[4]);
	
	//update the table
	$sql = "update `Proj2Appointments` set `EnrolledNum` = EnrolledNum-1, `EnrolledID` = '$newIDs' where `AdvisorID` = '$oldAdvisorID' and `Time` = '$oldAppTime'";
	$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
	
	//update stud status to indicate lack of appointment
	$sql = "update `Proj2Students` set `Status` = 'N' where `StudentID` = '$studid'";
	$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
	
	//alert the next page that the appointment was cancelled
	$_SESSION["status"] = "cancel";
}
//student decided to keep the appointment
else{
	$_SESSION["status"] = "keep";
}
header('Location: 12StudExit.php');
?>