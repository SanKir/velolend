<?php 
	$connection = mysqli_connect("localhost","root","","test2");
	if($connection == false)
	{
		echo "No connection to BD ".mysqli_connect_error();
		exit();
	}
	session_start();
?>