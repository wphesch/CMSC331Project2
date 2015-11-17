<?php
session_start();
$debug = false;
include('CommonMethods.php');
$COMMON = new Common($debug);

//grab the information that the student wished to edit
$firstn = strtoupper($_POST["firstN"]);
$lastn = strtoupper($_POST["lastN"]);
$studid = $_SESSION["studID"];
$email = $_POST["email"];
$major = $COMMON->abbreviateMajor($_POST["major"]);





//as long as the record exists in the table
if($_SESSION["studExist"] == true){
	
	//update the student information as they requested
	$sql = "update `Proj2Students` set `FirstName` = '$firstn', `LastName` = '$lastn', `Email` = '$email', `Major` = '$major' where `id` = '$studid'";
	$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
}

header('Location: 02StudHome.php');
?>
