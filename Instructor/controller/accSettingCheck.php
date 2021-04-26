<?php

	require_once('model/userModel.php');
	
	if(isset($_POST['submit'])){

		$name 		        = $_POST['name'];
		$email 		        = $_POST['email'];
        $day                = $_POST['dd'];
        $month              = $_POST['mm'];
        $year               = $_POST['yyyy'];
        $gender             = $_POST['gender'];
		$file				= $_FILES['picture'];

        $username = $_COOKIE['username'];

		$flagName = true;

		// Picture uploading
		$fileName = $file['name'];
		$fileTmpName = $file['tmp_name'];
		$fileSize = $file['size'];
		$fileError = $file['error'];
		$fileType = $file['type'];

		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));

		$allowed = array('jpg', 'jpeg', 'png');

		if(empty($name) || empty($email) || empty($gender) || empty($day) || empty($month) || empty($year)){
			
			echo "Please fill up all the information!\n";
			$flagName = false;
		}else{

			// Profile Picture Validation
			if(in_array($fileActualExt, $allowed)){
				if($fileError === 0){
					if($fileSize < 1000000){
						$fileNameFinal = $username.".".$fileActualExt;
						$fileDestination = '../assets/'.$fileNameFinal;
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
			if(($day > 0 && $day <= 31) && ($month > 0 && $month <= 12) && ($year >= 1900 && $year <= 2021)){
				$dob = $year.'-'.$month.'-'.$day;

			}else{
				echo "Please put a valid date (i.e., dd: 01-31, mm: 01-12, yyyy: 1900-2021)\n";
			}

			// Name Validation
			if(strlen($name) < 2){
				echo "Name must contain at least two (2) characters!\n";
				$flagName = false;
			}

			for($itr = 0; $itr < strlen($name); $itr++){
				if(($name[$itr] >= 'A' && $name[$itr] <= 'Z')
				|| ($name[$itr] >= 'a' && $name[$itr] <= 'z')
				|| ($name[$itr] === ' ')){
					$flagName = true;
					continue;
				}
				else{
					echo "Name can only contain alphabets and white spaces!!!\n";
					$flagName = false;
					break;
				}
			}

			if($flagName == true){
				
				// updating the valid data into db
				$user = [
						'username'		=> $username,
						'fullname' 		=> $name,
						'gender' 		=> $gender,
						'email' 		=> $email,
						'dob'			=> $dob,
						'filename'		=> $fileNameFinal
					];

				$status = updateUser($user);
				if($status){
					header('location: profile.php');

				}else{
					echo "Update Error! Try Again...";
				}
			}
			
		}
	}
?>