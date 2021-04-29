<?php
	
	require_once('db.php');

	function insertBuyBooks($buybooks){
		$conn = getConnection();
		$sql = "insert into buybooks (bookID, bookname, authorname, buydate , description)
        values('{$buybooks['bookID']}', '{$buybooks['bookname']}', '{$buybooks['authorname']}', '{$buybooks['buydate']}', 
        '{$buybooks['description']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	  function getBuyBookseByID($booksID){
		$conn = getConnection();
		$sql = "select * from buybooks where bookID = '{$bookID}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllBuyBooks(){
		$conn = getConnection();
		$sql = "select * from buybooks";
		$result = mysqli_query($conn, $sql);
		$buybooks = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($buybooks, $row);
		}

		return $buybooks;
	}


	function updateBuyBooks($buybooks){
		$conn = getConnection();
		$sql = "UPDATE buybooks SET bookname='{$buybooks['bookname']}', 
        authorname='{$buybooks['authorname']}', buydate='{$buybooks['buydate']}', description='{$buybooks['description']}' WHERE bookID='{$buybooks['bookID']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteBuyBooks($bookID){
		$conn = getConnection();
		$sql = "delete from buybooks where bookID='{$bookID}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>