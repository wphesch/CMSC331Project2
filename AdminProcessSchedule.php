<?php
session_start();

// Handles the users selection of group versus individual

if ($_POST["next"] == "Group"){
	//go to group advising page
	$_SESSION["advisorID"] = $_POST["next"];
	header('Location: AdminScheduleGroup.php');
}
elseif ($_POST["next"] == "Individual"){
	//go to individual advising page
	header('Location: AdminScheduleInd.php');
}

?>