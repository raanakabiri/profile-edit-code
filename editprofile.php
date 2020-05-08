<?php 

	require('config/config.php');	
	if (isset($_POST['send'])) {
				$idpro= $_POST["idpro"];
				$firstname = $_POST["firstname"];
				$lastname = $_POST['lastname'];
				$nationalcode= $_POST['nationalcode'];
				$email = $_POST['email'];
				$phonenumber = $_POST['phonenumber'];
				$password = $_POST['password'];
				$editpro="UPDATE users SET firstname='$firstname',lastname='$lastname',nationalcode='$nationalcode', email='$email', phonenumber='$phonenumber', password='$password' WHERE id='$idpro' ";
				mysqli_query($db,$editpro);
				if(mysqli_query($db,$editpro))
				{
				echo '<script> alert("انجام شد")</script>';
						header("Location: editeprofilesuccess.php");
					
				}
			
				else{
				
				 echo '<script> alert("تغییرات انجام نشد")</script>';}
				
	}
			

?>
