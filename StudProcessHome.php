<?php
session_start();


//handle the menu selection from the user 

//user wants to sign up for a new time
if($_POST["selection"] == 'Signup'){
	header('Location: 03StudSelectType.php');
	$_SESSION["nextPage"] = "selectTime";
}
//user wants to sign up for the next available time
elseif($_POST["selection"] == 'NextAvailableSignup'){
	header('Location: 03StudSelectType.php');
	$_SESSION["nextPage"] = "nextAvailable";
}

//student wants to view their appointment
elseif($_POST["selection"] == 'View'){
	header('Location: 04StudViewApp.php');
}

//student wants to reschedule their appointment
elseif($_POST["selection"] == 'Reschedule'){
	$_SESSION["resch"] = true;
	$_SESSION["nextPage"] = "selectTime";
	header('Location: 03StudSelectType.php');
}

//user wants to cancel their appointment
elseif($_POST["selection"] == 'Cancel'){
	header('Location: 05StudCancelApp.php');
}

//user wants to search for an appointment
elseif($_POST["selection"] == 'Search'){
	header('Location: 09StudSearchApp.php');
}

//user wants to edit their data
elseif($_POST["selection"] == 'Edit'){
	header('Location: 06StudEditInfo.php');
}

?>