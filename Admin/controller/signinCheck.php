<?php

	require_once('../../model/userModel.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		
		$row = getUserByName($username);
		$type = $row['type'];

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
				if($type == 'admin'){
					header('location: ../view/adminHome.php');

				}else if($type == 'regular_user'){
					header('location: ../../Regular_User/view/userHome.php');

				}else if($type == 'instructor'){
					header('location: ../../Instructor/view/instructorHome.php');

				}else{
					header('location: ../../Premium_User/view/premiumHome.php');
				}

			}else{
				echo "Wrong Credentials...";
			}
		}
	}
?>