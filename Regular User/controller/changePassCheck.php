<?php

	require_once('../model/userModel.php');
	
	if(isset($_POST['submit'])){

		$currentPass    = $_POST['currentPass'];
		$newPass        = $_POST['newPass'];
        $rePass         = $_POST['rePass'];
        

        $username = $_COOKIE['username'];
        $row = getUserByName($username);

		$flag = true;

		if(empty($currentPass) || empty($newPass) || empty($rePass)){
			
			echo "Please fill up all the fields!\n";
			$flag = false;

		}else{

			// password validation
            if($currentPass != $row['password']){
                echo "Current Password doesn't match! Try again...";
                $flag = false;

            }else{
                if($newPass != $rePass){
                    echo "New Password and Retyped Passwords do not match! Try again...";
                    $flag = false;

                }else{
                    if (strlen($newPass) < 8) {
                        echo "Password must not be less than eight (8) characters!\n";
                        $flag = false;
                    }

                    $flagChar = false;
                    for ($itr = 0; $itr < strlen($newPass); $itr++) {
                        if (($newPass[$itr] === '@')
                            || ($newPass[$itr] === '#')
                            || ($newPass[$itr] === '$')
                            || ($newPass[$itr] === '%')
                        ) {
                            $flagChar = true;
                            break;
                        }
                    }
                    if ($flagChar == false) {
                        echo "Password must contain at least one of the special characters (@, #, $, %)\n";
                    }
                }
            }

			if($flag == true){
				
				// updating the valid password into db

				$status = updatePassword($newPass);
				if($status){
					header('location: ../view/profile.php');

				}else{
					echo "Update Error! Try Again...";
				}
			}
			
		}
	}
?>