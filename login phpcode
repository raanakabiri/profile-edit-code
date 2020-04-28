<?php 
require('config/config.php');

$nationalcode = $_POST['nationalcode']; 
$password = $_POST['password'];

$check = mysqli_query($db, "SELECT * FROM table name WHERE nationalcode='$nationalcode' AND password='$password'");
if(mysqli_num_rows($check) > 0){
	$_SESSION["loggedin"] = $nationalcode;
	header("Location: profile.php");
	echo '<script> alert("successful login")</script>';
	
}else{
	
	header("Location: dupsignin.php");
	echo '<script> alert("nationalcode or password no ")</script>';
	
}

 ?>
