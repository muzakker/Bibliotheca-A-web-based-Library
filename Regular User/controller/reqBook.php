 <?php
	
		require_once('../model/requestModel.php');


		$authorName	 	 = $_POST['rauthorName'];
		$numbooks		 = $_POST['booknumber'];
		$bookName		 = $_POST['rbookName'];
		$description	 = $_POST['rdescription'];



		$flagauthorNamee = true;
		$flagnumbooks = true;
		$flagbookName = true;
		
		if(empty($flagauthorNamee) || empty($flagnumbooks) || empty($flagbookName))
		{
				echo "Please fill up all fields!";
				$flagauthorNamee = false;
				$flagnumbooks = false;
				$flagbookName = false;

		}else{

			if($numbooks>3)
		 	{
		 		echo"cannnot issue books limit exceeded";
		 		$flagnumbooks = false;
		 	}else
	 	 	 {

				if($flagauthorNamee == true && $flagnumbooks == true && $flagbookName == true){
					$bookD = [
						'authorName' 		=> $authorName,
						'numberofBooks'		=> $numbooks,
						'bookName' 			=> $bookName,
						'description' 		=> $description
					];
					
					$status = requestBookD($bookD);

					if($status){
						echo "Your request is on process.";

					}else{
						echo "Database Error! Try again.";
					}
					
				}
			} 

	 	 }
?>