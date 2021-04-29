 <?php
	
		require_once('../../model/reviewModel.php');

		$bookName	 = $_POST['rbookName'];
		$authorName	 = $_POST['rauthorName'];
		$description = $_POST['rdescription'];


		$flagbookName 		= true;
		$flagauthorName 	= true;
		$flagdescription 	= true;
		
		if(empty($flagbookName) || empty($flagauthorName) || empty($flagdescription)){
				echo "Please fill up all fields!";

				$flagdescription	 = false;
				$flagauthorName 	 = false;
				$flagbookName 		 = false;

		}else{

				if($flagdescription == true && $flagauthorName == true && $flagbookName == true){
					$bookreview = [
						'description' 			=> $description,
						'authorName'			=> $authorName,
						'bookName' 				=> $bookName
					];
					
					$status = reviewBook($bookreview);

					if($status){
						echo "Your review is on process.";

					}else{
						echo "Database Error! Try again.";
					}
					
				}
			

	 	 }	
		
?>