<?php
	
	require_once('db.php');

	function insertpayment($payment){
		$conn = getConnection();
	
		
       $sql = "insert into payment(paymentID, name, email, paymentdate, type, cardno, password)
	   
        values('{$payment['paymentID']}', '{$payment['name']}', '{$payment['email']}', '{$payment['paymentdate ']}', 
        '{$payment['type']}', '{$payment['cardno']}', '{$payment['password']}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	
    function getPaymentByID($paymentID){
		$conn = getConnection();
		$sql = "select * from payment where paymentID = '{$paymentID}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllPayment(){
		$conn = getConnection();
		$sql = "select * from payment";
		$result = mysqli_query($conn, $sql);
		$payment = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($payment, $row);
		}

		return $payment;
	}

	function updatePayment($payment){
		$conn = getConnection();
		$sql = "UPDATE payment SET name='{$payment['name']}', email='{$payment['email']}', , paymentdate='{$payment['paymentdate']}'
        type='{$payment['type']}',  cardno='{$book['cardno']}', password='{$payment['password']}' WHERE paymentID='{$payment['paymentID']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deletePayment($paymentID){
		$conn = getConnection();
		$sql = "delete from payment where paymentID='{$paymentID}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>