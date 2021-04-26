<?php

	require_once('model/coursemodel.php');

	if(isset($_POST['submit'])){

		$courseID 	        = $_POST['courseID'];
		$coursename 		    = $_POST['coursename'];
		
        
        $day                = $_POST['dd'];
        $month              = $_POST['mm'];
        $year               = $_POST['yyyy'];
		
        $type             = $_POST['type'];
		  $description             = $_POST['description'];

		$flagcoursename = true;
			// Date Validation
			if(($day > 0 && $day <= 31) && ($month > 0 && $month <= 12) && ($year >= 1700 && $year <= 2021)){
				$joindate = $year.'-'.$month.'-'.$day;

			}else{
				echo "Please put a valid date (i.e., dd: 01-31, mm: 01-12, yyyy: 1700-2021)\n";
			}
			
			
			if($flagcoursename == true){
				
				// Storing the valid data into db

                $course = [
                    'courseID' 		    => $courseID,
                    'coursename'		    => $coursename,
            
                   
                   
                 
                    'type'		        => $type,
					 'joindate' 		=> $joindate,
					  'description' 		=> $description
                ];
                
                $status = insertCourse($course);

                if($status){
                    header('location: course.php');

                }else{
                    echo "Database Error! Try again.";
                }
			}
			
		}
	
?>