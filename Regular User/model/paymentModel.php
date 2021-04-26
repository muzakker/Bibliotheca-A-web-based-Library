
<?php
	
	require_once('db.php');


	function payment($pay){
		$conn = getConnection();
		$sql = "insert into payment (FullName, Email, Address, Account_Number, password, bookName, price)
        values('{$pay['Fname']}', '{$pay['email']}', '{$pay['address']}','{$pay['accountNumber']}','{$pay['password']}' ,'{$pay['bookName']}','{$pay['cost']}' )";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function membershippayment($pay){
		$conn = getConnection();
		$sql = "insert into payment (FullName, Email, Address, Account_Number, password,  price)
        values('{$pay['name']}', '{$pay['email']}', '{$pay['address']}','{$pay['accountNumber']}','{$pay['password']}' , 200 )";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	

?>