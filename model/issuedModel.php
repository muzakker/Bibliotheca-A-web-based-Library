<?php
	
	require_once('db.php');

	function insertIssue($issue){
		$conn = getConnection();
		$sql = "insert into issuedstatus (issueID, username, bookname, issuedDate, returnedDate) 
        values('{$issue['issueID']}', '{$issue['username']}', '{$issue['bookname']}', '{$issue['issuedDate']}', '{$issue['returnedDate']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

    function validateIssueID($issueID){
		$conn = getConnection();
		$sql = "select * from issuedstatus where issueID='{$issueID}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(empty($row)){
			return false;
		}else{
			return true;
		}
	}

    // function runSQLIssue($sqlcomm){
	// 	$conn = getConnection();
	// 	$sql = $sqlcomm;
	// 	$result = mysqli_query($conn, $sql);
	// 	$issue = [];

	// 	while ($row = mysqli_fetch_assoc($result)) {
	// 		array_push($issue, $row);
	// 	}

	// 	return $issue;
	// }
	
    function getIssueByID($issueID){
		$conn = getConnection();
		$sql = "select * from issuedstatus where issueID = '{$issueID}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllIssue(){
		$conn = getConnection();
		$sql = "select * from issuedstatus";
		$result = mysqli_query($conn, $sql);
		$issue = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($issue, $row);
		}

		return $issue;
	}

	// function penalize($issue){
	// 	$conn = getConnection();
	// 	$sql = "UPDATE issuedstatus SET bookname='{$issue['bookname']}', issuedDate='{$issue['category']}', 
    //     returnedDate='{$issue['returnedDate']}' WHERE issueID='{$issue['issueID']}'";
		
	// 	if(mysqli_query($conn, $sql)){
	// 		return true;
	// 	}else{
	// 		return false;
	// 	}
	// }

	function deleteIssue($issueID){
		$conn = getConnection();
		$sql = "delete from issuedstatus where issueID='{$issueID}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>