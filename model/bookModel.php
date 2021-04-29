<?php
	
	require_once('db.php');

	function insertBook($book){
		$conn = getConnection();
		$sql = "insert into book (bookID, bookname, category, author, published, filename, price)
        values('{$book['bookID']}', '{$book['bookname']}', '{$book['category']}', '{$book['author']}', 
        '{$book['published']}', '{$book['filename']}', '{$book['price']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	
    function getBookByID($bookID){
		$conn = getConnection();
		$sql = "select * from book where bookID = '{$bookID}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}
	
    function getBookByName($bookname){
		$conn = getConnection();
		$sql = "select * from book where bookname = '{$bookname}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllBook(){
		$conn = getConnection();
		$sql = "select * from book";
		$result = mysqli_query($conn, $sql);
		$book = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($book, $row);
		}

		return $book;
	}

	function runSQLBook($sqlcomm){
		$conn = getConnection();
		$sql = $sqlcomm;
		$result = mysqli_query($conn, $sql);
		$book = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($book, $row);
		}

		return $book;
	}

	function updateBook($book){
		$conn = getConnection();
		$sql = "UPDATE book SET bookname='{$book['bookname']}', category='{$book['category']}', 
        author='{$book['author']}', published='{$book['published']}', price='{$book['price']}', filename='{$book['filename']}' WHERE bookID='{$book['bookID']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteBook($bookID){
		$conn = getConnection();
		$sql = "delete from book where bookID='{$bookID}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>