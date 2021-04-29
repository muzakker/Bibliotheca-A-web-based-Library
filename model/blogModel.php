<?php
	
	require_once('db.php');

	function insertBlog($blog){
		$conn = getConnection();
		$sql = "insert into blog (id, username, content)
        values('{$blog['id']}', '{$blog['username']}', '{$blog['content']}')";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

    function getAllBlog(){
		$conn = getConnection();
		$sql = "select * from blog";
		$result = mysqli_query($conn, $sql);
		$blog = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($blog, $row);
		}

		return $blog;
	}


?>