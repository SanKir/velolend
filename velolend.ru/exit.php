<?php 
	include "include/connection.php";
	unset($_SESSION['logged_user']);
	header("Location:/");
?>