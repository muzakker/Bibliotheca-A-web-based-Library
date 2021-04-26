<?php
	
	require_once('db.php');


	function requestBookD($bookD){
		$conn = getConnection();
		$sql = "insert into books (authorName, numberofBooks, bookName, description)
        values('{$bookD['authorName']}', '{$bookD['numberofBooks']}', '{$bookD['bookName']}','{$bookD['description']}' )";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	

?>