<?php

    require_once('../../model/paymentModel.php');

	$name				= $_POST['name'];
	$email  			= $_POST['email'];
	$address  			= $_POST['address'];
	$accountNumber		= $_POST['AcNumber'];


	if($name == "" || $email == "" || $accountNumber == "")
	{
			echo "Please fill up all the information!";

	}else{
		if(strlen($name) < 4){
				echo "Name must contain at least two (4) characters!";
			}

			for($itr = 0; $itr < strlen($name); $itr++){
				if(($name[$itr] >= 'A' && $name[$itr] <= 'Z')|| ($name[$itr] >= 'a' && $name[$itr] <= 'z')|| ($name[$itr] === ' '))
				{
					continue;
				}
				else{
					echo "Name can only contain alphabets and white spaces!!!";
					break;
				}
			}
			for($itr = 0; $itr < strlen($accountNumber); $itr++)
			{
				if(($accountNumber[$itr] >= 0 && $accountNumber[$itr] <= 9)|| ($accountNumber[$itr] === '.')){
					continue;
				}
				else{
					echo "Account number  can contain  numeric characters & dash  only!";
					break;
				}
			}
		
			$pay = [
					'name' 					=> $name,
					'email'					=> $email,
					'address' 				=> $address,
					'accountNumber' 		=> $accountNumber,
				];

			$status = membershippayment($pay);
			
			if($status){
				echo "Your request is on process.";
				header('location: ../view/userHome.php');

			}else{
				echo "Database Error! Try again.";
			}


	}



?>