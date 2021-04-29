<?php
	
	require_once('../model/paymentModel.php');

		$name 		        = $_POST['name'];
		$email 		        = $_POST['email'];
		$address            = $_POST['address'];
        $account_number     = $_POST['accountnumber'];
        $password			= $_POST['password'];
        

$flagName = true;
$flagPass = true;

		if (
	 empty($name) || empty($email) 
	|| empty($address ) || empty($account_number) || empty($password) ) {

	echo "Please fill up all the information!\n";

	$flagName = false;
	$flagPass = false;
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

if ( $flagName == true) {
		// Storing the valid data into db				
		
			$payment = [
				'fullname' 		=> $name,
				
				'email' 		=> $email,
				'address'       => $account_number,
				'password'		=> $password,
				'accountnumber'=> $account_number
				
			];

			$status = insertUser($payment);

			if ($status) {
				
				header('location: ../view/payment.php');
			} else {
				echo "Database Error! Try again.";
			}
		
		}
	
