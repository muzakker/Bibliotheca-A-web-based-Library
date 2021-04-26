<?php

	require_once('../model/userModel.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		
		if($username == "" || $password == ""){
			echo "Please fill up all fields!";

		}else{
			
			// validating user			
			$status = validateUser($username, $password);

			if($status){
				setcookie('status', 'true', time()+(3600 * 24 * 365), '/');
				setcookie('username', $username, time()+(3600 * 24 * 365), '/');
				setcookie('password', $password, time()+(3600 * 24 * 365), '/');
				//setcookie('id', $itr, time()+(3600 * 24 * 365), '/');
				header('location: ../view/premiumHome.php');

			}else{

				echo "Wrong Credentials...";
			}
		}
	}
?>