<?php
session_start();
$flag = false;

if(isset($_SESSION['studID'])) { $flag = true; }

session_unset();
session_destroy();

//if we were logged in as a student, return to student login - otherwise, choice of student or admin sign in
if($flag) { header("Location: 01StudSignIn.php"); }
else { header("Location: StudentAdminSignIn.php"); }

?>