 <?php
	
		require_once('../../model/returnModel.php');


		$booknumber	 = $_POST['booknumber'];
		$returnId	 = $_POST['returnId'];
		$bookName	 = $_POST['returnBookName'];

		$flagbooknumber = true;
		$flagreturnId 	= true;
		$flagbookName 	= true;
		
		if(empty($flagbooknumber) || empty($flagreturnId) || empty($flagbookName)){
				echo "Please fill up all fields!";
				$flagbooknumber = false;
				$flagreturnId 	= false;
				$flagbookName 	= false;

		}else{

				if($booknumber>3)
		 	{
		 		echo" limit exceeded";
		 		$flagbooknumber = false;
		 	}else
	 	 	 {

				if($flagbooknumber == true && $flagreturnId == true && $flagbookName == true){
					$bookr = [
						'booknumber' 		=> $booknumber,
						'returnId'			=> $returnId,
						'bookName' 			=> $bookName
					];
					
					$status = returnBook($bookr);

					if($status){
						echo "Your request is on process.";

					}else{
						echo "Database Error! Try again.";
					}
					
				}
			} 

	 	 }
?>