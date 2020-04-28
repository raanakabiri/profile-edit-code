<?php
$errors=array();
require ('config/config.php');
		if (isset($_POST['button send name in form'])) {

				$firstname = $_POST["firstname"];
				$lastname = $_POST['lastname'];
				$nationalcode= $_POST['nationalcode'];
				$email = $_POST['email'];
				$phonenumber = $_POST['phonenumber'];
				$password = $_POST['password'];

				if (empty($firstname)) { array_push($errors, "enter name"); }
				if (empty($lastname)) { array_push($errors, "enter lastname"); }
				if (empty($nationalcode)) { array_push($errors, "enter nationalcode"); }
				if (empty($email)) { array_push($errors, "enter email"); }
				if (empty($phonenumber)) { array_push($errors, "enter phonenumberد"); }
				if (empty($password)) { array_push($errors, "enter your password"); }
			
		}
			if (count($errors) == 0) {
				$check = mysqli_query($db, "SELECT nationalcode,email FROM table name WHERE nationalcode='$nationalcode' AND email='$email'");
				if(mysqli_num_rows($check)== 0){
					$register = mysqli_query($db, "INSERT INTO table name (firstname,lastname,nationalcode,email,phonenumber,password) VALUES ('$firstname', '$lastname','$nationalcode','$email','$phonenumber','$password')");
					mysqli_query($db, $register);
					header('location:profile.php');}
				else{
					echo '<script> alert("nationalcode or pass in curept")</script>';
					header('location:dupsingup.php');}
				
			}
		

?>

