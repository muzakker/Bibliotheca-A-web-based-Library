<?php 

    require_once('../../model/userModel.php'); 
    $username = $_COOKIE['username'];
    $row = getUserByName($username);

?>

<!-- side panel -->
    <div id="side_panel" style="width: 300px; background-color:#caefff; font-family:Arial;" align="center">
        <h2><?php echo $_COOKIE['username']?></h2>
        <a href="accSetting.php">
            <img src="../../Admin/assets/images/<?php echo $row['filename'];?>" height="150px;" width="150px" alt="Profile Photo" style="border-radius:50%">
        </a>
        <br> <br> <br>

        <!-- Dashboard -->
        <a href="premiumDashboard.php" style="text-decoration: none;">
            <span style="font-size:25px;">Dashboard</span>
        </a>

        <hr><br>
        <!-- Buy Book List-->
        <a href="buyBooksList.php" style="text-decoration: none;">
            <span style="font-size:25px">Buy Book List</span>
        </a> 

         <hr><br>
        <!-- Book List -->
        <a href="myCartBooks.php" style="text-decoration: none;">
            <span style="font-size:25px">My Cart Books List</span>
        </a> 

        <hr><br>
        <!-- Renew-Membership -->
        <a href="course.php" style="text-decoration: none;">
            <span style="font-size:25px">Course List</span>
        </a>

        <hr><br>
        <!-- Renew-Membership -->
        <a href="Rms1.php" style="text-decoration: none;">
            <span style="font-size:25px">Renew-Membership</span>
        </a>

        <hr><br>
        <!-- Inventory -->
        <a href="inventory.php" style="text-decoration: none;">
            <span style="font-size:25px">Book History</span>
        </a>
    </div>