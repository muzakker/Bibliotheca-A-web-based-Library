<?php
	
	require_once('db.php');


	function requestBookD($bookD){
		$conn = getConnection();
		$sql = "insert into bookrequest (authorName, numberofBooks, bookName, description)
        values('{$bookD['authorName']}', '{$bookD['numberofBooks']}', '{$bookD['bookName']}','{$bookD['description']}' )";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllBookRequest(){
		$conn = getConnection();
		$sql = "select * from bookrequest";
		$result = mysqli_query($conn, $sql);
		$brequest = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($brequest, $row);
		}

		return $brequest;
	}

	function getRequestBookByID($id){
		$conn = getConnection();
		$sql = "select * from bookrequest where requestId='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function deleteRequestedBook($id){
		$conn = getConnection();
		$sql = "delete from bookrequest where requestId='{$id}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	

?>