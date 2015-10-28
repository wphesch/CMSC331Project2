<?php
session_start();

//grabs all the form variables and logs them to the session variables for processing in 
$_SESSION["AdvF"] = $_POST["firstN"];
$_SESSION["AdvL"] = $_POST["lastN"];
$_SESSION["AdvUN"] = $_POST["UserN"];
$_SESSION["AdvPW"] = $_POST["PassW"];
$_SESSION["RoomNum"] = $_POST["RoomNum"];
$_SESSION["PassCon"] = false;

//confirmed password equaled first password field, therefore proceed to next page.
if($_POST["PassW"] == $_POST["ConfP"]){
	header('Location: AdminCreateNew.php');
}

//confirmed password did not equal first password field, therefore proceed to previous page to reenter password.
elseif($_POST["PassW"] != $_POST["ConfP"]){
	$_SESSION["PasswordsNotMatching"] = true;
	header('Location: AdminCreateNewAdv.php');
}

?>