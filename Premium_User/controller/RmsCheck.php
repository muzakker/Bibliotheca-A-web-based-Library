<?php
	
	require_once('../model/RmsModel.php');

		$username 	        = $_POST['username'];
		$name 		        = $_POST['name'];
		$email 		        = $_POST['email'];
		$user_type          = $_POST['user_type'];
        $gender             = $_POST['gender'];
        
        $flagUsername = true;
        $flagName = true;


		if (
	empty($username) || empty($name) || empty($email) 
	|| empty($gender) || empty($user_type) ) {

	echo "Please fill up all the information!\n";
	$flagName = false;
	
	$flagUsername = false;
}
			

	// username validation
	if (strlen($username) < 2) {
		echo "User Name must contain at least two (2) characters!\n";
		$flagUsername = false;
	}

	for ($itr = 0; $itr < strlen($username); $itr++) {
		if (($username[$itr] >= 'A' && $username[$itr] <= 'Z')
			|| ($username[$itr] >= 'a' && $username[$itr] <= 'z')
			|| ($username[$itr] >= 0 && $username[$itr] <= 9)
			|| ($username[$itr] === '.')
			|| ($username[$itr] === '-')
			|| ($username[$itr] === '_')
		) {
			$flagUsername = true;
			continue;
		} else {
			echo "User Name can contain alpha numeric characters, period, dash or underscore only!\n";
			$flagUsername = false;
			break;
		}
	}

	// Name Validation
	if (strlen($name) < 2) {
		echo "Name must contain at least two (2) characters!\n";
		$flagName = false;
	}

	for ($itr = 0; $itr < strlen($name); $itr++) {
		if (($name[$itr] >= 'A' && $name[$itr] <= 'Z')
			|| ($name[$itr] >= 'a' && $name[$itr] <= 'z')
			|| ($name[$itr] === ' ')
		) {
			$flagName = true;
			continue;
		} else {
			echo "Name can only contain alphabets and white spaces!!!\n";
			$flagName = false;
			break;
		}
	}

if ($flagUsername == true && $flagName == true) {
		// Storing the valid data into db				
		$flagUsernameAvailable = validateUsername($username);

		if ($flagUsernameAvailable != true) {
			$users = [
				'username' 		=> $username,
				'fullname' 		=> $name,
				'gender' 		=> $gender,
				'email' 		=> $email,
				'type' 			=> $user_type
				
			];

			$status = insertUser($users);

			if ($status) {
				
				header('location: ../view/message.php');
			} else {
				echo "Database Error! Try again.";
			}
		
		}
	}
