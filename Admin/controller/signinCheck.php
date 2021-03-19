<?php
	
	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		
		if($username == "" || $password == ""){
			echo "Please fill up all fields!";

		}else{
			
			// Searching the username and password from json file
			$myFile = fopen('../model/users.json', 'r');
			$data = fread($myFile, filesize('../model/users.json'));
			$json = json_decode($data, true);
			$elementCount  = count($json);

			$flag = false;
			for($itr = 0; $itr < $elementCount; $itr++){
				if($json[$itr]['username'] == $username && $json[$itr]['password'] == $password){
					setcookie('status', 'true', time()+(3600 * 24 * 365), '/');
					setcookie('username', $username, time()+(3600 * 24 * 365), '/');
					setcookie('password', $password, time()+(3600 * 24 * 365), '/');
					setcookie('id', $itr, time()+(3600 * 24 * 365), '/');
					header('location: ../view/adminHome.php');
					$flag = true;
					break;
				}
			}
			if($flag === false){
				echo 'Wrong Credentials! Try Again.';
			}
		}
	}
?>