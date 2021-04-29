<?php
	
	require_once('db.php');

	function reviewBook($bookreview){
		$conn = getConnection();
		$sql = "insert into reviewbooks (description, authorName, bookName)
        values('{$bookreview['description']}', '{$bookreview['authorName']}', '{$bookreview['bookName']}' )";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	

?>