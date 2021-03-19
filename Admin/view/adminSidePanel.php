<?php include('../controller/json_read.php'); ?>

<!-- side panel -->
    <div id="side_panel" style="width: 300px; background-color:#caefff; font-family:Arial;" align="center">
        <h2><?php echo $json[$_COOKIE["id"]]['username']?></h2> <!-- php code -->
        <a href="accSetting.php">
            <img src="../assets/<?php echo $json[$_COOKIE["id"]]['fileName'];?>" height="150px;" width="150px" alt="Profile Photo" style="border-radius:50%">
        </a>
        <br> <br> <br>

        <!-- Dashboard -->
        <a href="adminDashboard.php" style="text-decoration: none;">
            <span style="font-size:25px;">Dashboard</span>
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