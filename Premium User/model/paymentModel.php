<?php
	
	require_once('db.php');

/*	function validateUser($username){
		$conn = getConnection();
		$sql = "select * from user where username='{$username}'}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);


		if(empty($row)){
			return false;
		}else{
			return true;
		}
	}*/

    /*function validateUsername($username){
		$conn = getConnection();
		$sql = "select * from users where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(empty($row)){
			return false;
		}else{
			return true;
		}
	}*/

	function insertUser($payment){
		$conn = getConnection();
		$sql = "insert into payment (fullname, email, address, accountnumber, password)
        values('{'{$payment ['fullname']}','{$payment['email']}', '{$payment['address']}',
    	'{$payment['accountnumber']}', '{$payment['password']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getUserByID($id){
		$conn = getConnection();
		$sql = "select * from payment where id='{$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

   /* function getUserByName($username){
		$conn = getConnection();
		$sql = "select * from users where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}*/

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from payment";
		$result = mysqli_query($conn, $sql);
		$payment = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($payment, $row);
		}

		return $payment;
	}



?>