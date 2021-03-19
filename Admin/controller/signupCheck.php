<?php
	
	if(isset($_POST['submit'])){

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

		// Picture uploading
		$fileName = $file['name'];
		$fileTmpName = $file['tmp_name'];
		$fileSize = $file['size'];
		$fileError = $file['error'];
		$fileType = $file['type'];

		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));

		$allowed = array('jpg', 'jpeg', 'png');

		if($username == "" || $name == "" || $email == "" || $password == "" || $confirmPassword == "" || $gender == "" || $user_type == "" || $day == "" || $month == "" || $year == ""){
			echo "Please fill up all the information!";

		}else{

			// Profile Picture Validation
			if(in_array($fileActualExt, $allowed)){
				if($fileError === 0){
					if($fileSize < 1000000){
						$fileNameFinal = $username.".".$fileActualExt;
						$fileDestination = '../assets/'.$fileNameFinal;
						move_uploaded_file($fileTmpName, $fileDestination);
					} else {
						echo "Uploaded File is too big. Please upload within 1MB.";
					}
				} else {
					echo "An error occurred! Try again.";
				}
			} else {
				echo "Please upload a file of jpg, jpeg or png format.";
			}

			// Date of Birth Validation
			if(!($day > 0 && $day <= 31) && ($month > 0 && $day <= 12) && ($year >= 1900 && $year <= 2021)){
				echo "Please put a valid date (i.e., dd: 1-31, mm: 1-12, yyyy: 1900-2021)";
			}

			// username validation
			for($itr = 0; $itr < strlen($username); $itr++){
				if(($username[$itr] >= 'A' && $username[$itr] <= 'Z')
				|| ($username[$itr] >= 'a' && $username[$itr] <= 'z')
				|| ($username[$itr] >= 0 && $username[$itr] <= 9)
				|| ($username[$itr] === '.')
				|| ($username[$itr] === '-')
				|| ($username[$itr] === '_')){
					continue;
				}
				else{
					echo "User Name can contain alpha numeric characters, period, dash or underscore only!";
					break;
				}
			}
			if(strlen($username) < 2){
				echo "User Name must contain at least two (2) characters!";
			}

			// Name Validation
			if(strlen($name) < 2){
				echo "Name must contain at least two (2) characters!";
			}

			for($itr = 0; $itr < strlen($name); $itr++){
				if(($name[$itr] >= 'A' && $name[$itr] <= 'Z')
				|| ($name[$itr] >= 'a' && $name[$itr] <= 'z')
				|| ($name[$itr] === ' ')){
					continue;
				}
				else{
					echo "Name can only contain alphabets and white spaces!!!";
					break;
				}
			}

			// Password Validation
			// if(strlen($password) < 8){
			// 	echo "Password must not be less than eight (8) characters!";
			// }
			$flag = false;
			for($itr = 0; $itr < strlen($password); $itr++){
				if(($password[$itr] === '@')
				|| ($password[$itr] === '#')
				|| ($password[$itr] === '$')
				|| ($password[$itr] === '%')){
					$flag = true;
					break;
				}
			}
			if($flag == false){
				echo "Password must contain at least one of the special characters (@, #, $, %)";
			}

			// Storing the valid data into a json file

			$myFile = fopen('../model/users.json', 'r');
			$data = fread($myFile, filesize('../model/users.json'));
			$json = json_decode($data, true);

			$elementCount  = count($json);

			for($itr = 0; $itr < $elementCount; $itr++){
				if($json[$itr]['username'] == $username){
					echo 'Username is not available, please choose another.';	
				}
			}

			$users = [
				'username' 		=> $username,
				'name' 			=> $name,
				'email' 		=> $email,
				'gender' 		=> $gender,
				'user_type' 	=> $user_type,
				'day'			=> $day,
				'month'			=> $month,
				'year'			=> $year,
				'month'			=> $month,
				'fileName'		=> $fileNameFinal,
				'password'		=> $password
			];

			array_push($json, $users);

			$data = json_encode($json);
			$myFile = fopen('../model/users.json', 'w');
			fwrite($myFile, $data);

			// If passwords put correctly show the sign in page
			if($password == $confirmPassword){
				header('location: ../view/signin.php');                
			}else{
				echo "Password and Confirm Password do not match, Try Again!";
			}
		}
	}
?>