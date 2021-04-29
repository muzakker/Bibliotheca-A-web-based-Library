<?php

	require_once('../../model/issuedModel.php');
	$issueID = $_GET['issueID'];
	$status = deleteIssue($issueID);				

	if($status){
		header('location: ../view/reviewIssues.php');
	}else{
		echo "Error! Process couldn't be completed, try again...";
	}

?>