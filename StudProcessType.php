<?php
session_start();

//did the user wish to select a time?
if($_SESSION["nextPage"] == "selectTime"){
	
	//If they wanted a group appointment, all advisors will be present
	if ($_POST["type"] == "Group"){
		$_SESSION["advisor"] = $_POST["type"];
		header('Location: 08StudSelectTime.php');
	}
	//otherwise individual appointments require selecting a specific advisor
	elseif ($_POST["type"] == "Individual"){
		header('Location: 07StudSelectAdvisor.php');
	}
	
//otherwise choose the next available time
}else{
	
		//If they wanted a group appointment, all advisors will be present
	if ($_POST["type"] == "Group"){
		$_SESSION["advisor"] = $_POST["type"];
	}else{
		$_SESSION["advisor"] = "individual";
	}
	
	header('Location: 14NextAvailableSignUp.php');
}


?>