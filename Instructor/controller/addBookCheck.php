<?php

	require_once('bookModel.php');

	if(isset($_POST['submit'])){

		$bookID 	        = $_POST['bookID'];
		$bookname 		    = $_POST['bookname'];
		$category 		    = $_POST['category'];
        $author             = $_POST['author'];
        $day                = $_POST['dd'];
        $month              = $_POST['mm'];
        $year               = $_POST['yyyy'];
		$file				= $_FILES['picture'];
        $price              = $_POST['price'];

		$flagbookname = true;
		
		// Picture uploading
		$fileName = $file['name'];
		$fileTmpName = $file['tmp_name'];
		$fileSize = $file['size'];
		$fileError = $file['error'];
		$fileType = $file['type'];

		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));

		$allowed = array('jpg', 'jpeg', 'png');

		if(empty($bookID) || empty($bookname) || empty($category) || empty($author) || empty($day) 
		|| empty($month) || empty($year) || empty($file) || empty($price)){
			
			echo "Please fill up all the information!\n";
			$flagbookname = false;

		}else{

			// Cover Picture Validation
			if(in_array($fileActualExt, $allowed)){
				if($fileError === 0){
					if($fileSize < 1000000){
						$fileNameFinal = $bookname.".".$fileActualExt;
						$fileDestination = '../assets/'.$fileNameFinal;
						move_uploaded_file($fileTmpName, $fileDestination);
					} else {
						echo "Uploaded File is too big. Please upload within 1MB.\n";
					}
				} else {
					echo "An error occurred! Try again.\n";
				}
			} else {
				echo "Please upload a file of jpg, jpeg or png format.\n";
			}

			// Date Validation
			if(($day > 0 && $day <= 31) && ($month > 0 && $month <= 12) && ($year >= 1700 && $year <= 2021)){
				$published = $year.'-'.$month.'-'.$day;

			}else{
				echo "Please put a valid date (i.e., dd: 01-31, mm: 01-12, yyyy: 1700-2021)\n";
			}
			
			
			if($flagbookname == true){
				
				// Storing the valid data into db

                $book = [
                    'bookID' 		    => $bookID,
                    'bookname'		    => $bookname,
                    'category' 		    => $category,
                    'author' 		    => $author,
                    'published' 		=> $published,
                    'filename'			=> $fileNameFinal,
                    'price'		        => $price
                ];
                
                $status = insertBook($book);

                if($status){
                    header('location: books.php');

                }else{
                    echo "Database Error! Try again.";
                }
			}
			
		}
	}
?>