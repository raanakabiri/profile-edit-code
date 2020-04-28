<?php 
	$db = mysqli_connect("localhost","root","","name detabase");
	if ($db->connect_error) {
    die("error in connection" . $db->connect_error);}
	session_start();
?>
