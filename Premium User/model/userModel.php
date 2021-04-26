<?php
	
	require_once('db.php');

	function validateUser($username, $password){
		$conn = getConnection();
		$sql = "select * from user where username='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);


		if(empty($row)){
			return false;
		}else{
			return true;
		}
	}

    function validateUsername($username){
		$conn = getConnection();
		$sql = "select * from user where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(empty($row)){
			return false;
		}else{
			return true;
		}
	}

	function insertUser($user){
		$conn = getConnection();
		$sql = "insert into user (username, password, fullname, gender, email, dob, type, filename)
        values('{$user['username']}', '{$user['password']}', '{$user['fullname']}', '{$user['gender']}', '{$user['email']}', '{$user['dob']}', '{$user['type']}', '{$user['filename']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getUserByID($id){
		$conn = getConnection();
		$sql = "select * from user where id='{$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

    function getUserByName($username){
		$conn = getConnection();
		$sql = "select * from user where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from user";
		$result = mysqli_query($conn, $sql);
		$user = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $user;
	}

	function updateUser($user){
		$conn = getConnection();
		$sql = "UPDATE user SET fullname='{$user['fullname']}', gender='{$user['gender']}', email='{$user['email']}', dob='{$user['dob']}', filename='{$user['filename']}' WHERE username='{$user['username']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	// function deleteUser($id){
	// 	$conn = getConnection();
	// 	$sql = "delete from users where id={$id}";
		
	// 	if(mysqli_query($conn, $sql)){
	// 		return true;
	// 	}else{
	// 		return false;
	// 	}
	// }

?>