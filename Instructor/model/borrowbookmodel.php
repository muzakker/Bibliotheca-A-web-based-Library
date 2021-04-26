<?php
	
	require_once('db.php');

	function insertborrowlist($borrowlist){
		$conn = getConnection();
		$sql = "insert into borrowlist ( username,  duration)
        values('{$borrowlist['username']}', '{$borrowlist['duration']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	
    function getborrowlistByusername($username){
		$conn = getConnection();
		$sql = "select * from borrowlist where username = '{$username}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllborrowlist(){
		$conn = getConnection();
		$sql = "select * from borrowlist";
		$result = mysqli_query($conn, $sql);
		$borrowlist = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($borrowlist, $row);
		}

		return $borrowlist;
	}

	
	

?>