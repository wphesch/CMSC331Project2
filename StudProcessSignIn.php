<?php
session_start();

//save the login information
$_SESSION["studID"] = strtoupper($_POST["studID"]);

//proceed back to student home page
header('Location: 02StudHome.php');

?>