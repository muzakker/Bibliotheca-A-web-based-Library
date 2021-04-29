<?php

	require_once('../../model/paymentModel.php');

	if(isset($_POST['submit'])){

		$paymentID 	        = $_POST['paymentID'];
		$name 		    = $_POST['name'];
		$email 		    = $_POST['email'];
       
        $day                = $_POST['dd'];
        $month              = $_POST['mm'];
        $year               = $_POST['yyyy'];
		
        $type             = $_POST['type'];
			
        $cardno             = $_POST['cardno'];
			
        $password             = $_POST['password'];

		$flagname = true;
	

			// Date Validation
			if(($day > 0 && $day <= 31) && ($month > 0 && $month <= 12) && ($year >= 1700 && $year <= 2021)){
				$paymentdate = $year.'-'.$month.'-'.$day;

			}else{
				echo "Please put a valid date (i.e., dd: 01-31, mm: 01-12, yyyy: 1700-2021)\n";
			}
			
			
			if($name == true){
				
				// Storing the valid data into db

                $payment = [
                    'paymentID' 		    => $paymentID,
                    'name'		    => $name,
                    'email' 		    => $email,
                    'paymentdate' 		    => $paymentdate,
                    'type' 		=> $type,
                    'cardno'			=> $cardno,
                    'password'		        => $password
                ];
                
                $status = insertPayment($payment);

                if($status){
                    header('location: ../view/payment.php');

                }else{
                    echo "Database Error! Try again.";
                }
			}
			
		}
	
?>