<?php
session_start();

//save the login information
$_SESSION["firstN"] = strtoupper($_POST["firstN"]);
$_SESSION["lastN"] = strtoupper($_POST["lastN"]);
$_SESSION["studID"] = strtoupper($_POST["studID"]);
$_SESSION["email"] = $_POST["email"];
$_SESSION["major"] = abbreviateMajor($_POST["major"]);


//small function to abbreviate major to save space in the database
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

//proceed back to student home page
header('Location: 02StudHome.php');

?>