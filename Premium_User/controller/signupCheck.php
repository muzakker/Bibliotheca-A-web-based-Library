<?php

require_once('../model/userModel.php');

$username 	        = $_POST['username'];
$name 		        = $_POST['name'];
$email 		        = $_POST['email'];
$gender             = $_POST['gender'];
$user_type          = $_POST['user_type'];
$day                = $_POST['dd'];
$month              = $_POST['mm'];
$year               = $_POST['yyyy'];
$password 	        = $_POST['password'];
$confirmPassword 	= $_POST['confirmPassword'];
$file				= $_FILES['picture'];

$flagUsername = true;
$flagName = true;
$flagPass = true;

// Picture uploading
$fileName = $file['name'];
$fileTmpName = $file['tmp_name'];
$fileSize = $file['size'];
$fileError = $file['error'];
$fileType = $file['type'];

$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg', 'jpeg', 'png');

if (
	empty($username) || empty($name) || empty($email) || empty($password) || empty($confirmPassword)
	|| empty($gender) || empty($user_type) || empty($day) || empty($month) || empty($year)
) {

	echo "Please fill up all the information!\n";
	$flagName = false;
	$flagPass = false;
	$flagUsername = false;
} else {

	// Profile Picture Validation
	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 1000000) {
				$fileNameFinal = $username . "." . $fileActualExt;
				$fileDestination = '../assets/' . $fileNameFinal;
				move_uploaded_file($fileTmpName, $fileDestination);
			} else {
				echo "Uploaded File is too big. Please upload within 1MB.\n";
			}
		} else {
			echo "An error occurred! Try again.\n";
		}
	} else {
		echo "Please upload a file of jpg, jpeg or png format.\n";
	}

	// Date of Birth Validation
	if (($day > 0 && $day <= 31) && ($month > 0 && $month <= 12) && ($year >= 1900 && $year <= 2021)) {
		$dob = $year . '-' . $month . '-' . $day;
	} else {
		echo "Please put a valid date (i.e., dd: 01-31, mm: 01-12, yyyy: 1900-2021)\n";
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

	// Password Validation
	if ($password == $confirmPassword) {

		if (strlen($password) < 8) {
			echo "Password must not be less than eight (8) characters!\n";
			$flagPass = false;
		}
		for ($itr = 0; $itr < strlen($password); $itr++) {
			if (($password[$itr] === '@')
				|| ($password[$itr] === '#')
				|| ($password[$itr] === '$')
				|| ($password[$itr] === '%')
			) {
				$flagPass = true;
				break;
			}
		}
		if ($flagPass == false) {
			echo "Password must contain at least one of the special characters (@, #, $, %)\n";
		}
	} else {
		echo "Passwords do not match, try again!\n";
	}

	if ($flagUsername == true && $flagName == true && $flagPass == true) {

		// Storing the valid data into db				
		$flagUsernameAvailable = validateUsername($username);

		if ($flagUsernameAvailable != true) {
			$user = [
				'username' 		=> $username,
				'password'		=> $password,
				'fullname' 		=> $name,
				'gender' 		=> $gender,
				'email' 		=> $email,
				'dob'			=> $dob,
				'type' 			=> $user_type,
				'filename'		=> $fileNameFinal
			];

			$status = insertUser($user);

			if ($status) {
				header('location: ../view/signin.php');
			} else {
				echo "Database Error! Try again.";
			}
		} else {
			echo "username already available, please try something else...";
		}
	}
}
