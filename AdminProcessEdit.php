<?php
session_start();


//handles the menu selection from admineditapp to determine whether to send to admin edit group or admineditind

if ($_POST["next"] == "Group"){
	$_SESSION["advisor"] = $_POST["next"];
	header('Location: AdminEditGroup.php');
}
elseif ($_POST["next"] == "Individual"){
	header('Location: AdminEditInd.php');
}

?>