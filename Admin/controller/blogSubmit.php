<?php

	require_once('../../model/blogModel.php');
    include('../../model/userModel.php');
	
	if(isset($_POST['submit'])){

        $content = $_POST['content'];        

        $username = $_COOKIE['username'];
        $row = getUserByName($username);

		$flag = true;


		if(empty($content)){
			
			echo "Fill up the content!\n";
			$flag = false;

		}else{

            // Content Validation
            if(strlen($content) > 300){
                echo "Your content should be within 300 characters limit";
                $flag = false;
            }
        

			if($flag == true){
			    
				// inserting the valid data into db
                $blog = [
                    'id'            => $row['id'],
                    'username' 		=> $username,
                    'content'       => $content
                ];

				$status = insertBlog($blog);

				if($status){
					if($row['type'] == 'admin'){
						header('location: ../view/explore.php');

					}else if($row['type'] == 'regular_user'){
						header('location: ../../Regular_User/view/explore.php');

					}else if($row['type'] == 'instructor'){
						header('location: ../../Instructor/view/explore.php');
					}else{
						header('location: ../../Premium_User/view/explore.php');
					}

				}else{
					echo "Insertion Error! Try Again...";

				}
			}else{
                echo "Something's wrong...Try again";

            }
			
		}
	}
?>