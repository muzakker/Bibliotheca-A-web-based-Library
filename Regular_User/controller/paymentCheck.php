<?php

    $title = "User Home";
    require_once('../../model/bookModel.php');
    require_once('../../model/paymentModel.php');


	$Fname				= $_POST['Fname'];
	$email  			= $_POST['email'];
	$address  			= $_POST['address'];
	$accountNumber		= $_POST['AcNumber'];
	$password 	        = $_POST['Password'];
	$bookName 	        = $_POST['bookName'];
	$cost	 	        = $_POST['cost'];


	if($Fname == "" || $email == "" || $password == "" || $accountNumber == "")
	{
			echo "Please fill up all the information!";

	}else{
		if(strlen($Fname) < 4){
				echo "Name must contain at least two (4) characters!";
			}

			for($itr = 0; $itr < strlen($Fname); $itr++){
				if(($Fname[$itr] >= 'A' && $Fname[$itr] <= 'Z')|| ($Fname[$itr] >= 'a' && $Fname[$itr] <= 'z')|| ($Fname[$itr] === ' '))
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
			if(strlen($password) < 8)
			{
			   echo "Password must not be less than eight (8) characters!";
			}else
			{
				$pay = [

						'Fname' 				=> $Fname,
						'email'					=> $email,
						'address' 				=> $address,
						'accountNumber' 		=> $accountNumber,
						'password' 				=> $password,
						'bookName'				=> $bookName,
						'cost'					=> $cost

					];

					$status = payment($pay);

					if($status){
						echo "Your request is on process.";

					}else{
						echo "Database Error! Try again.";
					}
				
			}






	}



?>