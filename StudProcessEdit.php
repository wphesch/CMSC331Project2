<?php
session_start();

//quick function used to abbreviate majors and save space in the database
function abbreviateMajor($major)
{
	if($major == "Engineering Undecided"){
		return "ENGR";
	}elseif($major == "Mechanical Engineering")	{
		return  "MENG"	;
	}elseif($major == "Chemical Engineering")	{
		return  "CENG"	;
	}elseif($major == "Computer Science")	{
		return  "CMSC"	;
	}elseif($major == "Computer Engineering")	{
		return  "CMPE"	;
	}

}

//grab the information that the student wished to edit
$_SESSION["firstN"] = strtoupper($_POST["firstN"]);
$_SESSION["lastN"] = strtoupper($_POST["lastN"]);
$_SESSION["email"] = $_POST["email"];
$_SESSION["major"] = abbreviateMajor($_POST["major"]);
$firstn = strtoupper($_POST["firstN"]);
$lastn = strtoupper($_POST["lastN"]);
$studid = $_SESSION["studID"];
$email = $_POST["email"];
$major = abbreviateMajor($_POST["major"]);


$debug = false;
include('CommonMethods.php');
$COMMON = new Common($debug);

//as long as the record exists in the table
if($_SESSION["studExist"] == true){
	
	//update the student information as they requested
	$sql = "update `Proj2Students` set `FirstName` = '$firstn', `LastName` = '$lastn', `Email` = '$email', `Major` = '$major' where `StudentID` = '$studid'";
	$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
}

header('Location: 02StudHome.php');
?>