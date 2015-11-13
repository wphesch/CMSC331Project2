<?php
session_start();
$debug = false;
include ('CommonMethods.php');
$COMMON = new Common ( $debug );

//save the login information
$_SESSION["studID"] = $COMMON->getIDOfStudentID(strtoupper($_POST["studID"]));

if($debug)
	echo "Student id - " . $_SESSION["studID"] . " <br> ";

//proceed back to student home page
header('Location: 02StudHome.php');

?>