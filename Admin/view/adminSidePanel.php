<?php
	if(isset($_COOKIE['status'])){
?>

<?php 

    require_once('../../model/userModel.php'); 
    $username = $_COOKIE['username'];
    $row = getUserByName($username);

?>

<!-- side panel -->
    <div id="side_panel" style="width: 300px; background-color:#caefff; font-family:Arial;" align="center">
        <h2><?php echo $_COOKIE['username']?></h2>
        <a href="accSetting.php">
            <img src="../assets/images/<?php echo $row['filename'];?>" height="150px;" width="150px" alt="Profile Photo" style="border-radius:50%">
        </a>
        <br> <br> <br>

        <!-- Dashboard -->
        <a href="adminDashboard.php" style="text-decoration: none;">
            <span style="font-size:25px;">Dashboard</span>
        </a>

        <hr><br>
        <!-- Explore -->
        <a href="explore.php" style="text-decoration: none;">
            <span style="font-size:25px">Explore</span>
        </a>

        <hr><br>
        <!-- Managerial Actions -->
        <a href="managerialActions.php" style="text-decoration: none;">
            <span style="font-size:25px">Managerial Actions</span>
        </a>

        <hr><br>

        <!-- Inventory -->
        <a href="inventory.php" style="text-decoration: none;">
            <span style="font-size:25px">Inventory</span>
        </a>

        <hr><br>
        <!-- Library Actions -->
        <a href="libraryActions.php" style="text-decoration: none;">
            <span style="font-size:25px">Library Actions</span>
        </a>

        <hr><br>
        <!-- Review Issues -->
        <a href="reviewIssues.php" style="text-decoration: none;">
            <span style="font-size:25px">Review Issues</span>
        </a>

        <hr><br>
        <!-- Blog Creation -->
        <a href="blogCreation.php" style="text-decoration: none;">
            <span style="font-size:25px">Create a Blog</span>
        </a>
    </div>
    
    <?php
	}else{
		header('location: signin.php');
	}
?>
