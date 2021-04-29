<?php

	require_once('../../model/penaltyModel.php');
	$issueID = $_GET['issueID'];
	$status = deletePenalty($issueID);

	if($status){
		header('location: ../view/penaltyStatus.php');
	}else{
		echo "Error! Process couldn't be completed, try again...";
	}

?>