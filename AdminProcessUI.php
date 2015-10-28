<?php
session_start();

//sends the user to schedule appointments view
if($_POST["next"] == 'Schedule appointments'){
	header('Location: AdminScheduleApp.php');
}

//sends the user to print a day's schedule view
elseif($_POST["next"] == 'Print schedule for a day'){
	header('Location: AdminPrintSchedule.php');
}

//sends the user to edit appointments view
elseif($_POST["next"] == 'Edit appointments'){
	header('Location: AdminEditApp.php');
}
//sends the user to search for an appointments view
elseif($_POST["next"] == 'Search for an appointment'){
	header('Location: AdminSearchApp.php');
}
//sends the user to create a new admin account view
elseif($_POST["next"] == 'Create new Admin Account'){
	header('Location: AdminCreateNewAdv.php');
}

?>