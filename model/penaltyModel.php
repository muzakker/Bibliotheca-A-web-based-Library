<?php
	
	require_once('db.php');

	function insertPenalty($penalty){
		$conn = getConnection();
		$sql = "insert into penalty (issueID, username, bookname, issuedDate, returnedDate, amount) 
        values('{$penalty['issueID']}', '{$penalty['username']}', '{$penalty['bookname']}', '{$penalty['issuedDate']}', '{$penalty['returnedDate']}', '{$penalty['amount']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	
    function getPenaltyByID($issueID){
		$conn = getConnection();
		$sql = "select * from penalty where issueID = '{$issueID}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllPenalty(){
		$conn = getConnection();
		$sql = "select * from penalty";
		$result = mysqli_query($conn, $sql);
		$penalty = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($penalty, $row);
		}

		return $penalty;
	}

	function deletePenalty($issueID){
		$conn = getConnection();
		$sql = "delete from penalty where issueID='{$issueID}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>