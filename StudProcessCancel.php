<?php
session_start();
$debug = false;
include('CommonMethods.php');
$COMMON = new Common($debug);

//if the student confirms to cancel the appointment
if($_POST["cancel"] == 'Cancel'){

	$studid = $_SESSION["studID"];
	$studentRow = $COMMON->getStudentInfo($studid);

	$firstn = $studentRow[1];
	$lastn = $studentRow[2];
	$major = $studentRow[5];
	$email = $studentRow[4];

	//need to grab original attendees for the appointment in case it was a group
	$oldAdvisorID = $COMMON->getStudentAdvisor($studid);
	$oldAppTime = $COMMON->getStudentAppointmentTime($studid);
	$otherStudents = $COMMON->getStudentsSharingAppointment($studid);

	//original ID's minus the student who is cancelling
	$newIDs = str_replace($studid, "", $otherStudents);

	//update the table
	$sql = "update `Proj2Appointments` set `EnrolledNum` = EnrolledNum-1, `EnrolledID` = '$newIDs' where `AdvisorID` = '$oldAdvisorID' and `Time` = '$oldAppTime'";
	$COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);

	//update stud status to indicate lack of appointment
	$sql = "update `Proj2Students` set `Status` = 'N' where `id` = $studid";
	$COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);

	//alert the next page that the appointment was cancelled
	$_SESSION["status"] = "cancel";
}
//student decided to keep the appointment
else{
	$_SESSION["status"] = "keep";
}
header('Location: 12StudExit.php');
?>
