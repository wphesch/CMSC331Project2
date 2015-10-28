<?php

/* Had to make sure sessions was enabled. Some help here:

https://wiki.umbc.edu/pages/viewpage.action?pageId=46563550

cd /afs/umbc.edu/public/web/sites/coeadvising/prod/php/session/

/usr/bin/fs sa /afs/umbc.edu/public/web/sites/coeadvising/prod/php/session/ web.coeadvising all


then edit .htaccess file here in the same directory

*/


session_start();

include('CommonMethods.php');
$debug = false;
$Common = new Common($debug);

//get the advisors user name and password from previous window
$_SESSION["UserN"] = strtoupper($_POST["UserN"]);
$_SESSION["PassW"] = strtoupper($_POST["PassW"]);
$_SESSION["UserVal"] = false;

$user = $_SESSION["UserN"];
$pass = $_SESSION["PassW"];

//grab the data for this username and password
$sql = "SELECT * FROM `Proj2Advisors` WHERE `Username` = '$user' AND `Password` = '$pass'";
$rs = $Common->executeQuery($sql, "Advising Appointments");
$row = mysql_fetch_row($rs);


//if we got a row from the database, proceed to the admin home screen
if($row){
	// echo "printing advisor info " . $row[0] . $row[1] . $row[2] . "<br>";
	$_SESSION["FirstName"] = $row[1];
	$_SESSION["LastName"] = $row[2];
	$_SESSION["advisorID"] = $row[0];
	// var_dump($_SESSION);
	if($debug) { echo("<br>".var_dump($_SESSION)."<- Session variables above<br>"); }
	else { header('Location: AdminUI.php'); }
}

//if we didn't then the login was invalid and we should go back to login screen to try again
else{
	$_SESSION["InvalidLogin"] = true;
	header('Location: AdminSignIn.php'); 
}

?>