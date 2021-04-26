<?php
	
	require_once('db.php');


	function returnBook($bookr){
		$conn = getConnection();
		$sql = "insert into rbooks (booknumber, returnId, bookName)
        values('{$bookr['booknumber']}', '{$bookr['returnId']}', '{$bookr['bookName']}' )";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	

?>