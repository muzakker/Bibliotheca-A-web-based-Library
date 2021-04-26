<?php

	require_once('model/buybooksModel.php');

	if(isset($_POST['submit'])){

		$bookID 	        = $_POST['bookID'];
		$bookname 		    = $_POST['bookname'];
		
        $authorname            = $_POST['authorname'];
        $day                = $_POST['dd'];
        $month              = $_POST['mm'];
        $year               = $_POST['yyyy'];
		
        $description              = $_POST['description'];

		$flagbookname = true;
			// Date Validation
			if(($day > 0 && $day <= 31) && ($month > 0 && $month <= 12) && ($year >= 1700 && $year <= 2021)){
				$buydate = $year.'-'.$month.'-'.$day;

			}else{
				echo "Please put a valid date (i.e., dd: 01-31, mm: 01-12, yyyy: 1700-2021)\n";
			}
			
			
			if($flagbookname == true){
				
				// Storing the valid data into db

                $buybooks = [
                    'bookID' 		    => $bookID,
                    'bookname'		    => $bookname,
            
                    'authorname' 		    => $authorname,
                    'buydate' 		=> $buydate,
                 
                    'description'		        => $description
                ];
                
                $status = insertBuyBooks($buybooks);

                if($status){
                    header('location: buybooks.php');

                }else{
                    echo "Database Error! Try again.";
                }
			}
			
		}
	
?>