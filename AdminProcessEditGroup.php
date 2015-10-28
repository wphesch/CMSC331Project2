<?php
session_start();

$_SESSION["GroupApp"] = $_POST["GroupApp"];
$_SESSION["Delete"] = false;


//Handles the menu selection from AdminEditGroup to determine whether the appointment will be deleted or edited

if ($_POST["next"] == "Delete Appointment"){
	//delete the appointment
	$_SESSION["Delete"] = true;
	$_SESSION["advisor"] = $_POST["next"];
	header('Location: AdminConfirmEditGroup.php');
}
elseif ($_POST["next"] == "Edit Appointment"){
	//edit the appointment
	header('Location: AdminProceedEditGroup.php');
}

?>