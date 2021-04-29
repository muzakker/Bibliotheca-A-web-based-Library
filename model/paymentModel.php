
<?php
	
	require_once('db.php');

	function membershippayment($pay){
		$conn = getConnection();
		$sql = "insert into payment (FullName, Email, Address, Account_Number, price)
        values('{$pay['name']}', '{$pay['email']}', '{$pay['address']}','{$pay['accountNumber']}', 200)";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getRequestByFullName($fullname){
		$conn = getConnection();
		$sql = "select * from payment where FullName='{$fullname}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}
	
	function getAllRequest(){
		$conn = getConnection();
		$sql = "select * from payment";
		$result = mysqli_query($conn, $sql);
		$payment = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($payment, $row);
		}

		return $payment;
	}

	function deleteRequest($id){
		$conn = getConnection();
		$sql = "delete from payment where paymentId='{$id}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>