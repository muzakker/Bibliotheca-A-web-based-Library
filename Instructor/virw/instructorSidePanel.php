<?php 

    require_once('model/userModel.php'); 
    $username = $_COOKIE['username'];
    $row = getUserByName($username);

?>

<!-- side panel -->
    <div id="side_panel" style="width: 300px; background-color:#caefff; font-family:Arial;" align="center">
        <h2><?php echo $_COOKIE['username']?></h2>
        <a href="accSetting.php">
            <img src="<?php echo $row['filename'];?>" height="150px;" width="150px" alt="Profile Photo" style="border-radius:50%">
        </a>
        <br> <br> <br>

        <!-- Dashboard -->
        <a href="instructorDashboard.php" style="text-decoration: none;">
            <span style="font-size:25px;">Dashboard</span>
        </a>

        <hr><br>
        <!-- features -->
        <a href="features.php" style="text-decoration: none;">
            <span style="font-size:25px">Features</span>
        </a>

        
       

        
<
        <hr><br>
        <!-- Blog Creation -->
        <a href="blogCreation.php" style="text-decoration: none;">
            <span style="font-size:25px">Create a Blog</span>
        </a>
    </div>