<?php

	require_once('../../model/borrowbookmodel.php');

	if(isset($_POST['submit'])){

		
		$username 		    = $_POST['username'];
	
        $duration             = $_POST['duration'];

		$flagusername = true;
		
		
			// duration Validation
			if($duration> 0 && $duration <= 15) {
				$duration = $duration;

			}else{
				echo "duration must be between 1-15days\n";
			}
			
			
			if($flagusername == true){
				
				// Storing the valid data into db

                $borrowlist = [
                  
                    'username'		    => $username,
                   
                    'duration'		        => $duration
                ];
                
                $status = insertborrowlist($borrowlist);

                if($status){
                    header('location: ../view/borrowlist.php');

                }else{
                    echo "Database Error! Try again.";
                }
			}
			
		}
	
?>