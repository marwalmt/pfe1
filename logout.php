<?php   
session_start(); //to ensure you are using same session
if (isset($_SESSION["mail"])) {
	session_destroy(); //destroy the session
	header('Location: conecter.php');
	exit();
}
else{
	header('Location: conecter.php');
	exit();
}
exit();
?>
