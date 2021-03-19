<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "User Profile";
	include('header.php');
?>

<?php include('adminNav.php')?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

    <?php include('adminSidePanel.php')?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="font-size: 30px;">
            <b> My Profile </b>
        </span>
        <hr><br>

        <!-- picture -->
        <img src="../assets/muzakker.png" alt="muzakker" height="200px" width="200px" style="border-radius: 50%">
        <br>
        <a href="accSetting.php">Change</a>

        <br><br>
        <span style="font-size: 20px;"><u>Username</u> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
        
        <br>
        <span style="font-size: 20px;"><u>Name</u> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>

        <br>
        <span style="font-size: 20px;"><u>User Type</u> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>

        <br>
        <span style="font-size: 20px;"><u>Email</u> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
        
        <br>
        <span style="font-size: 20px;"><u>Gender</u> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
        
        <br>
        <span style="font-size: 20px;"><u>Date of Birth</u>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
                
    </div>
</div>

<?php include('footer.html')?>

<?php
	}else{
        header('location: signin.php');
    }
?>