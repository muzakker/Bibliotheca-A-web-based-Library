<?php

	include('../../model/issuedModel.php');
    require_once('../../model/penaltyModel.php');

	if(isset($_POST['submit'])){

		$issueID 	        = $_GET['issueID'];
        $amount             = $_POST['penalty'];
		
		
        // Amount Validation
        if(empty($amount) && $amount < 0){
            echo "Error! Fill up the penalty amount correctly...";
        }else{
    
            // Storing the valid data into db

            $row = getIssueByID($issueID);

            $penalty = [
                'issueID' 		    => $issueID,
                'username' 		    => $row['username'],
                'bookname'		    => $row['bookname'],
                'issuedDate' 		=> $row['issuedDate'],
                'returnedDate'		=> $row['returnedDate'],
                'amount'            => $amount
            ];
            
            $status = insertPenalty($penalty);

            if($status){
                header('location: ../view/penaltyStatus.php');

            }else{
                echo "Database Error! Try again.";
            }
        }
    }
?>