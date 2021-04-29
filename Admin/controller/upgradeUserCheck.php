<?php

	require_once('../../model/userModel.php');
	include('../../model/paymentModel.php');
	
	if(isset($_POST['submit'])){

		$type 	= $_POST['usertype'];

        $username = $_GET['username'];
		$row = getUserByName($username);
		$fullName = $row['fullname'];

		$paymentRequest = getRequestByFullName($fullName);
		$id = $paymentRequest['paymentId'];

		if(empty($type)){
			echo "Please fill up all the information!\n";

		}else{

			// validating user			
			$validate = validateUserName($username);

			if($validate){

				// updating the valid data into db

				$user = [
					'username' 	=> $username,
					'type'		=> $type
				];

				$status = updateType($user);
				if($status){
					deleteRequest($id);
					header('location: ../view/managerialActions.php');

				}else{
					echo "Update Error! Try Again...";
				}

			}else{
				echo "user not found";
			}
			
		}
	}
?>