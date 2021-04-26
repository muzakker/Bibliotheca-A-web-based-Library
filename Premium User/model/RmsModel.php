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

    function validateUsername($username){
		$conn = getConnection();
		$sql = "select * from users where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(empty($row)){
			return false;
		}else{
			return true;
		}
	}

	function insertUser($users){
		$conn = getConnection();
		$sql = "insert into users (username, fullname, gender, email, type)
        values('{$users['username']}', '{$users['fullname']}', '{$users['gender']}', '{$users['email']}', '{$users['type']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getUserByID($id){
		$conn = getConnection();
		$sql = "select * from users where id='{$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

    function getUserByName($username){
		$conn = getConnection();
		$sql = "select * from users where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}



?>